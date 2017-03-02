<?php

/* Article/category.twig */
class __TwigTemplate_6816231dcb0bc5f0443a0ad6962619366cc90accd985692eafac0a3fb67b74fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/common.twig", "Article/category.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Common/common.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"container\">
  <div class=\"content-wrap\">
    <div class=\"content\" id=\"content\">
";
        // line 11
        echo "<div class=\"title\">
          <h3 style=\"line-height: 1.3\">";
        // line 12
        if (($this->getAttribute(($context["current_nav"] ?? null), "name", array()) == "首页")) {
            echo "最新发布";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current_nav"] ?? null), "name", array()), "html", null, true);
        }
        echo "</h3>
            <div class=\"more\">
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["current_nav"] ?? null), "child", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 15
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, base_url(("category/" . $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\" title=\"DTcms\" draggable=\"false\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "              
            </div>
      </div>
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["articles"] ?? null), "articles", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "          ";
            if ((($context["page_index"] ?? null) == "1")) {
                // line 22
                echo "              ";
                if ((($this->getAttribute($context["loop"], "index", array()) <= 2) && ($this->getAttribute($context["article"], "is_top", array()) == "1"))) {
                    // line 23
                    echo "                <article class=\"excerpt-minic excerpt-minic-index\">
                      <h2><span class=\"red\">【置顶】</span><a class=\"pjax\" target=\"_self\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, base_url(("detail/" . $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</a>
                      </h2>
                      <p class=\"note\">";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                    echo "</p>
                </article>
              ";
                } else {
                    // line 29
                    echo "                  <article class=\"excerpt excerpt-3 ";
                    if ( !$this->getAttribute($context["article"], "cover_img", array())) {
                        echo "excerpt_no_pic";
                    }
                    echo "\" style=\"\">
                        ";
                    // line 30
                    if ($this->getAttribute($context["article"], "cover_img", array())) {
                        // line 31
                        echo "                          <a class=\"pjax focus\" href=\"";
                        echo twig_escape_filter($this->env, base_url(("detail/" . $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "\" target=\"_self\" ><img class=\"thumb\"  src=\"";
                        echo twig_escape_filter($this->env, base_url($this->getAttribute($context["article"], "cover_img", array())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "\"  style=\"display: inline;\"></a>
                        ";
                    }
                    // line 33
                    echo "                        <header><a class=\"pjax cat\" href=\"";
                    echo twig_escape_filter($this->env, base_url(("category/" . $this->getAttribute($context["article"], "cid", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "cname", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "cname", array()), "html", null, true);
                    echo "<i></i></a>
                            <h2><a class=\"pjax\" href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, base_url(("detail/" . $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\" target=\"_self\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</a>
                            </h2>
                        </header>
                        <p class=\"meta\">
                            <time class=\"time\"><i class=\"glyphicon glyphicon-time\"></i> ";
                    // line 38
                    if ($this->getAttribute($context["article"], "publishtime", array())) {
                        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "publishtime", array()), 0, 10), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "createtime", array()), 0, 10), "html", null, true);
                    }
                    echo "</time>
                            <span class=\"views\"><i class=\"glyphicon glyphicon-eye-open\"></i> ";
                    // line 39
                    if ($this->getAttribute($context["article"], "hit_num", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hit_num", array()), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "real_hit_num", array()), "html", null, true);
                    }
                    echo "</span>
                             ";
                    // line 41
                    echo "                        </p>
                        <p class=\"note\">";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                    echo "</p>
                    </article>
              ";
                }
                // line 45
                echo "          ";
            } else {
                // line 46
                echo "              <article class=\"excerpt excerpt-3 ";
                if ( !$this->getAttribute($context["article"], "cover_img", array())) {
                    echo "excerpt_no_pic";
                }
                echo "\" style=\"\">
                    ";
                // line 47
                if ($this->getAttribute($context["article"], "cover_img", array())) {
                    // line 48
                    echo "                      <a class=\"pjax focus\" href=\"";
                    echo twig_escape_filter($this->env, base_url(("detail/" . $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\" target=\"_self\" ><img class=\"thumb\"  src=\"";
                    echo twig_escape_filter($this->env, base_url($this->getAttribute($context["article"], "cover_img", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\"  style=\"display: inline;\"></a>
                    ";
                }
                // line 50
                echo "                    <header><a class=\"pjax cat\" href=\"";
                echo twig_escape_filter($this->env, base_url(("category/" . $this->getAttribute($context["article"], "cid", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "cname", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "cname", array()), "html", null, true);
                echo "<i></i></a>
                        <h2><a class=\"pjax\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, base_url(("detail/" . $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "\" target=\"_self\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a>
                        </h2>
                    </header>
                    <p class=\"meta\">
                        <time class=\"time\"><i class=\"glyphicon glyphicon-time\"></i> ";
                // line 55
                if ($this->getAttribute($context["article"], "publishtime", array())) {
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "publishtime", array()), 0, 10), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "createtime", array()), 0, 10), "html", null, true);
                }
                echo "</time>
                        <span class=\"views\"><i class=\"glyphicon glyphicon-eye-open\"></i> ";
                // line 56
                if ($this->getAttribute($context["article"], "hit_num", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hit_num", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "real_hit_num", array()), "html", null, true);
                }
                echo "</span>
                         ";
                // line 58
                echo "                    </p>
                    <p class=\"note\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                echo "</p>
                </article>
          ";
            }
            // line 62
            echo "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      ";
        echo $this->getAttribute(($context["articles"] ?? null), "pager", array());
        echo "
    </div>
  </div>
  <aside class=\"sidebar\">
    <div class=\"widget widget_search\">
      <form class=\"navbar-form\" action=\"";
        // line 69
        echo twig_escape_filter($this->env, base_url("search"), "html", null, true);
        echo "/1\" method=\"get\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"keyword\" class=\"form-control\" size=\"35\" placeholder=\"请输入关键字\" maxlength=\"15\" autocomplete=\"off\">
          <span class=\"input-group-btn\">
          <button class=\"btn btn-default btn-search\" type=\"submit\">搜索</button>
          </span> </div>
      </form>
    </div>
    <div class=\"widget widget_hot\">
          <h3>热门文章</h3>
          <ul>   
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hots"] ?? null), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo "         
                <li><a title=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, base_url(("detail/" . $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"thumbnail\">
                      <img class=\"thumb\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, base_url($this->getAttribute($context["article"], "cover_img", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "\"  style=\"display: block;\">
                  </span><span class=\"text\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</span><span class=\"muted\"><i class=\"glyphicon glyphicon-time\"></i>
                      ";
            // line 84
            if ($this->getAttribute($context["article"], "publishtime", array())) {
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "publishtime", array()), 0, 10), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["article"], "createtime", array()), 0, 10), "html", null, true);
            }
            // line 85
            echo "                  </span><span class=\"muted\"><i class=\"glyphicon glyphicon-eye-open\"></i> ";
            if ($this->getAttribute($context["article"], "hit_num", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hit_num", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "real_hit_num", array()), "html", null, true);
            }
            echo "</span></a>
                </li> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo " 
          </ul>
     </div>
     <div class=\"widget widget_sentence\">
      <h3>文章归档</h3> 
        <ol class=\"field\">
           ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ym"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            echo "   
          <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, base_url(("article/date/" . $this->getAttribute($context["y"], "ym", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "ymtime", array()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["y"], "num", array()), "html", null, true);
            echo ")</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo " 
        </ol>
     </div>
    <div class=\"widget widget_sentence\">
      <h3>友情链接</h3>
      <div class=\"widget-sentence-link\">
        <a href=\"http://web.muzhuangnet.com\" title=\"网站建设\" target=\"_self\" >网站建设</a>&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </aside>
</section>
";
    }

    public function getTemplateName()
    {
        return "Article/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 95,  338 => 94,  332 => 93,  324 => 87,  310 => 85,  304 => 84,  300 => 83,  294 => 82,  288 => 81,  282 => 80,  268 => 69,  259 => 64,  244 => 62,  238 => 59,  235 => 58,  227 => 56,  219 => 55,  208 => 51,  199 => 50,  187 => 48,  185 => 47,  178 => 46,  175 => 45,  169 => 42,  166 => 41,  158 => 39,  150 => 38,  139 => 34,  130 => 33,  118 => 31,  116 => 30,  109 => 29,  103 => 26,  94 => 24,  91 => 23,  88 => 22,  85 => 21,  68 => 20,  63 => 17,  52 => 15,  48 => 14,  39 => 12,  36 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Common/common.twig\" %}
{% block container %}
<section class=\"container\">
  <div class=\"content-wrap\">
    <div class=\"content\" id=\"content\">
{#       {% if page_index == '1'%}
        {% for article in tops.articles %}

        {% endfor %}
      {% endif %} #}
<div class=\"title\">
          <h3 style=\"line-height: 1.3\">{% if current_nav.name == '首页'%}最新发布{% else %}{{current_nav.name}}{% endif %}</h3>
            <div class=\"more\">
              {% for child in current_nav.child %}
              <a href=\"{{base_url('category/'~child.id)}}\" title=\"DTcms\" draggable=\"false\">{{child.name}}</a>
              {% endfor %}
              
            </div>
      </div>
      {% for article in articles.articles %}
          {% if page_index == '1' %}
              {% if loop.index <= 2 and article.is_top == '1' %}
                <article class=\"excerpt-minic excerpt-minic-index\">
                      <h2><span class=\"red\">【置顶】</span><a class=\"pjax\" target=\"_self\" href=\"{{base_url('detail/'~article.id)}}\" title=\"{{article.title}}\">{{article.title}}</a>
                      </h2>
                      <p class=\"note\">{{article.description}}</p>
                </article>
              {% else %}
                  <article class=\"excerpt excerpt-3 {% if not article.cover_img %}excerpt_no_pic{% endif %}\" style=\"\">
                        {% if article.cover_img %}
                          <a class=\"pjax focus\" href=\"{{base_url('detail/'~article.id)}}\" title=\"{{article.title}}\" target=\"_self\" ><img class=\"thumb\"  src=\"{{base_url(article.cover_img)}}\" alt=\"{{article.title}}\"  style=\"display: inline;\"></a>
                        {% endif %}
                        <header><a class=\"pjax cat\" href=\"{{base_url('category/'~article.cid)}}\" title=\"{{article.cname}}\" >{{article.cname}}<i></i></a>
                            <h2><a class=\"pjax\" href=\"{{base_url('detail/'~article.id)}}\" title=\"{{article.title}}\" target=\"_self\" >{{article.title}}</a>
                            </h2>
                        </header>
                        <p class=\"meta\">
                            <time class=\"time\"><i class=\"glyphicon glyphicon-time\"></i> {% if article.publishtime %}{{article.publishtime|slice(0,10)}}{% else %}{{article.createtime|slice(0,10)}}{% endif %}</time>
                            <span class=\"views\"><i class=\"glyphicon glyphicon-eye-open\"></i> {% if article.hit_num %}{{article.hit_num}}{% else %}{{article.real_hit_num}}{% endif %}</span>
                             {# <a class=\"comment\" href=\"##comment\" title=\"评论\" target=\"_self\" ><i class=\"glyphicon glyphicon-comment\"></i> 0</a> #}
                        </p>
                        <p class=\"note\">{{article.description}}</p>
                    </article>
              {% endif %}
          {% else %}
              <article class=\"excerpt excerpt-3 {% if not article.cover_img %}excerpt_no_pic{% endif %}\" style=\"\">
                    {% if article.cover_img %}
                      <a class=\"pjax focus\" href=\"{{base_url('detail/'~article.id)}}\" title=\"{{article.title}}\" target=\"_self\" ><img class=\"thumb\"  src=\"{{base_url(article.cover_img)}}\" alt=\"{{article.title}}\"  style=\"display: inline;\"></a>
                    {% endif %}
                    <header><a class=\"pjax cat\" href=\"{{base_url('category/'~article.cid)}}\" title=\"{{article.cname}}\" >{{article.cname}}<i></i></a>
                        <h2><a class=\"pjax\" href=\"{{base_url('detail/'~article.id)}}\" title=\"{{article.title}}\" target=\"_self\" >{{article.title}}</a>
                        </h2>
                    </header>
                    <p class=\"meta\">
                        <time class=\"time\"><i class=\"glyphicon glyphicon-time\"></i> {% if article.publishtime %}{{article.publishtime|slice(0,10)}}{% else %}{{article.createtime|slice(0,10)}}{% endif %}</time>
                        <span class=\"views\"><i class=\"glyphicon glyphicon-eye-open\"></i> {% if article.hit_num %}{{article.hit_num}}{% else %}{{article.real_hit_num}}{% endif %}</span>
                         {# <a class=\"comment\" href=\"##comment\" title=\"评论\" target=\"_self\" ><i class=\"glyphicon glyphicon-comment\"></i> 0</a> #}
                    </p>
                    <p class=\"note\">{{article.description}}</p>
                </article>
          {% endif %}

      {% endfor %}
      {{articles.pager|raw}}
    </div>
  </div>
  <aside class=\"sidebar\">
    <div class=\"widget widget_search\">
      <form class=\"navbar-form\" action=\"{{base_url('search')}}/1\" method=\"get\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"keyword\" class=\"form-control\" size=\"35\" placeholder=\"请输入关键字\" maxlength=\"15\" autocomplete=\"off\">
          <span class=\"input-group-btn\">
          <button class=\"btn btn-default btn-search\" type=\"submit\">搜索</button>
          </span> </div>
      </form>
    </div>
    <div class=\"widget widget_hot\">
          <h3>热门文章</h3>
          <ul>   
            {% for article in hots.articles %}         
                <li><a title=\"{{article.title}}\" href=\"{{base_url('detail/'~article.id)}}\" ><span class=\"thumbnail\">
                      <img class=\"thumb\" src=\"{{base_url(article.cover_img)}}\" alt=\"{{article.title}}\"  style=\"display: block;\">
                  </span><span class=\"text\">{{article.title}}</span><span class=\"muted\"><i class=\"glyphicon glyphicon-time\"></i>
                      {% if article.publishtime %}{{article.publishtime|slice(0,10)}}{% else %}{{article.createtime|slice(0,10)}}{% endif %}
                  </span><span class=\"muted\"><i class=\"glyphicon glyphicon-eye-open\"></i> {% if article.hit_num %}{{article.hit_num}}{% else %}{{article.real_hit_num}}{% endif %}</span></a>
                </li> 
            {% endfor %} 
          </ul>
     </div>
     <div class=\"widget widget_sentence\">
      <h3>文章归档</h3> 
        <ol class=\"field\">
           {% for y in ym %}   
          <li><a href=\"{{base_url('article/date/'~y.ym)}}\">{{y.ymtime}}({{y.num}})</a></li>
          {% endfor %} 
        </ol>
     </div>
    <div class=\"widget widget_sentence\">
      <h3>友情链接</h3>
      <div class=\"widget-sentence-link\">
        <a href=\"http://web.muzhuangnet.com\" title=\"网站建设\" target=\"_self\" >网站建设</a>&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </aside>
</section>
{% endblock %}
", "Article/category.twig", "D:\\phpStudy\\WWW\\blog\\templates\\home\\default\\Article\\category.twig");
    }
}
