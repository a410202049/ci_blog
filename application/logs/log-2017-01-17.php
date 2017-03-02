<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-01-17 11:26:06 --> Query error: Unknown column 'tag.css_class' in 'field list' - Invalid query: SELECT `tag`.`id`, `tag`.`name`, `tag`.`css_class`
FROM `ci_relation_tags` as `r`
LEFT JOIN `ci_tags` as `tag` ON `r`.`tag_id` = `tag`.`id`
WHERE `r`.`object_id` = '9'
AND `r`.`type` = 'article'
