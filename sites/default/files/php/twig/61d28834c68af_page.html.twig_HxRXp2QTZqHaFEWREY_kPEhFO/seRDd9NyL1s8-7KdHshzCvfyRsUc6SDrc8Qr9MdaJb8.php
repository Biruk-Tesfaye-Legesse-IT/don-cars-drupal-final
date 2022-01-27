<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/used_cars/templates/page.html.twig */
class __TwigTemplate_da0239695e8fd9c0c6721ca2494c6205914561fa7752db407c4d3d1dc2458a3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- <div id=\"page-preloader\">
  <div class=\"spinner\">
  <div class=\"cube1\"></div>
  <div class=\"cube2\"></div>
</div>
</div> -->
<a name=\"Top\" id=\"Top\"></a>

<div id=\"color\" class=\"default\">
<div class=\"top_header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
        <div class=\"top_menu\">
          ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
          ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "evidence", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
        ";
        // line 22
        if (($context["show_hide_icon"] ?? null)) {
            // line 23
            echo "          <div class=\"socBox\">
            <ul class=\"socIcons\">
                ";
            // line 25
            $context["soc"] = ["fa-twitter" =>             // line 26
($context["twitter"] ?? null), "fa-facebook" =>             // line 27
($context["facebook"] ?? null), "fa-flickr" =>             // line 28
($context["flickr"] ?? null), "fa-linkedin" =>             // line 29
($context["linkedin"] ?? null), "fa-play" =>             // line 30
($context["youtube"] ?? null), "fa-pinterest" =>             // line 31
($context["pinterest"] ?? null), "fa-google-plus" =>             // line 32
($context["google"] ?? null), "fa-dribbble" =>             // line 33
($context["dribbble"] ?? null), "fa-vimeo-square" =>             // line 34
($context["vimeo"] ?? null), "fa-instagram" =>             // line 35
($context["instagram"] ?? null), "fa-vk" =>             // line 36
($context["vk"] ?? null)];
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 39
                echo "                ";
                if ($context["value"]) {
                    // line 40
                    echo "                <li>
                    <a href=\"";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 41, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">
                        <i class=\"fa ";
                    // line 42
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 42, $this->source), "html", null, true);
                    echo "\"></i>
                    </a>
                </li>
                ";
                }
                // line 46
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </ul>
          </div>
        ";
        }
        // line 50
        echo "      </div>
    </div>
  </div>
</div>
  <div class=\"center_block\">
    <div class=\"top_block\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
          <div class=\"logo\">
            ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
          <div id=\"site-navigation\" class=\"maimMenu\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
                <i class=\"fa fa-bars\"></i>
              </button>
              <div id=\"main-navbar-collapse\" class=\"navbar-collapse collapse\">
                ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   ";
        // line 78
        if (($context["is_front"] ?? null)) {
            // line 79
            echo "
    ";
            // line 80
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 80) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 80)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 80)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 80))) {
                // line 81
                echo "
    <div class=\"top1\">
      <div class=\"top_bg\">
      <div class=\"container\">
      ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 85)) {
                    // line 86
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 86) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 86)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 86))) {
                        // line 87
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 88
($context["page"] ?? null), "top2", [], "any", false, false, true, 88) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 88))) {
                        // line 89
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 90
($context["page"] ?? null), "top2", [], "any", false, false, true, 90) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 90))) {
                        // line 91
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 92
($context["page"] ?? null), "top3", [], "any", false, false, true, 92) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 92))) {
                        // line 93
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 94
($context["page"] ?? null), "top2", [], "any", false, false, true, 94) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 94)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 94))) {
                        // line 95
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 97
                        echo "          
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
          ";
                    }
                    // line 100
                    echo "            <div class=\"row\">
                ";
                    // line 101
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                    echo "
              
          ";
                }
                // line 104
                echo "          </div>
        ";
                // line 105
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 105)) {
                    // line 106
                    echo "          ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 106) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 106)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 106))) {
                        // line 107
                        echo "            <div class=\"col-lg-3\">
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 108
($context["page"] ?? null), "top1", [], "any", false, false, true, 108) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 108))) {
                        // line 109
                        echo "              <div class=\"col-lg-4\">
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 110
($context["page"] ?? null), "top1", [], "any", false, false, true, 110) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 110))) {
                        // line 111
                        echo "              <div class=\"col-lg-4\">
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 112
($context["page"] ?? null), "top3", [], "any", false, false, true, 112) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 112))) {
                        // line 113
                        echo "              <div class=\"col-lg-4\">
            ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 114
($context["page"] ?? null), "top1", [], "any", false, false, true, 114) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 114)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 114))) {
                        // line 115
                        echo "              <div class=\"col-lg-6\">
            ";
                    } else {
                        // line 117
                        echo "              <div class=\"col-lg-12\">
          ";
                    }
                    // line 119
                    echo "          <div class=\"top2\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 122
                echo "
      ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 123)) {
                    // line 124
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 124) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 124)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 124))) {
                        // line 125
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 126
($context["page"] ?? null), "top1", [], "any", false, false, true, 126) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 126))) {
                        // line 127
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 128
($context["page"] ?? null), "top1", [], "any", false, false, true, 128) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 128))) {
                        // line 129
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 130
($context["page"] ?? null), "top2", [], "any", false, false, true, 130) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 130))) {
                        // line 131
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 132
($context["page"] ?? null), "top1", [], "any", false, false, true, 132) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 132)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 132))) {
                        // line 133
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 135
                        echo "            <div class=\"col-lg-12\">
        ";
                    }
                    // line 137
                    echo "          <div class=\"top3\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 140
                echo "
      ";
                // line 141
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 141)) {
                    // line 142
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 142) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 142)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 142))) {
                        // line 143
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 144
($context["page"] ?? null), "top1", [], "any", false, false, true, 144) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 144))) {
                        // line 145
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 146
($context["page"] ?? null), "top1", [], "any", false, false, true, 146) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 146))) {
                        // line 147
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 148
($context["page"] ?? null), "top2", [], "any", false, false, true, 148) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 148))) {
                        // line 149
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 150
($context["page"] ?? null), "top1", [], "any", false, false, true, 150) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 150)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 150))) {
                        // line 151
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 153
                        echo "            <div class=\"col-lg-12\">
        ";
                    }
                    // line 155
                    echo "          <div class=\"top4\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 158
                echo "  </div>
  </div>
            </div>
";
            }
        }
        // line 163
        echo "
  </div>

    ";
        // line 166
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 167
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 170
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 171
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 172
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["fro"] ?? null), "feature1nt_page", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 172, $this->source), "html", null, true);
                echo "</a>
          </strong>
        
          <h1 class=\"site-name\">
            <a href=\"";
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 176, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 176, $this->source), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 179
            echo "        ";
            if (($context["site_slogan"] ?? null)) {
                // line 180
                echo "          <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 180, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 182
            echo "      </div>

   ";
        }
        // line 185
        echo "
  <!--  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button> -->

  </div>
  </div>
</header>

";
        // line 197
        if (($context["is_front"] ?? null)) {
            // line 198
            echo "<div class=\"city_block\">
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
        ";
            // line 200
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_block", [], "any", false, false, true, 200)) {
                // line 201
                echo "          <section id=\"left_block\" class=\"\">
            <div class=\"left_block\">
              ";
                // line 203
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_block", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                echo "
            </div>
          </section>
        ";
            }
            // line 207
            echo "      </div>
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
        ";
            // line 209
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "second_block", [], "any", false, false, true, 209)) {
                // line 210
                echo "          <section id=\"second_block\" class=\"second_block\">
            <div class=\"\">
              ";
                // line 212
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "second_block", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "
            </div>
          </section>
        ";
            }
            // line 216
            echo "      </div>
      ";
            // line 217
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
            echo "
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
        ";
            // line 219
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_block", [], "any", false, false, true, 219)) {
                // line 220
                echo "          <section id=\"right_block\" class=\"\">
            <div class=\"right_block\">
              ";
                // line 222
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_block", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                echo "
            </div>
          </section>
        ";
            }
            // line 226
            echo "      </div>
