<?php

/* BundleProjectBundle::layout.html.twig */
class __TwigTemplate_d109c34cc71f480e909668be97fb225e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BundleProjectBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BundleProjectBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "    
    <div class=\"sideDiv\">
        <h1 class=\"sideHeader\">Search Box<h1>
        <p>Query the site</p>
     
        <input type=\"text\" name=\"searchBox\" id=\"search\" style=\"padding:3px\" />
        <br />
        <button type=\"submit\" style=\"padding: 5px; border-radius:5px; width:80px\"><b>Search</b></button>
        <br />
    </div>
   <div class=\"sideDiv\">
        <h1 class=\"sideHeader\">Sidebar<h1>
        <h2>Sidebar<h2>
        <p>sidebar content</p>
        <p>sidebar content</p>
        <br />
   </div>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  38 => 14,  32 => 8,  29 => 7,  165 => 72,  162 => 71,  147 => 58,  142 => 55,  139 => 54,  131 => 42,  128 => 41,  120 => 35,  113 => 33,  109 => 31,  103 => 29,  101 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  77 => 21,  71 => 20,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  46 => 11,  40 => 7,  37 => 6,  31 => 4,);
    }
}
