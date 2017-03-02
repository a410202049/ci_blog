<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-01-05 13:40:05 --> 404 Page Not Found: admin/LinkCategory/index
ERROR - 2017-01-05 13:43:50 --> 404 Page Not Found: admin/LinkCategory/index
ERROR - 2017-01-05 13:57:32 --> Query error: Unknown column 't1.template' in 'field list' - Invalid query: select t1.*,case when t2.name IS NULL  then '顶级分类' else t2.name end as pname,case when t1.template = ''  then 'categoryTpl' else t1.template end as template from ci_link_category t1 left join ci_link_category t2 on t1.pid=t2.id order by t1.sort desc,t1.createtime desc
ERROR - 2017-01-05 14:06:32 --> Query error: Unknown column 'description' in 'field list' - Invalid query: INSERT INTO `ci_link_category` (`pid`, `description`, `name`, `template`, `createtime`) VALUES (NULL, NULL, '12', NULL, '2017-01-05 14:06:32')
ERROR - 2017-01-05 14:07:33 --> Query error: Unknown column 'description' in 'field list' - Invalid query: INSERT INTO `ci_link_category` (`pid`, `description`, `name`, `template`, `createtime`) VALUES (NULL, NULL, '2121', NULL, '2017-01-05 14:07:33')
ERROR - 2017-01-05 14:07:48 --> Query error: Unknown column 'description' in 'field list' - Invalid query: UPDATE `ci_link_category` SET `pid` = NULL, `description` = NULL, `name` = '我问问', `template` = NULL
WHERE `id` = '8'
ERROR - 2017-01-05 14:08:21 --> Query error: Unknown column 'description' in 'field list' - Invalid query: UPDATE `ci_link_category` SET `pid` = NULL, `description` = NULL, `name` = '我问问', `template` = NULL
WHERE `id` = '8'
ERROR - 2017-01-05 14:09:22 --> Query error: Unknown column 'description' in 'field list' - Invalid query: UPDATE `ci_link_category` SET `pid` = NULL, `description` = NULL, `name` = '9999', `template` = NULL
WHERE `id` = '5'
ERROR - 2017-01-05 14:10:44 --> Query error: Unknown column 'description' in 'field list' - Invalid query: UPDATE `ci_link_category` SET `pid` = NULL, `description` = NULL, `name` = '我问问', `template` = NULL
WHERE `id` = '8'