</div>
";
        }
        // line 229
        echo "
<div class=\"page\">
  
  ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_info", [], "any", false, false, true, 232)) {
            // line 233
            echo "    <div class=\"container\">
      <div class=\"row\">
          <div class=\"top_info\">";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_info", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
            echo "</div>
      </div>
    </div>
  ";
        }
        // line 239
        echo "

";
        // line 241
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 241) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 241)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 241)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 241))) {
            // line 242
            echo "<div class=\"service\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 245
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 245)) {
                // line 246
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 246) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 246)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 246))) {
                    // line 247
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 248
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 248) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 248))) {
                    // line 249
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 250
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 250) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 250))) {
                    // line 251
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 252
($context["page"] ?? null), "top_content3", [], "any", false, false, true, 252) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 252))) {
                    // line 253
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 254
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 254) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 254)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 254))) {
                    // line 255
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 257
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 259
                echo "          <div class=\"top_content1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 259), 259, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 262
            echo "
      ";
            // line 263
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 263)) {
                // line 264
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 264) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 264)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 264))) {
                    // line 265
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 266
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 266) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 266))) {
                    // line 267
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 268
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 268) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 268))) {
                    // line 269
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 270
($context["page"] ?? null), "top_content3", [], "any", false, false, true, 270) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 270))) {
                    // line 271
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 272
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 272) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 272)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 272))) {
                    // line 273
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 275
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 277
                echo "          <div class=\"top_content2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 279
            echo "  

      ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 281)) {
                // line 282
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 282) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 282)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 282))) {
                    // line 283
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 284
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 284) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 284))) {
                    // line 285
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 286
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 286) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 286))) {
                    // line 287
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 288
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 288) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 288))) {
                    // line 289
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 290
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 290) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 290)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 290))) {
                    // line 291
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 293
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 295
                echo "          <div class=\"top_content3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 298
            echo "
      ";
            // line 299
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 299)) {
                // line 300
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 300) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 300)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 300))) {
                    // line 301
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 302
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 302) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 302))) {
                    // line 303
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 304
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 304) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 304))) {
                    // line 305
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 306
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 306) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 306))) {
                    // line 307
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 308
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 308) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 308)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 308))) {
                    // line 309
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 311
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 313
                echo "          <div class=\"top4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 316
            echo "    </div>
  </div>
</div>
";
        }
        // line 320
        echo "
";
        // line 321
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_information", [], "any", false, false, true, 321)) {
            // line 322
            echo "  <div class=\"post_information\">
      <div class=\"container\">
        <div class=\"col-lg-12\">
            ";
            // line 325
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_information", [], "any", false, false, true, 325), 325, $this->source), "html", null, true);
            echo "
        </div>
      </div>
  </div>
";
        }
        // line 330
        echo "
";
        // line 331
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 331) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 331))) {
            // line 332
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 334
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 334)) {
                // line 335
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 335) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 335)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 335))) {
                    // line 336
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 337
($context["page"] ?? null), "line2", [], "any", false, false, true, 337) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 337))) {
                    // line 338
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 339
($context["page"] ?? null), "line2", [], "any", false, false, true, 339) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 339))) {
                    // line 340
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 341
($context["page"] ?? null), "line3", [], "any", false, false, true, 341) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 341))) {
                    // line 342
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 343
($context["page"] ?? null), "line2", [], "any", false, false, true, 343) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 343)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 343))) {
                    // line 344
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 346
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 348
                echo "          <div class=\"line1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 348), 348, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 351
            echo "
      ";
            // line 352
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 352)) {
                // line 353
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 353) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 353)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 353))) {
                    // line 354
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 355
($context["page"] ?? null), "line1", [], "any", false, false, true, 355) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 355))) {
                    // line 356
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 357
($context["page"] ?? null), "line1", [], "any", false, false, true, 357) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 357))) {
                    // line 358
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 359
($context["page"] ?? null), "line3", [], "any", false, false, true, 359) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 359))) {
                    // line 360
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 361
($context["page"] ?? null), "line1", [], "any", false, false, true, 361) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 361)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 361))) {
                    // line 362
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 364
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 366
                echo "          <div class=\"line2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 368
            echo "  

      ";
            // line 370
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 370)) {
                // line 371
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 371) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 371)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 371))) {
                    // line 372
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 373
($context["page"] ?? null), "line1", [], "any", false, false, true, 373) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 373))) {
                    // line 374
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 375
($context["page"] ?? null), "line1", [], "any", false, false, true, 375) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 375))) {
                    // line 376
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 377
($context["page"] ?? null), "line2", [], "any", false, false, true, 377) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 377))) {
                    // line 378
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 379
($context["page"] ?? null), "line1", [], "any", false, false, true, 379) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 379)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 379))) {
                    // line 380
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 382
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 384
                echo "          <div class=\"line3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 387
            echo "
      ";
            // line 388
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 388)) {
                // line 389
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 389) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 389)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 389))) {
                    // line 390
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 391
($context["page"] ?? null), "line1", [], "any", false, false, true, 391) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 391))) {
                    // line 392
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 393
($context["page"] ?? null), "line1", [], "any", false, false, true, 393) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 393))) {
                    // line 394
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 395
($context["page"] ?? null), "line2", [], "any", false, false, true, 395) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 395))) {
                    // line 396
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 397
($context["page"] ?? null), "line1", [], "any", false, false, true, 397) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 397)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 397))) {
                    // line 398
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 400
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 402
                echo "          <div class=\"line4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 402), 402, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 405
            echo "
    </div>
  </div>
";
        }
        // line 409
        echo "
";
        // line 410
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 410)) {
            // line 411
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 414
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 419
        echo "
";
        // line 420
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 420) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 420)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 420)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 420))) {
            // line 421
            echo "  <div class=\"feature\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 424
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 424)) {
                // line 425
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 425) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 425)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 425))) {
                    // line 426
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 427
($context["page"] ?? null), "feature2", [], "any", false, false, true, 427) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 427))) {
                    // line 428
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 429
($context["page"] ?? null), "feature2", [], "any", false, false, true, 429) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 429))) {
                    // line 430
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 431
($context["page"] ?? null), "feature3", [], "any", false, false, true, 431) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 431))) {
                    // line 432
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 433
($context["page"] ?? null), "feature2", [], "any", false, false, true, 433) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 433)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 433))) {
                    // line 434
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 436
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 438
                echo "          <div class=\"feature1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 441
            echo "
      ";
            // line 442
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 442)) {
                // line 443
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 443) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 443)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 443))) {
                    // line 444
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 445
($context["page"] ?? null), "feature1", [], "any", false, false, true, 445) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 445))) {
                    // line 446
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 447
($context["page"] ?? null), "feature1", [], "any", false, false, true, 447) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 447))) {
                    // line 448
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 449
($context["page"] ?? null), "feature3", [], "any", false, false, true, 449) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 449))) {
                    // line 450
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 451
($context["page"] ?? null), "feature1", [], "any", false, false, true, 451) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 451)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 451))) {
                    // line 452
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 454
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 456
                echo "          <div class=\"feature2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 456), 456, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 459
            echo "
      ";
            // line 460
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 460)) {
                // line 461
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 461) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 461)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 461))) {
                    // line 462
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 463
($context["page"] ?? null), "feature1", [], "any", false, false, true, 463) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 463))) {
                    // line 464
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 465
($context["page"] ?? null), "feature1", [], "any", false, false, true, 465) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 465))) {
                    // line 466
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 467
($context["page"] ?? null), "feature2", [], "any", false, false, true, 467) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 467))) {
                    // line 468
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 469
($context["page"] ?? null), "feature1", [], "any", false, false, true, 469) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 469)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 469))) {
                    // line 470
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 472
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 474
                echo "          <div class=\"feature3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 474), 474, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 477
            echo "
      ";
            // line 478
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 478)) {
                // line 479
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 479) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 479)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 479))) {
                    // line 480
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 481
($context["page"] ?? null), "feature1", [], "any", false, false, true, 481) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 481))) {
                    // line 482
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 483
($context["page"] ?? null), "feature1", [], "any", false, false, true, 483) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 483))) {
                    // line 484
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 485
($context["page"] ?? null), "feature2", [], "any", false, false, true, 485) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 485))) {
                    // line 486
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 487
($context["page"] ?? null), "feature1", [], "any", false, false, true, 487) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 487)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 487))) {
                    // line 488
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 490
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 492
                echo "          <div class=\"feature4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 492), 492, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 495
            echo "    </div>
    </div>
  </div>
";
        }
        // line 499
        echo "
