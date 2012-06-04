<?php

/* EDiffAdminBundle:Default:index.html.twig */
class __TwigTemplate_f944b35eccf8b15d40bb30605ccfd6c2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<body>
Hello ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
</body>
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
