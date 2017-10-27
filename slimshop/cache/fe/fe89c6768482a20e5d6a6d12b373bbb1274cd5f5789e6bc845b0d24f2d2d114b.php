<?php

/* login_success.html.twig */
class __TwigTemplate_5ade8803024902265c60f027c0136f118aefc19a72ca24df8fe33ec51a349b25 extends Twig_Template
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
<p>Login successful, <a href=\"/\">click to continue</a>.</p>

";
    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
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
<p>Login successful, <a href=\"/\">click to continue</a>.</p>

", "login_success.html.twig", "C:\\xampp\\htdocs\\ipd\\slimshop\\templates\\login_success.html.twig");
    }
}
