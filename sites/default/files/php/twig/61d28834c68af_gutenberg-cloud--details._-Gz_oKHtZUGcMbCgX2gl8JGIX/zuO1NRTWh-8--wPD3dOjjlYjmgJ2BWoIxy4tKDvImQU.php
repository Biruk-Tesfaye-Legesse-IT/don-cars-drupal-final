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

/* modules/gutenberg/modules/gutenberg_cloud/templates/gutenberg-cloud--details.html.twig */
class __TwigTemplate_f1fe722c9d60151a29abd9c8a21fac6e55775ef14fc07953754a5866d145eed9 extends \Twig\Template
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
        $context["base_class"] = "gutenberg-cloud-details";
        // line 2
        echo "
<div class=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null), 3, $this->source), "html", null, true);
        echo "\">
  <div class=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null), 4, $this->source), "html", null, true);
        echo "__picture\">
    <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["picture"] ?? null), 5, $this->source), "html", null, true);
        echo "\" />
  </div>
  <div class=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null), 7, $this->source), "html", null, true);
        echo "__info\">
    <div class=\"heading\">
      <h2>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 9, $this->source), "html", null, true);
        echo "</h2> Version: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["version"] ?? null), 9, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 11
        if (($context["author"] ?? null)) {
            // line 12
            echo "      <div class=\"author\">
        ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            echo " <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_url"] ?? null), 13, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 13, $this->source), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 16
        echo "    <div class=\"details\">
      ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 17, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 19
        if (($context["tags"] ?? null)) {
            // line 20
            echo "      <div class=\"tags\">
        <strong>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tags"));
            echo ":</strong> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["tags"] ?? null), 21, $this->source), ", "), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 24
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/gutenberg/modules/gutenberg_cloud/templates/gutenberg-cloud--details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  97 => 21,  94 => 20,  92 => 19,  87 => 17,  84 => 16,  74 => 13,  71 => 12,  69 => 11,  62 => 9,  57 => 7,  52 => 5,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/gutenberg/modules/gutenberg_cloud/templates/gutenberg-cloud--details.html.twig", "D:\\Wordpress\\XAMPP\\htdocs\\drupal\\modules\\gutenberg\\modules\\gutenberg_cloud\\templates\\gutenberg-cloud--details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11);
        static $filters = array("escape" => 3, "t" => 13, "join" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't', 'join'],
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
