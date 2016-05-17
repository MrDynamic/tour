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