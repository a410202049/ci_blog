<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-02-16 08:30:28 --> 404 Page Not Found: Tags/18
ERROR - 2017-02-16 08:30:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-02-16 08:30:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2017-02-16 08:40:22 --> Query error: Table 'ci_blog.relation_tags' doesn't exist - Invalid query: select a.*,u.nickname, case when cate.name IS NULL then '未分类' else cate.name end as cname from ci_article as a left join ci_article_category as cate on a.cid = cate.id  left join ci_user as u on a.author_id = u.id left join relation_tags as tag on tag.object_id = a.id  where a.is_del = 0  and tag.type='article' and tag.tag_id = '18' order by a.is_top desc,a.publishtime desc,a.createtime desc
ERROR - 2017-02-16 08:52:59 --> Severity: Warning --> Missing argument 2 for Article::search(), called in D:\phpStudy\WWW\blog\system\core\CodeIgniter.php on line 529 and defined D:\phpStudy\WWW\blog\application\controllers\home\Article.php 53
ERROR - 2017-02-16 08:53:15 --> Severity: Warning --> Missing argument 2 for Article::search(), called in D:\phpStudy\WWW\blog\system\core\CodeIgniter.php on line 529 and defined D:\phpStudy\WWW\blog\application\controllers\home\Article.php 53
ERROR - 2017-02-16 09:02:29 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:03:36 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:04:21 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:06:33 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:06:55 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:07:00 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:07:48 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:07:56 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:09:29 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:09:58 --> 404 Page Not Found: Search/index
ERROR - 2017-02-16 09:10:28 --> 404 Page Not Found: Search/%E4%BD%A0
ERROR - 2017-02-16 09:10:29 --> 404 Page Not Found: Search/%E4%BD%A0
ERROR - 2017-02-16 09:30:01 --> Severity: error --> Exception: syntax error, unexpected '}' D:\phpStudy\WWW\blog\application\core\Home_Controller.php 18
ERROR - 2017-02-16 10:04:29 --> 404 Page Not Found: Category/11
ERROR - 2017-02-16 10:04:44 --> 404 Page Not Found: Category/11
ERROR - 2017-02-16 10:04:56 --> 404 Page Not Found: Category/11
ERROR - 2017-02-16 10:07:40 --> 404 Page Not Found: Category/11