";
        // line 500
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 500) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 500)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 500)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 500))) {
            // line 501
            echo "  <div class=\"\">
    <div class=\"\">
      ";
            // line 503
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 503)) {
                // line 504
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 504) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 504)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 504))) {
                    // line 505
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 506
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 506) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 506))) {
                    // line 507
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 508
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 508) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 508))) {
                    // line 509
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 510
($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 510) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 510))) {
                    // line 511
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 512
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 512) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 512)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 512))) {
                    // line 513
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 515
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 517
                echo "          <div class=\"contenttop1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 517), 517, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 520
            echo "
      ";
            // line 521
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 521)) {
                // line 522
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 522) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 522)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 522))) {
                    // line 523
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 524
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 524) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 524))) {
                    // line 525
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 526
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 526) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 526))) {
                    // line 527
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 528
($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 528) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 528))) {
                    // line 529
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 530
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 530) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 530)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 530))) {
                    // line 531
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 533
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 535
                echo "          <div class=\"contenttop2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 535), 535, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 538
            echo "
      ";
            // line 539
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 539)) {
                // line 540
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 540) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 540)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 540))) {
                    // line 541
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 542
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 542) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 542))) {
                    // line 543
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 544
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 544) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 544))) {
                    // line 545
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 546
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 546) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 546))) {
                    // line 547
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 548
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 548) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 548)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 548))) {
                    // line 549
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 551
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 553
                echo "          <div class=\"contenttop3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 553), 553, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 556
            echo "
      ";
            // line 557
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 557)) {
                // line 558
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 558) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 558)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 558))) {
                    // line 559
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 560
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 560) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 560))) {
                    // line 561
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 562
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 562) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 562))) {
                    // line 563
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 564
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 564) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 564))) {
                    // line 565
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 566
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 566) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 566)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 566))) {
                    // line 567
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 569
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 571
                echo "          <div class=\"contenttop4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 571), 571, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 574
            echo "
    </div>
  </div>
";
        }
        // line 578
        echo "
 


  
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 586
        if (($context["front_page"] ?? null)) {
            // line 587
            echo "
            ";
            // line 588
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 588)) {
                // line 589
                echo "              <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 590
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 590), 590, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 593
            echo "        
            <div class=\"content col-lg-";
            // line 594
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 594), 594, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 594), 594, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12\">
              ";
            // line 595
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 595), 595, $this->source), "html", null, true);
            echo "

              ";
            // line 597
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 597, $this->source), "html", null, true);
            echo "
              ";
            // line 598
            if (($context["title"] ?? null)) {
                // line 599
                echo "                <h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 599, $this->source), "html", null, true);
                echo "</h4>
              ";
            }
            // line 601
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 601, $this->source), "html", null, true);
            echo "

              ";
            // line 603
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 603, $this->source), "html", null, true);
            echo "

              ";
            // line 605
            if (($context["action_links"] ?? null)) {
                // line 606
                echo "                <nav class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 606, $this->source), "html", null, true);
                echo "</nav>
              ";
            }
            // line 608
            echo "
              ";
            // line 609
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
            echo "
              ";
            // line 610
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 610, $this->source), "html", null, true);
            echo "
            </div>

            ";
            // line 613
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 613)) {
                // line 614
                echo "              <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 615
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 615), 615, $this->source), "html", null, true);
                echo "
              </aside>
            ";
            }
            // line 618
            echo "
        ";
        } else {
            // line 620
            echo "
          ";
            // line 621
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 621)) {
                // line 622
                echo "            <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 623
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 623), 623, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 626
            echo "    
          <div class=\"content col-lg-";
            // line 627
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 627), 627, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 627), 627, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12\">
            ";
            // line 628
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 628), 628, $this->source), "html", null, true);
            echo "

            ";
            // line 630
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 630, $this->source), "html", null, true);
            echo "

             ";
            // line 632
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 632, $this->source), "html", null, true);
            echo "
              ";
            // line 633
            if (($context["title"] ?? null)) {
                // line 634
                echo "                <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 634, $this->source), "html", null, true);
                echo "</h2>
              ";
            }
            // line 636
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 636, $this->source), "html", null, true);
            echo "

            ";
            // line 638
            if (($context["action_links"] ?? null)) {
                // line 639
                echo "              <nav class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 639, $this->source), "html", null, true);
                echo "</nav>
            ";
            }
            // line 641
            echo "              <div class=\"test_class\">
            ";
            // line 642
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 642), 642, $this->source), "html", null, true);
            echo "
            </div>
            ";
            // line 644
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 644, $this->source), "html", null, true);
            echo "
          </div>

          ";
            // line 647
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 647)) {
                // line 648
                echo "            <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 649
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 649), 649, $this->source), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 652
            echo "        ";
        }
        echo "     
      </div>
    </div>

  ";
        // line 656
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 656)) {
            // line 657
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 659
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 659), 659, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 663
        echo "
  ";
        // line 664
        if (($context["messages"] ?? null)) {
            // line 665
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 667
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 667, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 671
        echo "
  ";
        // line 672
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 672)) {
            // line 673
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 675
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 675), 675, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 679
        echo "
  ";
        // line 680
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "news", [], "any", false, false, true, 680)) {
            // line 681
            echo "  <div class=\"news\">
    <div class=\"news_bg\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          ";
            // line 685
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "news", [], "any", false, false, true, 685), 685, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          ";
            // line 688
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "news_video", [], "any", false, false, true, 688), 688, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 694
        echo "
  ";
        // line 695
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 695) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 695)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 695)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 695))) {
            // line 696
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 698
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 698)) {
                // line 699
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 699) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 699)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 699))) {
                    // line 700
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 701
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 701) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 701))) {
                    // line 702
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 703
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 703) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 703))) {
                    // line 704
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 705
($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 705) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 705))) {
                    // line 706
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 707
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 707) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 707)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 707))) {
                    // line 708
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 710
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 712
                echo "          <div class=\"contentbottom1\">
              ";
                // line 713
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 713), 713, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 717
            echo "
      ";
            // line 718
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 718)) {
                // line 719
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 719) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 719)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 719))) {
                    // line 720
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 721
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 721) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 721))) {
                    // line 722
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 723
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 723) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 723))) {
                    // line 724
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 725
($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 725) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 725))) {
                    // line 726
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 727
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 727) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 727)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 727))) {
                    // line 728
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 730
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 732
                echo "          <div class=\"contentbottom2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 732), 732, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 735
            echo "
      ";
            // line 736
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 736)) {
                // line 737
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 737) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 737)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 737))) {
                    // line 738
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 739
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 739) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 739))) {
                    // line 740
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 741
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 741) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 741))) {
                    // line 742
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 743
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 743) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 743))) {
                    // line 744
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 745
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 745) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 745)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 745))) {
                    // line 746
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 748
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 750
                echo "          <div class=\"contentbottom3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 750), 750, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 753
            echo "
      ";
            // line 754
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 754)) {
                // line 755
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 755) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 755)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 755))) {
                    // line 756
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 757
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 757) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 757))) {
                    // line 758
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 759
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 759) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 759))) {
                    // line 760
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 761
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 761) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 761))) {
                    // line 762
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 763
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 763) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 763)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 763))) {
                    // line 764
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 766
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 768
                echo "          <div class=\"contentbottom4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 768), 768, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 771
            echo "
    </div>
  </div>
";
        }
        // line 775
        echo "
