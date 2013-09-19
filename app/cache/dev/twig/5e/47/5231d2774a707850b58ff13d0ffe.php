<?php

/* BundleProjectBundle:Error:errorPage.html.twig */
class __TwigTemplate_5e475231d2774a707850b58ff13d0ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BundleProjectBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BundleProjectBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Error 404 ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <article>
        <hgroup>
            <h1>Error page</h1>
            <h2>Error message</h2>
        </hgroup>
        
        <p>error - 404 not found<p>   
    </article>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Error:errorPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,);
    }
}
