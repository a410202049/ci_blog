<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-12-27 13:49:43 --> 404 Page Not Found: admin/ArticleCategory/index
ERROR - 2016-12-27 13:49:45 --> 404 Page Not Found: admin/Article/index
ERROR - 2016-12-27 14:21:31 --> 404 Page Not Found: admin/ArticleCategory/index
ERROR - 2016-12-27 14:33:00 --> 404 Page Not Found: admin/Article/index
ERROR - 2016-12-27 15:12:40 --> Query error: Unknown column 'desscription' in 'field list' - Invalid query: INSERT INTO `ci_article_category` (`pid`, `desscription`, `name`, `template`) VALUES ('0', '222', '111', '3333')
ERROR - 2016-12-27 15:45:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-12-27 15:45:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-12-27 15:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT u.username,u.id,u.realname,u.email,u.status,g.name as group_name,g.id as group_id,g.status as group_status from ci_user as u LEFT JOIN ci_user_group as g on g.id = u.group_id where u.id=
ERROR - 2016-12-27 16:10:13 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 39
ERROR - 2016-12-27 16:10:17 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 39
ERROR - 2016-12-27 16:10:19 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 39
ERROR - 2016-12-27 16:10:23 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 39
ERROR - 2016-12-27 16:49:32 --> Severity: Parsing Error --> syntax error, unexpected ')' D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 39
ERROR - 2016-12-27 16:52:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-15,15' at line 1 - Invalid query: select t1.*,case when t2.name IS NULL  then '顶级分类' else t2.name end as pname,case when t1.template = ''  then 'categoryTpl' else t1.template end as template from ci_article_category t1 left join ci_article_category t2 on t1.pid=t2.id LIMIT -15,15
ERROR - 2016-12-27 17:32:33 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 45
ERROR - 2016-12-27 17:33:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\ci_blog\application\controllers\admin\ArticleCategory.php 45
ERROR - 2016-12-27 17:39:49 --> 404 Page Not Found: admin/Article/index
ERROR - 2016-12-27 17:43:11 --> 404 Page Not Found: admin/Article/index
ERROR - 2016-12-27 17:46:34 --> 404 Page Not Found: admin/Article/index
