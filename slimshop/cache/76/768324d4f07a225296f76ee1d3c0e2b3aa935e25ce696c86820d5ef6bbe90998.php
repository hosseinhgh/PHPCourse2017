<?php

/* register_success.html.twig */
class __TwigTemplate_34b01a4b296215eaa968781f694b1e2432af84c3da2d3b86fd3fbb68b896e51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<p>You've been registered. You may now <a href=\"/login\">login</a>.
";
    }

    public function getTemplateName()
    {
        return "register_success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<p>You've been registered. You may now <a href=\"/login\">login</a>.
", "register_success.html.twig", "C:\\xampp\\htdocs\\ipd\\slimshop\\templates\\register_success.html.twig");
    }
}
