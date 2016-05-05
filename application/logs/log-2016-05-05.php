DEBUG - 2016-05-05 17:29:26 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:29:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:26 --> [package > index] check session  >> 
DEBUG - 2016-05-05 17:29:26 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:26 --> Total execution time: 0.0263
DEBUG - 2016-05-05 17:29:27 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:29:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:27 --> [package > index] check session  >> 
DEBUG - 2016-05-05 17:29:27 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:27 --> Total execution time: 0.0253
DEBUG - 2016-05-05 17:29:31 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:29:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:29:31 --> [package > filterByArea] check session  >> 
DEBUG - 2016-05-05 17:29:31 --> [package > filterByArea] filter area  >> Array
(
    [areaId] => 1
)

DEBUG - 2016-05-05 17:29:31 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-05 17:29:31 --> Severity: Notice --> Array to string conversion /Users/MacBookPro/Documents/i-work/root/tour/application/libraries/My_pagination.php 11
ERROR - 2016-05-05 17:29:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1, 1' at line 8 - Invalid query: SELECT `package_type_name`, `package_id`, `package_name`, `package_desc`, `price`, `discount`, `p`.`thumbnail`, date_format(travel_date, '%d/%m/%Y') travel_date
FROM `tbl_package` `p`
INNER JOIN `tbl_package_type` `t` ON `p`.`package_type_id` = `t`.`package_type_id`
INNER JOIN `tbl_area` `a` ON `p`.`area_id` = `a`.`area_id`
WHERE `p`.`area_id` = '1'
AND `p`.`delete_flag` = 'N'
ORDER BY `p`.`package_id` DESC
 LIMIT -1, 1
ERROR - 2016-05-05 17:29:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/MacBookPro/Documents/i-work/root/tour/system/core/Exceptions.php:272) /Users/MacBookPro/Documents/i-work/root/tour/system/core/Common.php 573
DEBUG - 2016-05-05 17:31:02 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:02 --> [package > index] check session  >> 
ERROR - 2016-05-05 17:31:02 --> Severity: Notice --> Undefined variable: page /Users/MacBookPro/Documents/i-work/root/tour/application/controllers/Package.php 14
DEBUG - 2016-05-05 17:31:02 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-05 17:31:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1, 1' at line 7 - Invalid query: SELECT `package_type_name`, `package_id`, `package_name`, `package_desc`, `price`, `discount`, `p`.`thumbnail`, date_format(travel_date, '%d/%m/%Y') travel_date
FROM `tbl_package` `p`
INNER JOIN `tbl_package_type` `t` ON `p`.`package_type_id` = `t`.`package_type_id`
INNER JOIN `tbl_area` `a` ON `p`.`area_id` = `a`.`area_id`
WHERE `p`.`delete_flag` = 'N'
ORDER BY `p`.`package_id` DESC
 LIMIT -1, 1
ERROR - 2016-05-05 17:31:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/MacBookPro/Documents/i-work/root/tour/system/core/Exceptions.php:272) /Users/MacBookPro/Documents/i-work/root/tour/system/core/Common.php 573
DEBUG - 2016-05-05 17:31:04 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:04 --> [package > index] check session  >> 
ERROR - 2016-05-05 17:31:04 --> Severity: Notice --> Undefined variable: page /Users/MacBookPro/Documents/i-work/root/tour/application/controllers/Package.php 14
DEBUG - 2016-05-05 17:31:04 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-05 17:31:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1, 1' at line 7 - Invalid query: SELECT `package_type_name`, `package_id`, `package_name`, `package_desc`, `price`, `discount`, `p`.`thumbnail`, date_format(travel_date, '%d/%m/%Y') travel_date
FROM `tbl_package` `p`
INNER JOIN `tbl_package_type` `t` ON `p`.`package_type_id` = `t`.`package_type_id`
INNER JOIN `tbl_area` `a` ON `p`.`area_id` = `a`.`area_id`
WHERE `p`.`delete_flag` = 'N'
ORDER BY `p`.`package_id` DESC
 LIMIT -1, 1
ERROR - 2016-05-05 17:31:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/MacBookPro/Documents/i-work/root/tour/system/core/Exceptions.php:272) /Users/MacBookPro/Documents/i-work/root/tour/system/core/Common.php 573
DEBUG - 2016-05-05 17:31:09 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:09 --> [package > index] check session  >> 
ERROR - 2016-05-05 17:31:09 --> Severity: Notice --> Undefined variable: page /Users/MacBookPro/Documents/i-work/root/tour/application/controllers/Package.php 14
DEBUG - 2016-05-05 17:31:09 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-05 17:31:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1, 1' at line 7 - Invalid query: SELECT `package_type_name`, `package_id`, `package_name`, `package_desc`, `price`, `discount`, `p`.`thumbnail`, date_format(travel_date, '%d/%m/%Y') travel_date
FROM `tbl_package` `p`
INNER JOIN `tbl_package_type` `t` ON `p`.`package_type_id` = `t`.`package_type_id`
INNER JOIN `tbl_area` `a` ON `p`.`area_id` = `a`.`area_id`
WHERE `p`.`delete_flag` = 'N'
ORDER BY `p`.`package_id` DESC
 LIMIT -1, 1
ERROR - 2016-05-05 17:31:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/MacBookPro/Documents/i-work/root/tour/system/core/Exceptions.php:272) /Users/MacBookPro/Documents/i-work/root/tour/system/core/Common.php 573
DEBUG - 2016-05-05 17:31:24 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:24 --> [package > index] check session  >> 
DEBUG - 2016-05-05 17:31:24 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:24 --> Total execution time: 0.0261
DEBUG - 2016-05-05 17:31:27 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:27 --> [package > filterByArea] check session  >> 
DEBUG - 2016-05-05 17:31:27 --> [package > filterByArea] filter area  >> Array
(
    [areaId] => 1
)

DEBUG - 2016-05-05 17:31:27 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:27 --> Total execution time: 0.0273
DEBUG - 2016-05-05 17:31:36 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:36 --> [package > filterByArea] check session  >> 
DEBUG - 2016-05-05 17:31:36 --> [package > filterByArea] filter area  >> Array
(
    [areaId] => 2
)

DEBUG - 2016-05-05 17:31:36 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:36 --> Total execution time: 0.0251
DEBUG - 2016-05-05 17:31:59 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:31:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:31:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:31:59 --> [package > index] check session  >> 
DEBUG - 2016-05-05 17:31:59 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:32:00 --> Total execution time: 0.0262
DEBUG - 2016-05-05 17:32:07 --> UTF-8 Support Enabled
DEBUG - 2016-05-05 17:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-05-05 17:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-05-05 17:32:07 --> [package > filterByArea] check session  >> 
DEBUG - 2016-05-05 17:32:07 --> [package > filterByArea] filter area  >> Array
(
    [areaId] => 1
)

DEBUG - 2016-05-05 17:32:07 --> Pagination class already loaded. Second attempt ignored.
ERROR - 2016-05-05 17:32:07 --> Query error: Unknown column 'p.area_id' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbl_package`
WHERE `p`.`area_id` = '1'
AND `delete_flag` = 'N'