";
        // line 776
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 776) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 776)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 776)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 776))) {
            // line 777
            echo "  <div class=\"trainer\">
    <div class=\"container\">
    <div class=\"row\">
      ";
            // line 780
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 780)) {
                // line 781
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 781) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 781)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 781))) {
                    // line 782
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 783
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 783) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 783))) {
                    // line 784
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 785
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 785) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 785))) {
                    // line 786
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 787
($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 787) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 787))) {
                    // line 788
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 789
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 789) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 789)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 789))) {
                    // line 790
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 792
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 794
                echo "          <div class=\"bottom_line1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 794), 794, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 797
            echo "
      ";
            // line 798
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 798)) {
                // line 799
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 799) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 799)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 799))) {
                    // line 800
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 801
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 801) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 801))) {
                    // line 802
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 803
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 803) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 803))) {
                    // line 804
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 805
($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 805) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 805))) {
                    // line 806
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 807
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 807) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 807)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 807))) {
                    // line 808
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 810
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 812
                echo "          <div class=\"bottom_line2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 812), 812, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 815
            echo "
      ";
            // line 816
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 816)) {
                // line 817
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 817) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 817)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 817))) {
                    // line 818
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 819
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 819) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 819))) {
                    // line 820
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 821
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 821) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 821))) {
                    // line 822
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 823
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 823) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 823))) {
                    // line 824
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 825
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 825) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 825)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 825))) {
                    // line 826
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 828
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 830
                echo "          <div class=\"bottom_line3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 830), 830, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 833
            echo "
      ";
            // line 834
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 834)) {
                // line 835
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 835) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 835)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 835))) {
                    // line 836
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 837
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 837) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 837))) {
                    // line 838
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 839
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 839) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 839))) {
                    // line 840
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 841
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 841) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 841))) {
                    // line 842
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 843
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 843) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 843)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 843))) {
                    // line 844
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 846
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 848
                echo "          <div class=\"bottom_line4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 848), 848, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 851
            echo "      </div>
    </div>
    </div>
";
        }
        // line 855
        echo "
";
        // line 856
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 856) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 856)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 856)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 856))) {
            // line 857
            echo "  <div class=\"team\">
    <div class=\"bg_team\">
    <div class=\"container\">
    <div class=\"row\">
      ";
            // line 861
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 861)) {
                // line 862
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 862) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 862)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 862))) {
                    // line 863
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 864
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 864) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 864))) {
                    // line 865
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 866
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 866) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 866))) {
                    // line 867
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 868
($context["page"] ?? null), "bottom3", [], "any", false, false, true, 868) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 868))) {
                    // line 869
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 870
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 870) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 870)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 870))) {
                    // line 871
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 873
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 875
                echo "          <div class=\"bottom1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 875), 875, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 878
            echo "
      ";
            // line 879
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 879)) {
                // line 880
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 880) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 880)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 880))) {
                    // line 881
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 882
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 882) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 882))) {
                    // line 883
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 884
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 884) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 884))) {
                    // line 885
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 886
($context["page"] ?? null), "bottom3", [], "any", false, false, true, 886) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 886))) {
                    // line 887
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 888
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 888) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 888)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 888))) {
                    // line 889
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 891
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 893
                echo "          <div class=\"bottom2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 893), 893, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 896
            echo "
      ";
            // line 897
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 897)) {
                // line 898
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 898) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 898)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 898))) {
                    // line 899
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 900
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 900) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 900))) {
                    // line 901
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 902
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 902) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 902))) {
                    // line 903
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 904
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 904) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 904))) {
                    // line 905
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 906
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 906) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 906)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 906))) {
                    // line 907
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 909
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 911
                echo "          <div class=\"bottom3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 911), 911, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 914
            echo "
      ";
            // line 915
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 915)) {
                // line 916
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 916) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 916)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 916))) {
                    // line 917
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 918
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 918) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 918))) {
                    // line 919
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 920
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 920) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 920))) {
                    // line 921
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 922
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 922) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 922))) {
                    // line 923
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 924
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 924) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 924)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 924))) {
                    // line 925
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 927
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 929
                echo "          <div class=\"bottom4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 929), 929, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 932
            echo "      </div>
    </div>
  </div>
  </div>
";
        }
        // line 937
        echo "
