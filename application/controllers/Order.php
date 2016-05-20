<?php

class Order extends Main_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Order'=>'mOrder','M_RequestTour'=>'requestTour'));
    }

    /*
     * Start cart
     */

    public function addToCart(){
        $this->log_debug('cart data',print_r($this->input->post(),true));
        $data = array(
            'id'=>$this->input->post('id'),
            'qty'=>$this->input->post('qty'),
            'name'=>$this->input->post('name'),
            'price'=>$this->input->post('price')
        );
        $this->log_debug('data insert',print_r($data,true));
        $this->my_cart->insert($data);
    }
    
    
    private function checkItemCart(){
        if($this->my_cart->total_items() <= 0){
            redirect('','refresh');
        }
    }
    
    public function viewCart(){
        $this->checkItemCart();
        $this->setContentPage('order/cart_page',null,true);
        $this->loadLayoutContent($this->template);
        
    }
    
    public function updateCart(){
        $arrId = $this->input->post('rowId');
        $size = sizeof($arrId);
        $data = array();
        if($size > 0){
            for($i=0;$i<$size;$i++){
                $qty = $this->input->post('qty')[$i];
                if(!empty($qty) && $qty > 0){
                    $data[$i] = array(
                        'rowid'=>$arrId[$i],
                        'qty'=>$this->input->post('qty')[$i]
                    );
                }else{
                    $this->my_cart->remove($arrId[$i]);
                }
            }
        }
        $this->my_cart->update($data);
        redirect('order/viewCart','refresh');
    }
    
    
    public function removeCart(){
        $rowId = $this->input->post('rowId');
        $this->my_cart->remove($rowId);
    }

    /*
     * End cart
     */

    public function checkoutPage(){
        $this->checkItemCart();
        $this->setContentPage('order/checkout_page',null,true);
        $this->loadLayoutContent($this->template);
    }
    
    public function checkout(){
        $this->log_debug("check out data",print_r($this->input->post(),true));
        $orderDetails = array();
        $size = $this->my_cart->total_items();
        if($size > 0){
            $orderData = $this->input->post();
            $orderData['user_id']= $this->session->userdata("user_id");
            $orderData['status'] = STATUS_PENDING;
            
            $i=0;
            $total=0;
            foreach($this->my_cart->contents() as $item){
                $orderDetails[$i++] = array(
                    'package_id'=>$item['id'],
                    'qty'=>$item['qty'],
                    'price'=>$item['price']);
                $total += $item['qty'] * $item['price'];
            }
            
            $this->log_debug('order detail data',print_r($orderDetails,true));
            $orderId = $this->mOrder->createOrder($orderData,$orderDetails);
            if(!empty($orderId)){
                $order['order_id'] = $orderId;
                $order['total'] = $total;
                $order['name'] = 'Ocharos tour orders';
                $this->my_cart->destroy();
                $this->submitToPaypal($order);
            }
    
        }
    }
    
    public function submitToPaypal($order){
        $this->load->library('paypal');
        //Set variables for paypal form
        $returnURL = base_url().'order/payPalRedirectPage/success'; 
        $cancelURL = base_url().'order/payPalRedirectPage/error'; 
        $notifyURL = base_url().'order/paypalNotify';
        
        $userID = $this->session->userdata('user_id'); 
        $logo = base_url().'resources/img/ocharos-logo.png';
        $this->paypal->add_field('business', PAYPAL_ID);
        $this->paypal->add_field('return', $returnURL);
        $this->paypal->add_field('cancel_return', $cancelURL);
        $this->paypal->add_field('notify_url', $notifyURL);
        $this->paypal->add_field('item_name', $order['name']);
        $this->paypal->add_field('custom', $userID);
        $this->paypal->add_field('item_number',  $order['order_id']);
        $this->paypal->add_field('amount',  $order['total']);
        $this->paypal->image($logo);
        $this->paypal->paypal_auto_form();
    }
    
    
    public function payPalRedirectPage(){
        print_r($this->input->get());
        //echo $this->uri->segment(3);
    }
    
    public function paypalNotify(){
        $paypalInfo = $this->input->post();
        $this->log_debug('transaction data post',print_r($paypalInfo,true));
        
        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id']	= $paypalInfo["item_number"];
        $data['txn_id']	= $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["payment_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status']	= $paypalInfo["payment_status"];
        
        $paypalURL = $this->paypal_lib->paypal_url;
        $result	= $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
        
        if(eregi("VERIFIED",$result)){
//           $this->message->insert($messageData);
        }
    }

    private function getOrderData($orderId){
        $orderData = array();
        if(!empty($orderId)){
            $orderData['contactData'] = $this->mOrder->getOrderByCriteria(array('r.order_id'=>$orderId,'r.user_id'=>$this->session->userdata("user_id")))[0];
            $orderData['orderDetails'] = $this->mOrder->getOrderDetailsById($orderId,$this->session->userdata("user_id"));

        }
        return $orderData;
    }

    public function orderDetailPage(){
        $orderId = $this->uri->segment(3);
        $this->setContentWithSidePage('order/order_detail',$this->getOrderData($orderId));
        $this->loadLayoutSidebar($this->template);

    }

    public function generateReceipt(){
        $orderId = $this->uri->segment(3);
        $html = $this->load->view('order/receipt',$this->getOrderData($orderId),true); $this->log_debug('html',print_r($html,true));
        $pdfFilePath = "ocharos_".str_pad($orderId,5,"0",STR_PAD_LEFT).".pdf";
        $this->generatePDF($html,$pdfFilePath);
            
    }

    /*
     * Start request tour
     */
    public function requestTourPage($data=array('action'=>ACTION_ADD)){
        $this->setContentWithSidePage('order/form_request_tour',$data);
        $this->loadLayoutSidebar($this->template);
    }

    public function editRequestTour(){
        $requestId = $this->uri->segment(3);
        $userId = $this->session->userdata('user_id');
        $result = $this->requestTour->getDataSpecifyField('request_id,contact_name,phone,date_format(travel_date,"%Y-%m-%d") travel_date,request_desc'
            ,array('request_id'=>$requestId,'user_id'=>$userId));
        if(null != $result && sizeof($result) > 0){
            $data['editData'] = $result[0];
            $data['action'] = ACTION_EDIT;
            $this->requestTourPage($data);
        }else{

        }
    }

    public function requestTour(){
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'กรุณาระบุ %s');
        if ($this->form_validation->run() == FALSE)
        {
            $this->requestTourPage();
        }
        else {

            $data = array(
                'contact_name' => $this->input->post("contactName"),
                'phone' => $this->input->post('phone'),
                'travel_date' => $this->input->post('travelDate'),
                'request_desc' => $this->input->post('requestDesc'),
                'user_id'=>$this->session->userdata('user_id'),
                'status_code'=>REQUEST_STATUS_WAITING
            );
            if ($this->input->post('actionType') == ACTION_ADD) {
                $this->requestTour->insert($data);
            }else{
                $this->requestTour->update($data,array('request_id'=>$this->input->post('requestId')));
            }
            redirect('order/listRequestTour','refresh');
            
        }
    }

    public function listRequestTour(){
        $this->load->library('my_pagination');
        $page = empty($this->uri->segment(3))?1:$this->uri->segment(3);
        $userId = $this->session->userdata("user_id");
        $pagingConfig = $this->my_pagination->init('order/listRequestTour',$this->requestTour->countAllWithCriteria(array('user_id'=>$userId)));
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $data['requestData'] = $this->requestTour->getRequestTour(array("r.user_id"=>$userId),$limit);
        $data["paginationData"]   = $this->pagination;
        $this->setContentWithSidePage('order/list_request_tour',$data);
        $this->loadLayoutSidebar($this->template);
    }

    public function cancelRequestTour(){
        $requestId = $this->uri->segment(3);
        $userId = $this->session->userdata('user_id');
        $this->requestTour->deleteByFlag(array('user_id'=>$userId,'request_id'=>$requestId));
        redirect('order/listRequestTour','refresh');
    }

    /*
     * End request tour
     */

    /*
     * Start order
     */

    public function listOrder(){
        $this->load->library('my_pagination');
        $page = empty($this->uri->segment(3))?1:$this->uri->segment(3);
        $userId = $this->session->userdata("user_id");
        $pagingConfig = $this->my_pagination->init('order/listOrder',$this->mOrder->countAllWithCriteria(array('user_id'=>$userId)));
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));

        $data['orderData'] = $this->mOrder->getOrderByCriteria(array("r.user_id"=>$userId),$limit);
        $data["paginationData"]   = $this->pagination;
        $this->setContentWithSidePage('order/user_order_page',$data);
        $this->loadLayoutSidebar($this->template);
    }

    /*
     * End order
     */

    function __destruct()
    {}
}

?>