<div class="col-md-6 sep-top-lg">
    <div class="contact-form">
        <?php if($this->session->flashdata() == true) : ?>
            <div id="success-alert" class="alert alert-success text-center">
                <p><i class="fa fa-check-circle fa-2x"></i></p>
                <p>ทำการบันทึกข้อมูลเรียบร้อยแล้วครับ</p>
            </div>
        <?php endif; ?>
        <?php
            $contactNameAttr  = array('id'=>'contact_name','name'=>'contact_name','placeholder'=>'ชื่อผู้ติดต่อ','required'=>'');
            $phoneAttr = array('id'=>'phone','name'=>'phone','placeholder'=>'โทรศัพท์','maxlength'=>10,'required'=>'');
            $emailAttr = array('id'=>'email','name'=>'email','type'=>'email','placeholder'=>'email','required'=>'');
            $detailAttr = array('id'=>'detail','name'=>'detail','placeholder'=>'รายละเอียด','required'=>'');

            echo form_open('contact/save',array('class'=>'validate','id'=>'form-contact'));
            echo create_input(array('ชื่อผู้ติดต่อ','contact_name'),$contactNameAttr);
            echo create_input(array('โทรศัพท์','phone'),$phoneAttr);
            echo create_input(array('Email','email'),$emailAttr);
            echo create_textarea(array('รายละเอียด','detail'),$detailAttr);
            echo form_button(array('type'=>'submit','datat-wow-delay'=>'.5s','class'=>'btn btn-primary btn-lg wow bounceInRight'),'<i class="fa fa-paper-plane"></i> ส่งข้อความ');
            echo form_close();
        ?>
    </div>
</div>