";
        // line 938
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 938) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 938)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 938)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 938))) {
            // line 939
            echo "  <div class=\"map\">
    <div class=\"map_bg\">
    <div class=\"\">
      ";
            // line 942
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 942)) {
                // line 943
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 943) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 943)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 943))) {
                    // line 944
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 945
($context["page"] ?? null), "last2", [], "any", false, false, true, 945) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 945))) {
                    // line 946
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 947
($context["page"] ?? null), "last2", [], "any", false, false, true, 947) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 947))) {
                    // line 948
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 949
($context["page"] ?? null), "last3", [], "any", false, false, true, 949) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 949))) {
                    // line 950
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 951
($context["page"] ?? null), "last2", [], "any", false, false, true, 951) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 951)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 951))) {
                    // line 952
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 954
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 956
                echo "          <div class=\"last1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 956), 956, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 959
            echo "
      ";
            // line 960
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 960)) {
                // line 961
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 961) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 961)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 961))) {
                    // line 962
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 963
($context["page"] ?? null), "last1", [], "any", false, false, true, 963) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 963))) {
                    // line 964
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 965
($context["page"] ?? null), "last1", [], "any", false, false, true, 965) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 965))) {
                    // line 966
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 967
($context["page"] ?? null), "last3", [], "any", false, false, true, 967) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 967))) {
                    // line 968
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 969
($context["page"] ?? null), "last1", [], "any", false, false, true, 969) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 969)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 969))) {
                    // line 970
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 972
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 974
                echo "          <div class=\"last2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 974), 974, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 977
            echo "
      ";
            // line 978
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 978)) {
                // line 979
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 979) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 979)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 979))) {
                    // line 980
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 981
($context["page"] ?? null), "last1", [], "any", false, false, true, 981) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 981))) {
                    // line 982
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 983
($context["page"] ?? null), "last1", [], "any", false, false, true, 983) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 983))) {
                    // line 984
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 985
($context["page"] ?? null), "last2", [], "any", false, false, true, 985) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 985))) {
                    // line 986
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 987
($context["page"] ?? null), "last1", [], "any", false, false, true, 987) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 987)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 987))) {
                    // line 988
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 990
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 992
                echo "          <div class=\"last3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 992), 992, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 995
            echo "
      ";
            // line 996
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 996)) {
                // line 997
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 997) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 997)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 997))) {
                    // line 998
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 999
($context["page"] ?? null), "last1", [], "any", false, false, true, 999) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 999))) {
                    // line 1000
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1001
($context["page"] ?? null), "last1", [], "any", false, false, true, 1001) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 1001))) {
                    // line 1002
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1003
($context["page"] ?? null), "last2", [], "any", false, false, true, 1003) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 1003))) {
                    // line 1004
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1005
($context["page"] ?? null), "last1", [], "any", false, false, true, 1005) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 1005)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 1005))) {
                    // line 1006
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 1008
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 1010
                echo "          <div class=\"last4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 1010), 1010, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 1013
            echo "    </div>
    </div>
  </div>
";
        }
        // line 1017
        echo "
  ";
        // line 1018
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 1018)) {
            // line 1019
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 1023
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 1023), 1023, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 1029
        echo "
  ";
        // line 1030
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 1030) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 1030)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 1030)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 1030))) {
            // line 1031
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 1035
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 1035), 1035, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 1038
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 1038), 1038, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 1041
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 1041), 1041, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 1044
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 1044), 1044, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 1050
        echo "
  ";
        // line 1051
        if (($context["breadcrumb"] ?? null)) {
            // line 1052
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 1054
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 1054, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 1058
        echo "  <!-- <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>   -->        
</div>
";
        // line 1060
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blog_post", [], "any", false, false, true, 1060)) {
            // line 1061
            echo "  <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
    <div class=\"blog_post\">";
            // line 1062
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blog_post", [], "any", false, false, true, 1062), 1062, $this->source), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 1065
        echo "




";
        // line 1070
        if (($context["is_front"] ?? null)) {
            // line 1071
            echo "  <footer id=\"footer\" class=\"site-footer\" role=\"contentinfo\">
  
    ";
            // line 1073
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1073)) {
                // line 1074
                echo "      <div class=\"container\">
        <div class=\"row\">
          ";
                // line 1076
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1076), 1076, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 1080
            echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
            // line 1084
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1084) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1084)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1084)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1084))) {
                // line 1085
                echo "          <div class=\"site-footer__top clearfix\">
            ";
                // line 1086
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1086), 1086, $this->source), "html", null, true);
                echo "
            ";
                // line 1087
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1087), 1087, $this->source), "html", null, true);
                echo "
            ";
                // line 1088
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1088), 1088, $this->source), "html", null, true);
                echo "
            ";
                // line 1089
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1089), 1089, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 1092
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1092)) {
                // line 1093
                echo "          <div class=\"site-footer__bottom\">
            ";
                // line 1094
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1094), 1094, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 1097
            echo "        </div>
      </div>
    </div>

    ";
            // line 1101
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1101) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1101)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1101)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1101))) {
                // line 1102
                echo "      <div class=\"container\">
        <div class=\"row\">
          ";
                // line 1104
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1104)) {
                    // line 1105
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1105) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1105)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1105))) {
                        // line 1106
                        echo "              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1107
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1107) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1107))) {
                        // line 1108
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1109
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1109) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1109))) {
                        // line 1110
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1111
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1111) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1111))) {
                        // line 1112
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1113
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1113) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1113)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1113))) {
                        // line 1114
                        echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                    } else {
                        // line 1116
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1118
                    echo "              <div class=\"footer1\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1118), 1118, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1121
                echo "
          ";
                // line 1122
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1122)) {
                    // line 1123
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1123) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1123)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1123))) {
                        // line 1124
                        echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1125
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1125) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1125))) {
                        // line 1126
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1127
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1127) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1127))) {
                        // line 1128
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1129
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1129) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1129))) {
                        // line 1130
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1131
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1131) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1131)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1131))) {
                        // line 1132
                        echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                    } else {
                        // line 1134
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1136
                    echo "              <div class=\"footer2\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1136), 1136, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1139
                echo "
          ";
                // line 1140
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1140)) {
                    // line 1141
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1141) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1141)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1141))) {
                        // line 1142
                        echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1143
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1143) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1143))) {
                        // line 1144
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1145
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1145) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1145))) {
                        // line 1146
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1147
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1147) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1147))) {
                        // line 1148
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1149
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1149) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1149)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1149))) {
                        // line 1150
                        echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                    } else {
                        // line 1152
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1154
                    echo "              <div class=\"footer3\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1154), 1154, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1157
                echo "
          ";
                // line 1158
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1158)) {
                    // line 1159
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1159) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1159)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1159))) {
                        // line 1160
                        echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1161
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1161) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1161))) {
                        // line 1162
                        echo "                <div class=\"col-lg-4\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1163
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1163) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1163))) {
                        // line 1164
                        echo "                <div class=\"col-lg-4\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1165
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1165) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1165))) {
                        // line 1166
                        echo "                <div class=\"col-lg-4\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1167
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1167) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1167)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1167))) {
                        // line 1168
                        echo "                <div class=\"col-lg-6\">
              ";
                    } else {
                        // line 1170
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1172
                    echo "              <div class=\"footer4\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1172), 1172, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1175
                echo "
          </div>

        ";
            }
            // line 1179
            echo "        ";
            if (($context["show_hide_copyright"] ?? null)) {
                // line 1180
                echo "                  <div class=\"copyright\">
                      <a href=\"";
                // line 1181
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_url"] ?? null), 1181, $this->source), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 1182
                echo t("Copyright @copyright_date @copyright_developedby", array("@copyright_date" =>                 // line 1183
($context["copyright_date"] ?? null), "@copyright_developedby" => ($context["copyright_developedby"] ?? null), ));
                // line 1185
                echo "                      </a>
                  </div>
                ";
            }
            // line 1188
            echo "        </div>

        <!-- <div class=\"bottom_footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"footer_logo\">
                  ";
            // line 1195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 1195), 1195, $this->source), "html", null, true);
            echo "
                </div>

                ";
            // line 1198
            if (($context["show_hide_icon"] ?? null)) {
                // line 1199
                echo "                  <div class=\"socBox\">
                    <ul class=\"socIcons\">
                        ";
                // line 1201
                $context["soc"] = ["fa-twitter" =>                 // line 1202
($context["twitter"] ?? null), "fa-facebook" =>                 // line 1203
($context["facebook"] ?? null), "fa-flickr" =>                 // line 1204
($context["flickr"] ?? null), "fa-linkedin" =>                 // line 1205
($context["linkedin"] ?? null), "fa-play" =>                 // line 1206
($context["youtube"] ?? null), "fa-pinterest" =>                 // line 1207
($context["pinterest"] ?? null), "fa-google-plus" =>                 // line 1208
($context["google"] ?? null), "fa-dribbble" =>                 // line 1209
($context["dribbble"] ?? null), "fa-vimeo-square" =>                 // line 1210
($context["vimeo"] ?? null), "fa-instagram" =>                 // line 1211
($context["instagram"] ?? null), "fa-vk" =>                 // line 1212
($context["vk"] ?? null)];
                // line 1214
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 1215
                    echo "                        ";
                    if ($context["value"]) {
                        // line 1216
                        echo "                        <li>
                            <a href=\"";
                        // line 1217
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 1217, $this->source), "html", null, true);
                        echo "\" target=\"_blank\">
                                <i class=\"fa ";
                        // line 1218
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 1218, $this->source), "html", null, true);
                        echo "\"></i>
                            </a>
                        </li>
                        ";
                    }
                    // line 1222
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1223
                echo "                    </ul>
                  </div>
                ";
            }
            // line 1226
            echo "
                
                </div>
              
              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <div class=\"switchButton\">
                    <span class=\"bt-blue scrollup\"></span>
                    <span class=\"bt-lghtGre scrollup\"></span>
                    <span class=\"bt-orange scrollup\"></span>
                    <span class=\"bt-red scrollup\"></span>
                    <span class=\"bt-green scrollup\"></span>
                </div>
              </div>
          </div>
        </div>
        </div> -->

  </footer>
