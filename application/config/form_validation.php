<?php
// validate
/*
 * 'errors' => array(
                'required' => 'Please enter your %s address',
                'valid_email' => 'Please enter a valid email address',
                'is_unique' => 'That email is already taken. Forgot your password?'
            )
 */
$config = array(
    'order/requestTour' => array(
        array(
            'field' => 'contactName',
            'label' => 'ชื่อผู้ติดต่อ',
            'rules' => 'required',
            'message'=>'กรุณาระบุชื่อผู้ติดต่อ'
        ),
        array(
            'field'=>'phone',
            'label'=>'เบอร์โทรศัพท์',
            'rules'=>'required'
        ),
        array(
            'field'=>'travelDate',
            'label'=>'วันที่เดินทาง',
            'rules'=>'required'
        ),
        array(
            'field'=>'requestDesc',
            'label'=>'รายละเอียด',
            'rules'=>'required'
        )
    )
);