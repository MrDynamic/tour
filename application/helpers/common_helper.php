<?php
/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/15/2016 AD
 * Time: 10:12 AM
 */

function getCurrentDate(){
    return date('Y-m-d H:i:s');
}


function increaseDate($num,$date){
    return strtotime("+".$num." day", strtotime($date));
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function getConfigMail(){
    $config = Array(
        'mailtype'  => 'html',
        'charset'   => 'utf-8'
    );
    return $config;
}