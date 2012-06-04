<?php

/* EDiffAdminBundle:Default:index.html.twig */
class __TwigTemplate_f944b35eccf8b15d40bb30605ccfd6c2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "EDiffAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
