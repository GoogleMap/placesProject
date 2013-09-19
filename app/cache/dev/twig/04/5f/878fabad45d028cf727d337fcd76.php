<?php

/* BundleProjectBundle:Page:index.html.twig */
class __TwigTemplate_045f878fabad45d028cf727d337fcd76 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Index ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article>
        <hgroup>
            <h1>Places App</h1>
            <h2>Restaurants, Coffe Shops & more.</h2>
        </hgroup>
        
       <p>acticle content</p>
    </article>

    <article>
        <hgroup>
            <h1>Places App</h1>
            <h2>Restaurants, Coffe Shops & more.</h2>
        </hgroup>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 3,);
    }
}
