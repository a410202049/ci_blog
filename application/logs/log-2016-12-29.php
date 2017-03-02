<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-12-29 10:54:38 --> 404 Page Not Found: admin/Faviconico/index
ERROR - 2016-12-29 10:56:15 --> 404 Page Not Found: admin/Article/favicon.ico
ERROR - 2016-12-29 11:00:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-12-29 11:00:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-12-29 11:37:42 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:37:42 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:37:42 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:37:43 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:39:52 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:39:52 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:39:52 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:39:53 --> 404 Page Not Found: Public/admin
ERROR - 2016-12-29 11:51:25 --> Query error: Table 'ci_blog.tags' doesn't exist - Invalid query: select * from tags where name like '%%'
ERROR - 2016-12-29 13:10:30 --> Query error: Table 'ci_blog.tags' doesn't exist - Invalid query: select * from tags where name like '% %'
ERROR - 2016-12-29 13:10:32 --> Query error: Table 'ci_blog.tags' doesn't exist - Invalid query: select * from tags where name like '%大%'
ERROR - 2016-12-29 14:02:49 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) D:\phpStudy\WWW\ci_blog\application\controllers\admin\Article.php 48
ERROR - 2016-12-29 14:23:53 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 14:31:01 --> Severity: Parsing Error --> syntax error, unexpected ';' D:\phpStudy\WWW\ci_blog\application\controllers\admin\Article.php 32
ERROR - 2016-12-29 14:31:13 --> Severity: Error --> Call to undefined method Article::join() D:\phpStudy\WWW\ci_blog\application\controllers\admin\Article.php 32
ERROR - 2016-12-29 14:31:26 --> Query error: Unknown column 'ci_u.group_id' in 'on clause' - Invalid query: SELECT `tag`.`id`, `tag`.`name`, `tag`.`color`
FROM `ci_relation_tags` as `r`
LEFT JOIN `ci_tags` as `tag` ON `ci_u`.`group_id` = `ci_g`.`id`
WHERE `r`.`object_id` = '6'
AND `r`.`type` = 'article'
ERROR - 2016-12-29 14:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
WHERE `r`.`object_id` = '6'
AND `r`.`type` = 'article'' at line 3 - Invalid query: SELECT `tag`.`id`, `tag`.`name`, `tag`.`color`
FROM `ci_relation_tags` as `r`
LEFT JOIN `ci_tags` as `tag` USING ()
WHERE `r`.`object_id` = '6'
AND `r`.`type` = 'article'
ERROR - 2016-12-29 14:34:32 --> Query error: Unknown column 'tag.i' in 'on clause' - Invalid query: SELECT `tag`.`id`, `tag`.`name`, `tag`.`color`
FROM `ci_relation_tags` as `r`
LEFT JOIN `ci_tags` as `tag` ON `r`.`tag_id` = `tag`.`i`
WHERE `r`.`object_id` = '6'
AND `r`.`type` = 'article'
ERROR - 2016-12-29 14:34:44 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 14:35:45 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 14:38:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`tag`.`id`' at line 6 - Invalid query: SELECT `tag`.`id`, `tag`.`name`, `tag`.`color`
FROM `ci_relation_tags` as `r`
LEFT JOIN `ci_tags` as `tag` ON `r`.`tag_id` = `tag`.`id`
WHERE `r`.`object_id` = '6'
AND `r`.`type` = 'article'
ORDER BY `r`.`tag_id =` `tag`.`id`
ERROR - 2016-12-29 14:39:24 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 14:40:18 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 14:57:17 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) D:\phpStudy\WWW\ci_blog\application\controllers\admin\Tags.php 39
ERROR - 2016-12-29 15:02:42 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 15:06:52 --> 404 Page Not Found: admin/Uploads/article
ERROR - 2016-12-29 15:30:39 --> 404 Page Not Found: admin/ArticleManage/renderEditArticle
ERROR - 2016-12-29 15:45:53 --> 404 Page Not Found: admin/ArticleManage/renderEditArticle
ERROR - 2016-12-29 16:32:55 --> Severity: Warning --> Invalid argument supplied for foreach() D:\phpStudy\WWW\ci_blog\application\models\data_model.php 99
ERROR - 2016-12-29 16:32:55 --> Query error: Unknown column 'ci_tag.id' in 'field list' - Invalid query: SELECT `ci_tag`.`id`, `ci_tag`.`name`, `ci_tag`.`css_class`
FROM `ci_relation_tags` as `r`
WHERE `r`.`object_id` = '5'
AND `r`.`type` = 'article'
ERROR - 2016-12-29 16:34:18 --> 404 Page Not Found: admin/Article/uploads