";
        } else {
            // line 1245
            echo "  <footer id=\"footer\" class=\"site-footer two\" role=\"contentinfo\">
  
    ";
            // line 1247
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1247)) {
                // line 1248
                echo "      <div class=\"container\">
        <div class=\"row\">
          ";
                // line 1250
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1250), 1250, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 1254
            echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
            // line 1258
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1258) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1258)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1258)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1258))) {
                // line 1259
                echo "          <div class=\"site-footer__top clearfix\">
            ";
                // line 1260
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1260), 1260, $this->source), "html", null, true);
                echo "
            ";
                // line 1261
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1261), 1261, $this->source), "html", null, true);
                echo "
            ";
                // line 1262
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1262), 1262, $this->source), "html", null, true);
                echo "
            ";
                // line 1263
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1263), 1263, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 1266
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1266)) {
                // line 1267
                echo "          <div class=\"site-footer__bottom\">
            ";
                // line 1268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1268), 1268, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 1271
            echo "        </div>
      </div>
    </div>

    ";
            // line 1275
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1275) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1275)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1275)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1275))) {
                // line 1276
                echo "      <div class=\"container\">
        <div class=\"row\">
          ";
                // line 1278
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1278)) {
                    // line 1279
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1279) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1279)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1279))) {
                        // line 1280
                        echo "              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1281
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1281) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1281))) {
                        // line 1282
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1283
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1283) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1283))) {
                        // line 1284
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1285
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1285) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1285))) {
                        // line 1286
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1287
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1287) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1287)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1287))) {
                        // line 1288
                        echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                    } else {
                        // line 1290
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1292
                    echo "              <div class=\"footer1\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1292), 1292, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1295
                echo "
          ";
                // line 1296
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1296)) {
                    // line 1297
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1297) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1297)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1297))) {
                        // line 1298
                        echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1299
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1299) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1299))) {
                        // line 1300
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1301
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1301) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1301))) {
                        // line 1302
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1303
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1303) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1303))) {
                        // line 1304
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1305
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1305) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1305)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1305))) {
                        // line 1306
                        echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                    } else {
                        // line 1308
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1310
                    echo "              <div class=\"footer2\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1310), 1310, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1313
                echo "
          ";
                // line 1314
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1314)) {
                    // line 1315
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1315) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1315)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1315))) {
                        // line 1316
                        echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1317
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1317) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1317))) {
                        // line 1318
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1319
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1319) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1319))) {
                        // line 1320
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1321
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1321) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1321))) {
                        // line 1322
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1323
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1323) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1323)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1323))) {
                        // line 1324
                        echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                    } else {
                        // line 1326
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1328
                    echo "              <div class=\"footer3\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1328), 1328, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1331
                echo "
          ";
                // line 1332
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1332)) {
                    // line 1333
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1333) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1333)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1333))) {
                        // line 1334
                        echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1335
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1335) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1335))) {
                        // line 1336
                        echo "                <div class=\"col-lg-4\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1337
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1337) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1337))) {
                        // line 1338
                        echo "                <div class=\"col-lg-4\">
              ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 1339
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1339) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1339))) {
                        // line 1340
                        echo "                <div class=\"col-lg-4\">
              ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 1341
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1341) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1341)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1341))) {
                        // line 1342
                        echo "                <div class=\"col-lg-6\">
              ";
                    } else {
                        // line 1344
                        echo "                <div class=\"col-lg-12\">
            ";
                    }
                    // line 1346
                    echo "              <div class=\"footer4\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1346), 1346, $this->source), "html", null, true);
                    echo "</div>
            </div>
          ";
                }
                // line 1349
                echo "
          </div>

        ";
            }
            // line 1353
            echo "        </div>

         ";
            // line 1355
            if (($context["show_hide_copyright"] ?? null)) {
                // line 1356
                echo "                  <div class=\"copyright\">
                      <a href=\"";
                // line 1357
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_url"] ?? null), 1357, $this->source), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 1358
                echo t("Copyright @copyright_date @copyright_developedby", array("@copyright_date" =>                 // line 1359
($context["copyright_date"] ?? null), "@copyright_developedby" => ($context["copyright_developedby"] ?? null), ));
                // line 1361
                echo "                      </a>
                  </div>
                ";
            }
            // line 1364
            echo "
        <!-- <div class=\"bottom_footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"footer_logo\">
                  ";
            // line 1370
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 1370), 1370, $this->source), "html", null, true);
            echo "
                </div>

                

               
                </div>
              
              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <div class=\"switchButton\">
                    <span class=\"bt-blue scrollup\"></span>
                    <span class=\"bt-lghtGre scrollup\"></span>
                    <span class=\"bt-orange scrollup\"></span>
                    <span class=\"bt-red scrollup\"></span>
                    <span class=\"bt-green scrollup\"></span>
                </div>
              </div>
          </div>
        </div>
        </div> -->
  </footer>
