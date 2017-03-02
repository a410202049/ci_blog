<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-02-09 10:03:17 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away D:\phpStudy\WWW\blog\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2017-02-09 10:03:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away D:\phpStudy\WWW\blog\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2017-02-09 10:03:17 --> Unable to connect to the database
ERROR - 2017-02-09 11:52:02 --> 404 Page Not Found: Detail/index
ERROR - 2017-02-09 11:56:53 --> 404 Page Not Found: Detail/index
ERROR - 2017-02-09 13:24:34 --> Severity: Error --> Call to undefined method CI_DB_mysqli_result::get() D:\phpStudy\WWW\blog\application\models\article_model.php 14
ERROR - 2017-02-09 14:00:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:00:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:00:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:00:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 14:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\blog\application\helpers\home_twig_helper.php 17
ERROR - 2017-02-09 15:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'a.cover_img != null order by a.hit_num desc,a.real_hit_num desc' at line 1 - Invalid query: select a.*,u.nickname, case when cate.name IS NULL then '未分类' else cate.name end as cname from ci_article as a left join ci_article_category as cate on a.cid = cate.id  left join ci_user as u on a.author_id = u.id where a.is_del = 0 a.cover_img != null order by a.hit_num desc,a.real_hit_num desc
ERROR - 2017-02-09 15:41:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'a.cover_img != null order by a.hit_num desc,a.real_hit_num desc' at line 1 - Invalid query: select a.*,u.nickname, case when cate.name IS NULL then '未分类' else cate.name end as cname from ci_article as a left join ci_article_category as cate on a.cid = cate.id  left join ci_user as u on a.author_id = u.id where a.is_del = 0 a.cover_img != null order by a.hit_num desc,a.real_hit_num desc
ERROR - 2017-02-09 16:02:11 --> 404 Page Not Found: Article/ccc
