<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-05-03 21:20:25 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:20:25 --> No URI present. Default controller set.
DEBUG - 2016-05-03 21:20:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:20:25 --> [home > index] check session  >> 
DEBUG - 2016-05-03 21:20:25 --> Total execution time: 0.0398
DEBUG - 2016-05-03 21:20:52 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:20:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:20:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:20:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:20:52 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 21:20:52 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 21:20:52 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:20:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:20:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:20:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:20:52 --> [authen > login] check session  >> 
DEBUG - 2016-05-03 21:20:52 --> [authen > login] Start  >> 
DEBUG - 2016-05-03 21:20:52 --> Total execution time: 0.0246
DEBUG - 2016-05-03 21:21:03 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:21:03 --> [authen > submitLogin] check session  >> 
DEBUG - 2016-05-03 21:21:03 --> [authen > submitLogin] login data  >> Array
(
    [username] => polawat
    [password] => password
    [redirectUrl] => user/orderListPage
)

DEBUG - 2016-05-03 21:21:03 --> [authen > submitLogin] session data  >> Array
(
    [user_id] => 2
    [username] => polawat
    [role] => USER
)

DEBUG - 2016-05-03 21:21:03 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:21:03 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 21:21:03 --> [user > orderListPage] check session  >> orderListPage
ERROR - 2016-05-03 21:21:03 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::groupby() /Users/MacBookPro/Documents/i-work/root/tour/application/models/M_Order.php 48
DEBUG - 2016-05-03 21:23:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:23:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:23:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:23:04 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 21:23:04 --> [user > orderListPage] check session  >> orderListPage
ERROR - 2016-05-03 21:23:04 --> Query error: Unknown column 'r.order_id' in 'field list' - Invalid query: SELECT `r`.`order_id`, `r`.`status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 21:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:23:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:23:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:23:28 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 21:23:28 --> [user > orderListPage] check session  >> orderListPage
ERROR - 2016-05-03 21:23:28 --> Severity: Notice --> Undefined variable: orderData /Users/MacBookPro/Documents/i-work/root/tour/application/views/order/user_order_page.php 17
ERROR - 2016-05-03 21:23:28 --> Severity: Warning --> Invalid argument supplied for foreach() /Users/MacBookPro/Documents/i-work/root/tour/application/views/order/user_order_page.php 17
DEBUG - 2016-05-03 21:23:28 --> Total execution time: 0.0298
DEBUG - 2016-05-03 21:24:08 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:24:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:24:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:24:08 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 21:24:08 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 21:24:08 --> Total execution time: 0.0280
DEBUG - 2016-05-03 21:25:12 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:25:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:25:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:25:12 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 21:25:12 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 21:25:12 --> Total execution time: 0.0268
DEBUG - 2016-05-03 21:48:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:48:04 --> No URI present. Default controller set.
DEBUG - 2016-05-03 21:48:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:48:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:48:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:48:04 --> [home > index] check session  >> 
DEBUG - 2016-05-03 21:48:04 --> Total execution time: 0.0263
DEBUG - 2016-05-03 21:51:37 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:51:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:51:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:37 --> [package > index] check session  >> 
DEBUG - 2016-05-03 21:51:37 --> Total execution time: 0.0295
DEBUG - 2016-05-03 21:51:39 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:51:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:51:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:39 --> [package > detail] check session  >> 
DEBUG - 2016-05-03 21:51:39 --> Total execution time: 0.0326
DEBUG - 2016-05-03 21:51:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:51:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:51:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:42 --> [order > addToCart] check session  >> 
DEBUG - 2016-05-03 21:51:42 --> [order > addToCart] cart data  >> Array
(
    [id] => 1
    [qty] => 2
    [price] => 3000
    [name] => เกาะหลีเป๊ะ
    [thumbnail] => 4f107fa542949b8b27708cf21fd4eb35.jpg
)

DEBUG - 2016-05-03 21:51:42 --> [order > addToCart] data insert  >> Array
(
    [id] => 1
    [qty] => 2
    [name] => เกาะหลีเป๊ะ
    [price] => 3000
)

DEBUG - 2016-05-03 21:51:42 --> Total execution time: 0.0257
DEBUG - 2016-05-03 21:51:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:51:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:51:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:42 --> [package > index] check session  >> 
DEBUG - 2016-05-03 21:51:42 --> Total execution time: 0.0274
DEBUG - 2016-05-03 21:51:45 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:51:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:51:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:51:45 --> [order > checkoutPage] check session  >> 
DEBUG - 2016-05-03 21:51:45 --> [order > checkoutPage] check session  >> checkoutPage
DEBUG - 2016-05-03 21:51:45 --> Total execution time: 0.0235
DEBUG - 2016-05-03 21:52:02 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:02 --> [order > checkout] check session  >> 
DEBUG - 2016-05-03 21:52:02 --> [order > checkout] check session  >> checkout
DEBUG - 2016-05-03 21:52:02 --> [order > checkout] check out data  >> Array
(
    [firstname] => polawat
    [lastname] => lastname
    [phone] => 0909216111
    [additional] => 
    [paymentTypeId] => 1
)

DEBUG - 2016-05-03 21:52:02 --> [order > checkout] order detail data  >> Array
(
    [0] => Array
        (
            [package_id] => 1
            [qty] => 2
            [price] => 3000
        )

)

DEBUG - 2016-05-03 21:52:02 --> Config file loaded: /Users/MacBookPro/Documents/i-work/root/tour/application/config/config_paypal.php
DEBUG - 2016-05-03 21:52:02 --> Total execution time: 0.0289
DEBUG - 2016-05-03 21:52:21 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:21 --> No URI present. Default controller set.
DEBUG - 2016-05-03 21:52:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:21 --> [home > index] check session  >> 
DEBUG - 2016-05-03 21:52:21 --> Total execution time: 0.0218
DEBUG - 2016-05-03 21:52:24 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:24 --> [package > index] check session  >> 
DEBUG - 2016-05-03 21:52:24 --> Total execution time: 0.0237
DEBUG - 2016-05-03 21:52:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:26 --> [package > detail] check session  >> 
DEBUG - 2016-05-03 21:52:26 --> Total execution time: 0.0247
DEBUG - 2016-05-03 21:52:29 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:29 --> [order > addToCart] check session  >> 
DEBUG - 2016-05-03 21:52:29 --> [order > addToCart] cart data  >> Array
(
    [id] => 2
    [qty] => 3
    [price] => 3900
    [name] => เขื่อนรัชชประภา
    [thumbnail] => eb639ff3c4695c6f49bddcff621320ed.jpg
)

DEBUG - 2016-05-03 21:52:29 --> [order > addToCart] data insert  >> Array
(
    [id] => 2
    [qty] => 3
    [name] => เขื่อนรัชชประภา
    [price] => 3900
)

DEBUG - 2016-05-03 21:52:29 --> Total execution time: 0.0239
DEBUG - 2016-05-03 21:52:29 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:29 --> [package > index] check session  >> 
DEBUG - 2016-05-03 21:52:29 --> Total execution time: 0.0242
DEBUG - 2016-05-03 21:52:33 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:33 --> [order > checkoutPage] check session  >> 
DEBUG - 2016-05-03 21:52:33 --> [order > checkoutPage] check session  >> checkoutPage
DEBUG - 2016-05-03 21:52:33 --> Total execution time: 0.0246
DEBUG - 2016-05-03 21:52:55 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 21:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 21:52:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 21:52:55 --> [order > checkout] check session  >> 
DEBUG - 2016-05-03 21:52:55 --> [order > checkout] check session  >> checkout
DEBUG - 2016-05-03 21:52:55 --> [order > checkout] check out data  >> Array
(
    [firstname] => polawat
    [lastname] => xxxxx
    [phone] => 0909216111
    [additional] => remark
    [paymentTypeId] => 1
)

DEBUG - 2016-05-03 21:52:55 --> [order > checkout] order detail data  >> Array
(
    [0] => Array
        (
            [package_id] => 2
            [qty] => 3
            [price] => 3900
        )

)

DEBUG - 2016-05-03 21:52:55 --> Config file loaded: /Users/MacBookPro/Documents/i-work/root/tour/application/config/config_paypal.php
DEBUG - 2016-05-03 21:52:55 --> Total execution time: 0.0257
DEBUG - 2016-05-03 22:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:14:49 --> No URI present. Default controller set.
DEBUG - 2016-05-03 22:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:14:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:14:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:14:49 --> [home > index] check session  >> 
DEBUG - 2016-05-03 22:14:49 --> Total execution time: 0.0209
DEBUG - 2016-05-03 22:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:14:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:14:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:14:53 --> [user > userPage] check session  >> 
DEBUG - 2016-05-03 22:14:53 --> [user > userPage] check session  >> userPage
DEBUG - 2016-05-03 22:14:53 --> Total execution time: 0.0226
DEBUG - 2016-05-03 22:14:56 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:14:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:14:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:14:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:14:56 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:14:56 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:14:56 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-03 22:14:56 --> Non-existent class: My_pagination
DEBUG - 2016-05-03 22:16:28 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:16:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:16:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:16:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:16:28 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:16:28 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:16:28 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-03 22:16:28 --> Severity: Notice --> Undefined variable: pagingConfig /Users/MacBookPro/Documents/i-work/root/tour/application/controllers/User.php 112
ERROR - 2016-05-03 22:16:28 --> Severity: Notice --> Undefined variable: pagingConfig /Users/MacBookPro/Documents/i-work/root/tour/application/controllers/User.php 112
ERROR - 2016-05-03 22:16:28 --> Query error: Unknown column 's.status' in 'on clause' - Invalid query: SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
ERROR - 2016-05-03 22:16:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/MacBookPro/Documents/i-work/root/tour/system/core/Exceptions.php:272) /Users/MacBookPro/Documents/i-work/root/tour/system/core/Common.php 573
DEBUG - 2016-05-03 22:18:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:18:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:18:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:18:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:18:54 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:18:54 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:18:54 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-03 22:18:54 --> Query error: Unknown column 's.status' in 'on clause' - Invalid query: SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 22:19:23 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:19:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:19:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:19:23 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:19:23 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:19:23 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:19:23 --> Total execution time: 0.0256
DEBUG - 2016-05-03 22:20:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:20:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:20:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:04 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:20:04 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:20:04 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:04 --> Total execution time: 0.0260
DEBUG - 2016-05-03 22:20:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:20:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:20:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:07 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:20:07 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:20:07 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:20:07 --> Total execution time: 0.0339
DEBUG - 2016-05-03 22:20:25 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:20:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:25 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:20:25 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:20:25 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:20:25 --> Total execution time: 0.0293
DEBUG - 2016-05-03 22:20:34 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:20:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:20:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:34 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:20:34 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:20:34 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:20:34 --> Total execution time: 0.0305
DEBUG - 2016-05-03 22:21:40 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:21:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:40 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:21:40 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:21:40 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:40 --> Total execution time: 0.0261
DEBUG - 2016-05-03 22:21:43 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:21:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:43 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:21:43 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:21:43 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:21:43 --> Total execution time: 0.0288
DEBUG - 2016-05-03 22:21:48 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:21:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:21:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:48 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:21:48 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:21:48 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:21:48 --> Total execution time: 0.0243
DEBUG - 2016-05-03 22:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:24:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:24:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:24:43 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:24:43 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:24:43 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:24:43 --> Total execution time: 0.0261
DEBUG - 2016-05-03 22:25:45 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:25:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:25:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:25:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:25:45 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:25:45 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:25:45 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:25:45 --> Total execution time: 0.0276
DEBUG - 2016-05-03 22:25:58 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:25:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:25:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:25:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:25:58 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:25:58 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:25:58 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:25:58 --> Total execution time: 0.0255
DEBUG - 2016-05-03 22:26:20 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:26:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:26:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:26:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:26:20 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:26:20 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:26:20 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:26:20 --> Total execution time: 0.0276
DEBUG - 2016-05-03 22:26:40 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:26:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:26:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:26:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:26:40 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:26:40 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:26:40 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:26:40 --> Total execution time: 0.0263
DEBUG - 2016-05-03 22:27:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:27:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:27:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:27:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:27:26 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:27:26 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:27:26 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:27:26 --> Total execution time: 0.0274
DEBUG - 2016-05-03 22:27:58 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:27:58 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:27:58 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:27:58 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:27:58 --> Total execution time: 0.0243
DEBUG - 2016-05-03 22:28:08 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:28:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:08 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:28:08 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:28:08 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:08 --> Total execution time: 0.0274
DEBUG - 2016-05-03 22:28:48 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:28:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:49 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:28:49 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:28:49 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:49 --> Total execution time: 0.0264
DEBUG - 2016-05-03 22:28:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:28:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:28:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:28:54 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:28:54 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:28:54 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:28:54 --> Total execution time: 0.0279
DEBUG - 2016-05-03 22:29:10 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:29:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:29:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:29:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:29:10 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:29:10 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:29:10 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:29:10 --> Total execution time: 0.0261
DEBUG - 2016-05-03 22:29:54 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:29:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:29:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:29:54 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:29:54 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:29:54 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:29:54 --> Total execution time: 0.0259
DEBUG - 2016-05-03 22:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:31:13 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:31:13 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:31:13 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:31:13 --> Total execution time: 0.0310
DEBUG - 2016-05-03 22:31:55 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:31:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:31:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:31:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:31:55 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:31:55 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:31:55 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:31:55 --> Total execution time: 0.0312
DEBUG - 2016-05-03 22:32:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:32:07 --> [user > editUser] check session  >> 
DEBUG - 2016-05-03 22:32:07 --> [user > editUser] Province ID  >> 54
DEBUG - 2016-05-03 22:32:07 --> [user > editUser] Amphur ID  >> 761
DEBUG - 2016-05-03 22:32:07 --> Total execution time: 0.0274
DEBUG - 2016-05-03 22:32:16 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:32:16 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:32:16 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:32:16 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:32:16 --> Total execution time: 0.0267
DEBUG - 2016-05-03 22:33:25 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:33:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:33:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:33:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:33:25 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:33:25 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:33:25 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:33:25 --> Total execution time: 0.0309
DEBUG - 2016-05-03 22:34:22 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:34:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:34:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:34:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:34:22 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:34:22 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:34:22 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:34:22 --> Total execution time: 0.0271
DEBUG - 2016-05-03 22:37:00 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:37:00 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:37:00 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:37:00 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:37:00 --> Total execution time: 0.0276
DEBUG - 2016-05-03 22:37:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:37:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:37:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:37:53 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:37:53 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:37:53 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:37:53 --> Total execution time: 0.0298
DEBUG - 2016-05-03 22:38:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:38:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:38:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:38:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:38:19 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:38:19 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:38:19 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:38:19 --> Total execution time: 0.0318
DEBUG - 2016-05-03 22:39:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:39:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:39:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:39:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:39:42 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:39:42 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:39:42 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:39:42 --> Total execution time: 0.0263
DEBUG - 2016-05-03 22:41:49 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:41:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:41:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:41:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:41:49 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:41:49 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:41:49 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:41:49 --> Total execution time: 0.0301
DEBUG - 2016-05-03 22:41:53 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:41:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:41:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:41:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:41:53 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:41:53 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:41:53 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:41:53 --> Total execution time: 0.0277
DEBUG - 2016-05-03 22:42:12 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:12 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:12 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:12 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:12 --> Total execution time: 0.0243
DEBUG - 2016-05-03 22:42:21 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:21 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:21 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:21 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:21 --> Total execution time: 0.0282
DEBUG - 2016-05-03 22:42:24 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:25 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:25 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:25 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:25 --> Total execution time: 0.0260
DEBUG - 2016-05-03 22:42:27 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:27 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:27 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:27 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:27 --> Total execution time: 0.0272
DEBUG - 2016-05-03 22:42:33 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:33 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:33 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:33 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:33 --> Total execution time: 0.0312
DEBUG - 2016-05-03 22:42:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:36 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:36 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:36 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:36 --> Total execution time: 0.0267
DEBUG - 2016-05-03 22:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:42:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:42:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:41 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:42:41 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:42:41 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:42:41 --> Total execution time: 0.0307
DEBUG - 2016-05-03 22:43:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:43:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:43:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:43:13 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:43:13 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:43:13 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:43:13 --> Total execution time: 0.0270
DEBUG - 2016-05-03 22:44:00 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:44:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:44:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:44:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:44:00 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:44:00 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:44:00 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:44:00 --> Total execution time: 0.0240
DEBUG - 2016-05-03 22:44:38 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:44:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:44:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:44:38 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:44:38 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:44:38 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:44:38 --> Total execution time: 0.0265
DEBUG - 2016-05-03 22:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:45:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:45:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:45:18 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:45:18 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:45:18 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:45:18 --> Total execution time: 0.0275
DEBUG - 2016-05-03 22:46:51 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:46:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:46:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:46:51 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:46:51 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:46:51 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:46:51 --> Total execution time: 0.0280
DEBUG - 2016-05-03 22:47:16 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:16 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:47:16 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:47:16 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:16 --> Total execution time: 0.0280
DEBUG - 2016-05-03 22:47:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:47:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:47:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:26 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:47:26 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:47:26 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:26 --> Total execution time: 0.0255
DEBUG - 2016-05-03 22:47:43 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:47:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:43 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:47:43 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:47:43 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:43 --> Total execution time: 0.0297
DEBUG - 2016-05-03 22:47:50 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:47:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:47:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:50 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:47:50 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:47:50 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:47:50 --> Total execution time: 0.0291
DEBUG - 2016-05-03 22:49:51 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:49:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:49:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:49:51 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:49:51 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:49:51 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:49:51 --> Total execution time: 0.0274
DEBUG - 2016-05-03 22:49:58 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:49:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:49:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:49:58 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:49:58 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:49:58 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:49:58 --> Total execution time: 0.0293
DEBUG - 2016-05-03 22:50:34 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:50:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:50:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:50:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:50:34 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:50:34 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:50:34 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:50:34 --> Total execution time: 0.0249
DEBUG - 2016-05-03 22:52:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:52:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:52:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:04 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:52:04 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:52:04 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:04 --> Total execution time: 0.0297
DEBUG - 2016-05-03 22:52:12 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:52:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:12 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:52:12 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:52:12 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:12 --> Total execution time: 0.0317
DEBUG - 2016-05-03 22:52:18 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:52:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:18 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:52:18 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:52:18 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:52:18 --> Total execution time: 0.0279
DEBUG - 2016-05-03 22:53:02 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:02 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:53:02 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:53:02 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:02 --> Total execution time: 0.0284
DEBUG - 2016-05-03 22:53:08 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:08 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:53:08 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:53:08 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:08 --> Total execution time: 0.0293
DEBUG - 2016-05-03 22:53:16 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:16 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:53:16 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:53:16 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:16 --> Total execution time: 0.0249
DEBUG - 2016-05-03 22:53:19 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:19 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:53:19 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:53:19 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:19 --> Total execution time: 0.0286
DEBUG - 2016-05-03 22:53:21 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:21 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:53:21 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:53:21 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:21 --> Total execution time: 0.0262
DEBUG - 2016-05-03 22:53:23 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:23 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:53:23 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:53:23 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:23 --> Total execution time: 0.0280
DEBUG - 2016-05-03 22:53:45 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:53:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:53:45 --> [package > index] check session  >> 
DEBUG - 2016-05-03 22:53:45 --> Total execution time: 0.0254
DEBUG - 2016-05-03 22:54:47 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:54:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:54:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:54:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:54:47 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:54:47 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:54:47 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:54:47 --> Total execution time: 0.0272
DEBUG - 2016-05-03 22:56:11 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:56:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:56:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:56:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:56:11 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:56:11 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:56:11 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:56:11 --> Total execution time: 0.0303
DEBUG - 2016-05-03 22:56:15 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:56:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:56:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:56:15 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:56:15 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:56:15 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:56:15 --> Total execution time: 0.0256
DEBUG - 2016-05-03 22:57:11 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:57:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:57:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:57:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:57:11 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:57:11 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:57:11 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:57:11 --> Total execution time: 0.0263
DEBUG - 2016-05-03 22:57:41 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:57:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:57:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:57:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:57:41 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:57:41 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:57:41 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:57:41 --> Total execution time: 0.0269
DEBUG - 2016-05-03 22:58:44 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:58:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:58:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:58:44 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:58:44 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:58:44 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:58:44 --> Total execution time: 0.0281
DEBUG - 2016-05-03 22:59:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:59:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:59:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:26 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:59:26 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:59:26 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:26 --> Total execution time: 0.0254
DEBUG - 2016-05-03 22:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:59:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:33 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:59:33 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:59:33 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:33 --> Total execution time: 0.0255
DEBUG - 2016-05-03 22:59:45 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 22:59:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 22:59:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:45 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 22:59:45 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 22:59:45 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 22:59:45 --> Total execution time: 0.0289
DEBUG - 2016-05-03 23:00:50 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:00:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:00:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:00:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:00:50 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:00:50 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:00:50 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:00:50 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:00:50 --> Total execution time: 0.0246
DEBUG - 2016-05-03 23:02:01 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:02:01 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:02:01 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:02:01 --> [user > orderListPage] page  >> 2
DEBUG - 2016-05-03 23:02:01 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:02:01 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:02:01 --> Total execution time: 0.0291
DEBUG - 2016-05-03 23:03:12 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:03:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:03:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:03:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:03:12 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:03:12 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:03:12 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:03:12 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:03:12 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:03:12 --> Total execution time: 0.0260
DEBUG - 2016-05-03 23:06:05 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:06:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:06:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:05 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:06:05 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:06:05 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:05 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:06:05 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:06:05 --> Total execution time: 0.0280
DEBUG - 2016-05-03 23:06:45 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:06:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:45 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:06:45 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:06:45 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:45 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:06:45 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 1
DEBUG - 2016-05-03 23:06:45 --> Total execution time: 0.0289
DEBUG - 2016-05-03 23:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:06:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:48 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:06:48 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:06:48 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:06:48 --> [user > orderListPage] limit  >> Array
(
    [0] => -1
    [1] => 1
)

ERROR - 2016-05-03 23:06:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 10 - Invalid query: SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, -1
DEBUG - 2016-05-03 23:08:09 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:08:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:08:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:08:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:08:09 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:08:09 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:08:09 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:08:09 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:08:09 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:08:09 --> Total execution time: 0.0249
DEBUG - 2016-05-03 23:09:28 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:09:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:28 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:09:28 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:09:28 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:28 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:09:28 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 1
DEBUG - 2016-05-03 23:09:28 --> Total execution time: 0.0298
DEBUG - 2016-05-03 23:09:31 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:09:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:09:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:31 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:09:31 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:09:31 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:31 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:09:31 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:09:31 --> Total execution time: 0.0271
DEBUG - 2016-05-03 23:09:38 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:09:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:38 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:09:38 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:09:38 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:09:38 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:09:38 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 1
DEBUG - 2016-05-03 23:09:38 --> Total execution time: 0.0299
DEBUG - 2016-05-03 23:10:42 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:10:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:10:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:10:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:10:42 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:10:42 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:10:42 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:10:42 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:10:42 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:10:42 --> Total execution time: 0.0284
DEBUG - 2016-05-03 23:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:10:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:10:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:10:46 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:10:46 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:10:46 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:10:46 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:10:46 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:10:46 --> Total execution time: 0.0265
DEBUG - 2016-05-03 23:11:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:11:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:11:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:11:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:11:04 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:11:04 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:11:04 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:11:04 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:11:04 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:11:04 --> Total execution time: 0.0274
DEBUG - 2016-05-03 23:14:32 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:14:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:14:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:14:32 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:14:32 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:14:32 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:14:32 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

ERROR - 2016-05-03 23:14:32 --> Severity: Notice --> Use of undefined constant limit - assumed 'limit' /Users/MacBookPro/Documents/i-work/root/tour/application/core/Abstract_Model.php 56
ERROR - 2016-05-03 23:14:32 --> Severity: Notice --> Use of undefined constant limit - assumed 'limit' /Users/MacBookPro/Documents/i-work/root/tour/application/core/Abstract_Model.php 57
DEBUG - 2016-05-03 23:14:32 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:14:32 --> Total execution time: 0.0292
DEBUG - 2016-05-03 23:14:57 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:14:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:14:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:14:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:14:57 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:14:57 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:14:57 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:14:57 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

ERROR - 2016-05-03 23:14:57 --> Severity: Notice --> Use of undefined constant limit - assumed 'limit' /Users/MacBookPro/Documents/i-work/root/tour/application/core/Abstract_Model.php 57
DEBUG - 2016-05-03 23:14:57 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:14:57 --> Total execution time: 0.0285
DEBUG - 2016-05-03 23:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:15:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:12 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:15:12 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:15:12 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:12 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:15:12 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:15:12 --> Total execution time: 0.0293
DEBUG - 2016-05-03 23:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:15:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:15:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:17 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:15:17 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:15:17 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:17 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:15:17 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:15:17 --> Total execution time: 0.0276
DEBUG - 2016-05-03 23:15:20 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:15:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:15:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:20 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:15:20 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:15:20 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:15:20 --> [user > orderListPage] limit  >> Array
(
    [0] => 2
    [1] => 1
)

DEBUG - 2016-05-03 23:15:20 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 2
DEBUG - 2016-05-03 23:15:20 --> Total execution time: 0.0258
DEBUG - 2016-05-03 23:19:16 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:16 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:19:16 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:19:16 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:16 --> [user > orderListPage] limit  >> Array
(
    [0] => 2
    [1] => 1
)

ERROR - 2016-05-03 23:19:16 --> Severity: Notice --> Use of undefined constant limit - assumed 'limit' /Users/MacBookPro/Documents/i-work/root/tour/application/models/M_Order.php 44
DEBUG - 2016-05-03 23:19:16 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
DEBUG - 2016-05-03 23:19:16 --> Total execution time: 0.0284
DEBUG - 2016-05-03 23:19:30 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:19:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:19:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:30 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:19:30 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:19:30 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:30 --> [user > orderListPage] limit  >> Array
(
    [0] => 2
    [1] => 1
)

DEBUG - 2016-05-03 23:19:30 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 2
DEBUG - 2016-05-03 23:19:30 --> Total execution time: 0.0283
DEBUG - 2016-05-03 23:19:35 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:19:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:19:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:35 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:19:35 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:19:35 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:35 --> [user > orderListPage] limit  >> Array
(
    [0] => 0
    [1] => 1
)

DEBUG - 2016-05-03 23:19:35 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:19:35 --> Total execution time: 0.0279
DEBUG - 2016-05-03 23:19:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:19:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:19:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:37 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:19:37 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:19:37 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:37 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:19:37 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 1
DEBUG - 2016-05-03 23:19:37 --> Total execution time: 0.0271
DEBUG - 2016-05-03 23:19:38 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:19:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:38 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:19:38 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:19:38 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:19:38 --> [user > orderListPage] limit  >> Array
(
    [0] => 2
    [1] => 1
)

DEBUG - 2016-05-03 23:19:38 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 2
DEBUG - 2016-05-03 23:19:38 --> Total execution time: 0.0255
DEBUG - 2016-05-03 23:21:00 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:21:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:21:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:00 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:21:00 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:21:00 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:00 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 2
)

DEBUG - 2016-05-03 23:21:00 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 2, 1
DEBUG - 2016-05-03 23:21:00 --> Total execution time: 0.0250
DEBUG - 2016-05-03 23:21:03 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:03 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:21:03 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:21:03 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:03 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:21:03 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 1
DEBUG - 2016-05-03 23:21:03 --> Total execution time: 0.0272
DEBUG - 2016-05-03 23:21:05 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:21:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:21:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:05 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:21:05 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:21:05 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:05 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 0
)

DEBUG - 2016-05-03 23:21:05 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1
DEBUG - 2016-05-03 23:21:05 --> Total execution time: 0.0267
DEBUG - 2016-05-03 23:21:06 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:21:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:21:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:06 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:21:06 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:21:06 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:06 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 1
)

DEBUG - 2016-05-03 23:21:06 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 1, 1
DEBUG - 2016-05-03 23:21:06 --> Total execution time: 0.0258
DEBUG - 2016-05-03 23:21:08 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:21:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:08 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:21:08 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:21:08 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:08 --> [user > orderListPage] limit  >> Array
(
    [0] => 1
    [1] => 2
)

DEBUG - 2016-05-03 23:21:08 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 2, 1
DEBUG - 2016-05-03 23:21:08 --> Total execution time: 0.0239
DEBUG - 2016-05-03 23:21:48 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:21:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:21:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:48 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:21:48 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:21:48 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:21:48 --> Total execution time: 0.0255
DEBUG - 2016-05-03 23:22:09 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:22:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:22:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:22:09 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:22:09 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:22:09 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:22:09 --> Total execution time: 0.0276
DEBUG - 2016-05-03 23:22:33 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:22:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:22:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:22:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:22:33 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:22:33 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:22:33 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:22:33 --> [user > orderListPage] limit  >> Array
(
    [0] => 3
    [1] => 6
)

DEBUG - 2016-05-03 23:22:33 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 6, 3
DEBUG - 2016-05-03 23:22:33 --> Total execution time: 0.0241
DEBUG - 2016-05-03 23:23:44 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:23:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:23:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:23:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:23:44 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:23:44 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:23:44 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:23:44 --> [user > orderListPage] limit  >> Array
(
    [0] => 3
    [1] => 0
)

DEBUG - 2016-05-03 23:23:44 --> [user > orderListPage] order query  >> SELECT `r`.`order_id`, `s`.`status_name` `status`, `r`.`transaction_id`, sum(d.price * d.qty) total, concat(r.firstname, ' ', r.lastname) contact
FROM `tbl_order` `r`
INNER JOIN `tbl_order_details` `d` ON `r`.`order_id` = `d`.`order_id`
INNER JOIN `tbl_package` `p` ON `d`.`package_id` = `p`.`package_id`
INNER JOIN `tbl_status` `s` ON `r`.`status`=`s`.`status_code`
WHERE `r`.`delete_flag` = 'N'
AND `r`.`user_Id` = '2'
GROUP BY `r`.`order_id`
ORDER BY `r`.`order_id` DESC
 LIMIT 3
DEBUG - 2016-05-03 23:23:44 --> Total execution time: 0.0248
DEBUG - 2016-05-03 23:24:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:07 --> [authen > logout] check session  >> 
DEBUG - 2016-05-03 23:24:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:24:07 --> No URI present. Default controller set.
DEBUG - 2016-05-03 23:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:07 --> [home > index] check session  >> 
DEBUG - 2016-05-03 23:24:07 --> Total execution time: 0.0235
DEBUG - 2016-05-03 23:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:24:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:13 --> [user > orderListPage] check session  >> 
DEBUG - 2016-05-03 23:24:13 --> [user > orderListPage] check session  >> orderListPage
DEBUG - 2016-05-03 23:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:24:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:13 --> [authen > login] check session  >> 
DEBUG - 2016-05-03 23:24:13 --> [authen > login] Start  >> 
DEBUG - 2016-05-03 23:24:13 --> Total execution time: 0.0247
DEBUG - 2016-05-03 23:24:20 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:24:20 --> No URI present. Default controller set.
DEBUG - 2016-05-03 23:24:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:24:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:24:20 --> [home > index] check session  >> 
DEBUG - 2016-05-03 23:24:20 --> Total execution time: 0.0261
DEBUG - 2016-05-03 23:25:10 --> UTF-8 Support Enabled
DEBUG - 2016-05-03 23:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-03 23:25:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:25:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-03 23:25:10 --> [package > index] check session  >> 
DEBUG - 2016-05-03 23:25:10 --> Total execution time: 0.0259