";
        }
        // line 1392
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/used_cars/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3025 => 1392,  3000 => 1370,  2992 => 1364,  2987 => 1361,  2985 => 1359,  2984 => 1358,  2980 => 1357,  2977 => 1356,  2975 => 1355,  2971 => 1353,  2965 => 1349,  2958 => 1346,  2954 => 1344,  2950 => 1342,  2948 => 1341,  2945 => 1340,  2943 => 1339,  2940 => 1338,  2938 => 1337,  2935 => 1336,  2933 => 1335,  2930 => 1334,  2927 => 1333,  2925 => 1332,  2922 => 1331,  2915 => 1328,  2911 => 1326,  2907 => 1324,  2905 => 1323,  2902 => 1322,  2900 => 1321,  2897 => 1320,  2895 => 1319,  2892 => 1318,  2890 => 1317,  2887 => 1316,  2884 => 1315,  2882 => 1314,  2879 => 1313,  2872 => 1310,  2868 => 1308,  2864 => 1306,  2862 => 1305,  2859 => 1304,  2857 => 1303,  2854 => 1302,  2852 => 1301,  2849 => 1300,  2847 => 1299,  2844 => 1298,  2841 => 1297,  2839 => 1296,  2836 => 1295,  2829 => 1292,  2825 => 1290,  2821 => 1288,  2819 => 1287,  2816 => 1286,  2814 => 1285,  2811 => 1284,  2809 => 1283,  2806 => 1282,  2804 => 1281,  2801 => 1280,  2798 => 1279,  2796 => 1278,  2792 => 1276,  2790 => 1275,  2784 => 1271,  2778 => 1268,  2775 => 1267,  2772 => 1266,  2766 => 1263,  2762 => 1262,  2758 => 1261,  2754 => 1260,  2751 => 1259,  2749 => 1258,  2743 => 1254,  2736 => 1250,  2732 => 1248,  2730 => 1247,  2726 => 1245,  2705 => 1226,  2700 => 1223,  2694 => 1222,  2687 => 1218,  2683 => 1217,  2680 => 1216,  2677 => 1215,  2672 => 1214,  2670 => 1212,  2669 => 1211,  2668 => 1210,  2667 => 1209,  2666 => 1208,  2665 => 1207,  2664 => 1206,  2663 => 1205,  2662 => 1204,  2661 => 1203,  2660 => 1202,  2659 => 1201,  2655 => 1199,  2653 => 1198,  2647 => 1195,  2638 => 1188,  2633 => 1185,  2631 => 1183,  2630 => 1182,  2626 => 1181,  2623 => 1180,  2620 => 1179,  2614 => 1175,  2607 => 1172,  2603 => 1170,  2599 => 1168,  2597 => 1167,  2594 => 1166,  2592 => 1165,  2589 => 1164,  2587 => 1163,  2584 => 1162,  2582 => 1161,  2579 => 1160,  2576 => 1159,  2574 => 1158,  2571 => 1157,  2564 => 1154,  2560 => 1152,  2556 => 1150,  2554 => 1149,  2551 => 1148,  2549 => 1147,  2546 => 1146,  2544 => 1145,  2541 => 1144,  2539 => 1143,  2536 => 1142,  2533 => 1141,  2531 => 1140,  2528 => 1139,  2521 => 1136,  2517 => 1134,  2513 => 1132,  2511 => 1131,  2508 => 1130,  2506 => 1129,  2503 => 1128,  2501 => 1127,  2498 => 1126,  2496 => 1125,  2493 => 1124,  2490 => 1123,  2488 => 1122,  2485 => 1121,  2478 => 1118,  2474 => 1116,  2470 => 1114,  2468 => 1113,  2465 => 1112,  2463 => 1111,  2460 => 1110,  2458 => 1109,  2455 => 1108,  2453 => 1107,  2450 => 1106,  2447 => 1105,  2445 => 1104,  2441 => 1102,  2439 => 1101,  2433 => 1097,  2427 => 1094,  2424 => 1093,  2421 => 1092,  2415 => 1089,  2411 => 1088,  2407 => 1087,  2403 => 1086,  2400 => 1085,  2398 => 1084,  2392 => 1080,  2385 => 1076,  2381 => 1074,  2379 => 1073,  2375 => 1071,  2373 => 1070,  2366 => 1065,  2360 => 1062,  2357 => 1061,  2355 => 1060,  2351 => 1058,  2344 => 1054,  2340 => 1052,  2338 => 1051,  2335 => 1050,  2326 => 1044,  2320 => 1041,  2314 => 1038,  2308 => 1035,  2302 => 1031,  2300 => 1030,  2297 => 1029,  2288 => 1023,  2282 => 1019,  2280 => 1018,  2277 => 1017,  2271 => 1013,  2264 => 1010,  2260 => 1008,  2256 => 1006,  2254 => 1005,  2251 => 1004,  2249 => 1003,  2246 => 1002,  2244 => 1001,  2241 => 1000,  2239 => 999,  2236 => 998,  2233 => 997,  2231 => 996,  2228 => 995,  2221 => 992,  2217 => 990,  2213 => 988,  2211 => 987,  2208 => 986,  2206 => 985,  2203 => 984,  2201 => 983,  2198 => 982,  2196 => 981,  2193 => 980,  2190 => 979,  2188 => 978,  2185 => 977,  2178 => 974,  2174 => 972,  2170 => 970,  2168 => 969,  2165 => 968,  2163 => 967,  2160 => 966,  2158 => 965,  2155 => 964,  2153 => 963,  2150 => 962,  2147 => 961,  2145 => 960,  2142 => 959,  2135 => 956,  2131 => 954,  2127 => 952,  2125 => 951,  2122 => 950,  2120 => 949,  2117 => 948,  2115 => 947,  2112 => 946,  2110 => 945,  2107 => 944,  2104 => 943,  2102 => 942,  2097 => 939,  2095 => 938,  2092 => 937,  2085 => 932,  2078 => 929,  2074 => 927,  2070 => 925,  2068 => 924,  2065 => 923,  2063 => 922,  2060 => 921,  2058 => 920,  2055 => 919,  2053 => 918,  2050 => 917,  2047 => 916,  2045 => 915,  2042 => 914,  2035 => 911,  2031 => 909,  2027 => 907,  2025 => 906,  2022 => 905,  2020 => 904,  2017 => 903,  2015 => 902,  2012 => 901,  2010 => 900,  2007 => 899,  2004 => 898,  2002 => 897,  1999 => 896,  1992 => 893,  1988 => 891,  1984 => 889,  1982 => 888,  1979 => 887,  1977 => 886,  1974 => 885,  1972 => 884,  1969 => 883,  1967 => 882,  1964 => 881,  1961 => 880,  1959 => 879,  1956 => 878,  1949 => 875,  1945 => 873,  1941 => 871,  1939 => 870,  1936 => 869,  1934 => 868,  1931 => 867,  1929 => 866,  1926 => 865,  1924 => 864,  1921 => 863,  1918 => 862,  1916 => 861,  1910 => 857,  1908 => 856,  1905 => 855,  1899 => 851,  1892 => 848,  1888 => 846,  1884 => 844,  1882 => 843,  1879 => 842,  1877 => 841,  1874 => 840,  1872 => 839,  1869 => 838,  1867 => 837,  1864 => 836,  1861 => 835,  1859 => 834,  1856 => 833,  1849 => 830,  1845 => 828,  1841 => 826,  1839 => 825,  1836 => 824,  1834 => 823,  1831 => 822,  1829 => 821,  1826 => 820,  1824 => 819,  1821 => 818,  1818 => 817,  1816 => 816,  1813 => 815,  1806 => 812,  1802 => 810,  1798 => 808,  1796 => 807,  1793 => 806,  1791 => 805,  1788 => 804,  1786 => 803,  1783 => 802,  1781 => 801,  1778 => 800,  1775 => 799,  1773 => 798,  1770 => 797,  1763 => 794,  1759 => 792,  1755 => 790,  1753 => 789,  1750 => 788,  1748 => 787,  1745 => 786,  1743 => 785,  1740 => 784,  1738 => 783,  1735 => 782,  1732 => 781,  1730 => 780,  1725 => 777,  1723 => 776,  1720 => 775,  1714 => 771,  1707 => 768,  1703 => 766,  1699 => 764,  1697 => 763,  1694 => 762,  1692 => 761,  1689 => 760,  1687 => 759,  1684 => 758,  1682 => 757,  1679 => 756,  1676 => 755,  1674 => 754,  1671 => 753,  1664 => 750,  1660 => 748,  1656 => 746,  1654 => 745,  1651 => 744,  1649 => 743,  1646 => 742,  1644 => 741,  1641 => 740,  1639 => 739,  1636 => 738,  1633 => 737,  1631 => 736,  1628 => 735,  1621 => 732,  1617 => 730,  1613 => 728,  1611 => 727,  1608 => 726,  1606 => 725,  1603 => 724,  1601 => 723,  1598 => 722,  1596 => 721,  1593 => 720,  1590 => 719,  1588 => 718,  1585 => 717,  1578 => 713,  1575 => 712,  1571 => 710,  1567 => 708,  1565 => 707,  1562 => 706,  1560 => 705,  1557 => 704,  1555 => 703,  1552 => 702,  1550 => 701,  1547 => 700,  1544 => 699,  1542 => 698,  1538 => 696,  1536 => 695,  1533 => 694,  1524 => 688,  1518 => 685,  1512 => 681,  1510 => 680,  1507 => 679,  1500 => 675,  1496 => 673,  1494 => 672,  1491 => 671,  1484 => 667,  1480 => 665,  1478 => 664,  1475 => 663,  1468 => 659,  1464 => 657,  1462 => 656,  1454 => 652,  1448 => 649,  1445 => 648,  1443 => 647,  1437 => 644,  1432 => 642,  1429 => 641,  1423 => 639,  1421 => 638,  1415 => 636,  1409 => 634,  1407 => 633,  1403 => 632,  1398 => 630,  1393 => 628,  1387 => 627,  1384 => 626,  1378 => 623,  1375 => 622,  1373 => 621,  1370 => 620,  1366 => 618,  1360 => 615,  1357 => 614,  1355 => 613,  1349 => 610,  1345 => 609,  1342 => 608,  1336 => 606,  1334 => 605,  1329 => 603,  1323 => 601,  1317 => 599,  1315 => 598,  1311 => 597,  1306 => 595,  1300 => 594,  1297 => 593,  1291 => 590,  1288 => 589,  1286 => 588,  1283 => 587,  1281 => 586,  1271 => 578,  1265 => 574,  1258 => 571,  1254 => 569,  1250 => 567,  1248 => 566,  1245 => 565,  1243 => 564,  1240 => 563,  1238 => 562,  1235 => 561,  1233 => 560,  1230 => 559,  1227 => 558,  1225 => 557,  1222 => 556,  1215 => 553,  1211 => 551,  1207 => 549,  1205 => 548,  1202 => 547,  1200 => 546,  1197 => 545,  1195 => 544,  1192 => 543,  1190 => 542,  1187 => 541,  1184 => 540,  1182 => 539,  1179 => 538,  1172 => 535,  1168 => 533,  1164 => 531,  1162 => 530,  1159 => 529,  1157 => 528,  1154 => 527,  1152 => 526,  1149 => 525,  1147 => 524,  1144 => 523,  1141 => 522,  1139 => 521,  1136 => 520,  1129 => 517,  1125 => 515,  1121 => 513,  1119 => 512,  1116 => 511,  1114 => 510,  1111 => 509,  1109 => 508,  1106 => 507,  1104 => 506,  1101 => 505,  1098 => 504,  1096 => 503,  1092 => 501,  1090 => 500,  1087 => 499,  1081 => 495,  1074 => 492,  1070 => 490,  1066 => 488,  1064 => 487,  1061 => 486,  1059 => 485,  1056 => 484,  1054 => 483,  1051 => 482,  1049 => 481,  1046 => 480,  1043 => 479,  1041 => 478,  1038 => 477,  1031 => 474,  1027 => 472,  1023 => 470,  1021 => 469,  1018 => 468,  1016 => 467,  1013 => 466,  1011 => 465,  1008 => 464,  1006 => 463,  1003 => 462,  1000 => 461,  998 => 460,  995 => 459,  988 => 456,  984 => 454,  980 => 452,  978 => 451,  975 => 450,  973 => 449,  970 => 448,  968 => 447,  965 => 446,  963 => 445,  960 => 444,  957 => 443,  955 => 442,  952 => 441,  945 => 438,  941 => 436,  937 => 434,  935 => 433,  932 => 432,  930 => 431,  927 => 430,  925 => 429,  922 => 428,  920 => 427,  917 => 426,  914 => 425,  912 => 424,  907 => 421,  905 => 420,  902 => 419,  894 => 414,  889 => 411,  887 => 410,  884 => 409,  878 => 405,  871 => 402,  867 => 400,  863 => 398,  861 => 397,  858 => 396,  856 => 395,  853 => 394,  851 => 393,  848 => 392,  846 => 391,  843 => 390,  840 => 389,  838 => 388,  835 => 387,  828 => 384,  824 => 382,  820 => 380,  818 => 379,  815 => 378,  813 => 377,  810 => 376,  808 => 375,  805 => 374,  803 => 373,  800 => 372,  797 => 371,  795 => 370,  791 => 368,  784 => 366,  780 => 364,  776 => 362,  774 => 361,  771 => 360,  769 => 359,  766 => 358,  764 => 357,  761 => 356,  759 => 355,  756 => 354,  753 => 353,  751 => 352,  748 => 351,  741 => 348,  737 => 346,  733 => 344,  731 => 343,  728 => 342,  726 => 341,  723 => 340,  721 => 339,  718 => 338,  716 => 337,  713 => 336,  710 => 335,  708 => 334,  704 => 332,  702 => 331,  699 => 330,  691 => 325,  686 => 322,  684 => 321,  681 => 320,  675 => 316,  668 => 313,  664 => 311,  660 => 309,  658 => 308,  655 => 307,  653 => 306,  650 => 305,  648 => 304,  645 => 303,  643 => 302,  640 => 301,  637 => 300,  635 => 299,  632 => 298,  625 => 295,  621 => 293,  617 => 291,  615 => 290,  612 => 289,  610 => 288,  607 => 287,  605 => 286,  602 => 285,  600 => 284,  597 => 283,  594 => 282,  592 => 281,  588 => 279,  581 => 277,  577 => 275,  573 => 273,  571 => 272,  568 => 271,  566 => 270,  563 => 269,  561 => 268,  558 => 267,  556 => 266,  553 => 265,  550 => 264,  548 => 263,  545 => 262,  538 => 259,  534 => 257,  530 => 255,  528 => 254,  525 => 253,  523 => 252,  520 => 251,  518 => 250,  515 => 249,  513 => 248,  510 => 247,  507 => 246,  505 => 245,  500 => 242,  498 => 241,  494 => 239,  487 => 235,  483 => 233,  481 => 232,  476 => 229,  471 => 226,  464 => 222,  460 => 220,  458 => 219,  453 => 217,  450 => 216,  443 => 212,  439 => 210,  437 => 209,  433 => 207,  426 => 203,  422 => 201,  420 => 200,  416 => 198,  414 => 197,  400 => 185,  395 => 182,  389 => 180,  386 => 179,  376 => 176,  365 => 172,  362 => 171,  359 => 170,  355 => 167,  353 => 166,  348 => 163,  341 => 158,  334 => 155,  330 => 153,  326 => 151,  324 => 150,  321 => 149,  319 => 148,  316 => 147,  314 => 146,  311 => 145,  309 => 144,  306 => 143,  303 => 142,  301 => 141,  298 => 140,  291 => 137,  287 => 135,  283 => 133,  281 => 132,  278 => 131,  276 => 130,  273 => 129,  271 => 128,  268 => 127,  266 => 126,  263 => 125,  260 => 124,  258 => 123,  255 => 122,  248 => 119,  244 => 117,  240 => 115,  238 => 114,  235 => 113,  233 => 112,  230 => 111,  228 => 110,  225 => 109,  223 => 108,  220 => 107,  217 => 106,  215 => 105,  212 => 104,  206 => 101,  203 => 100,  198 => 97,  194 => 95,  192 => 94,  189 => 93,  187 => 92,  184 => 91,  182 => 90,  179 => 89,  177 => 88,  174 => 87,  171 => 86,  169 => 85,  163 => 81,  161 => 80,  158 => 79,  156 => 78,  145 => 70,  132 => 60,  120 => 50,  115 => 47,  109 => 46,  102 => 42,  98 => 41,  95 => 40,  92 => 39,  87 => 38,  85 => 36,  84 => 35,  83 => 34,  82 => 33,  81 => 32,  80 => 31,  79 => 30,  78 => 29,  77 => 28,  76 => 27,  75 => 26,  74 => 25,  70 => 23,  68 => 22,  62 => 19,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/used_cars/templates/page.html.twig", "D:\\Wordpress\\XAMPP\\htdocs\\drupal\\themes\\used_cars\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "set" => 25, "for" => 38, "trans" => 1182);
        static $filters = array("escape" => 15, "t" => 172);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'trans'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
