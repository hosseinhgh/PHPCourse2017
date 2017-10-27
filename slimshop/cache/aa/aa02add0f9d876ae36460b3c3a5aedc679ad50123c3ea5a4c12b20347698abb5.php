<?php

/* register_success.html.twig */
class __TwigTemplate_d8e689d7e3d1ff603e948ff45d7e270b5e1b17cb63c7e7e6a338037012b0f041 extends Twig_Template
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
