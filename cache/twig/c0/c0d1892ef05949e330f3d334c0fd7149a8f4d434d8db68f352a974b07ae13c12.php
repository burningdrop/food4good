<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/logo.html.twig */
class __TwigTemplate_8131625c7bcb700c0a5e83990310ad91e6d62f3a4d81f957e007d0340772a64f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" class=\"navbar-brand mr-10\" style=\"font-size: 1.4rem; font-weight: 700; color: #2d6a4f; text-decoration: none; letter-spacing: -0.02em;\">
  Food 4 Good
</a>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\" style=\"font-size: 1.4rem; font-weight: 700; color: #2d6a4f; text-decoration: none; letter-spacing: -0.02em;\">
  Food 4 Good
</a>
", "partials/logo.html.twig", "/var/www/food4good/user/themes/quark/templates/partials/logo.html.twig");
    }
}
