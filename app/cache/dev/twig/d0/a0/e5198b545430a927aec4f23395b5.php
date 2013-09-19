<?php

/* BundleProjectBundle::base.html.twig */
class __TwigTemplate_d0a0e5198b545430a927aec4f23395b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>Project | ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "            
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/js/navigation.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/js/jquery.js"), "html", null, true);
        echo "\"></script>
    </head>
    
    <body>
        <div id=\"main_box\">
            
            <header id=\"the_header\">
                <!-- <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/logo.gif"), "html", null, true);
        echo "\" /> -->
                <h1><big><strong> Places App | Restaurants | Cafe Shop | </strong></big></h1>
                <br />
                <br />
            </header>
            <div id=\"flex_div\">
            
            ";
        // line 28
        $this->displayBlock('navigation', $context, $blocks);
        // line 38
        echo "            
            <section id=\"main_section\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            
            <aside id=\"aside_bar\">
                ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "            </aside>
            </div>
            <footer id=\"the_footer\">
                ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "            </footer>  
        </div>
            
        ";
        // line 73
        $this->displayBlock('javascript', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/css/default.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 28
    public function block_navigation($context, array $blocks = array())
    {
        // line 29
        echo "                <nav id=\"nav_bar\">
                    <ul>
                        <li><p><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("BundleProjectBundle_index");
        echo "\">Home</a></p></li>
                        <li><p><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("BundleProjectBundle_about");
        echo "\">About</a></p></li>
                        <li><p><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("BundleProjectBundle_places");
        echo "\">Places Info</a></p></li>
                        <li><p><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("BundleProjectBundle_about");
        echo "\">Credit</a></p></li> 
                    </ul>
                </nav>
            ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        echo " 
                    <p class=\"credit\">&copy Penatalog Cluj-Napoca 2013.</p>
                    <p class=\"credit\">&copy Team: Ramona P. , Alin M. & others.</p>
                    
                    ";
        // line 53
        echo "                    ";
        if (array_key_exists("userIp", $context)) {
            // line 54
            echo "                        <p>Addr: ";
            echo twig_escape_filter($this->env, (isset($context["userIp"]) ? $context["userIp"] : $this->getContext($context, "userIp")), "html", null, true);
            echo "</p>
                    ";
        }
        // line 56
        echo "                        
                    ";
        // line 57
        if (array_key_exists("userSiteHits", $context)) {
            // line 58
            echo "                        <p>You visit this site <b>";
            echo twig_escape_filter($this->env, (isset($context["userSiteHits"]) ? $context["userSiteHits"] : $this->getContext($context, "userSiteHits")), "html", null, true);
            echo "</b> time(s).</p>
                    ";
        }
        // line 60
        echo "                        ";
        if (array_key_exists("browserName", $context)) {
            // line 61
            echo "                            ";
            if (array_key_exists("browserVers", $context)) {
                // line 62
                echo "                                <p>Browser Name: ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["browserName"]) ? $context["browserName"] : $this->getContext($context, "browserName"))), "html", null, true);
                echo " <b>v.</b> ";
                echo twig_escape_filter($this->env, (isset($context["browserVers"]) ? $context["browserVers"] : $this->getContext($context, "browserVers")), "html", null, true);
                echo " </p>
                            ";
            }
            // line 64
            echo "                    ";
        }
        // line 65
        echo "                                
                    ";
        // line 66
        if (array_key_exists("allTimeUsers", $context)) {
            // line 67
            echo "                            <p>Trafic: <b>";
            echo twig_escape_filter($this->env, (isset($context["allTimeUsers"]) ? $context["allTimeUsers"] : $this->getContext($context, "allTimeUsers")), "html", null, true);
            echo "</b> unique users all time.</p>
                    ";
        }
        // line 69
        echo "                ";
    }

    // line 73
    public function block_javascript($context, array $blocks = array())
    {
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 73,  213 => 69,  207 => 67,  205 => 66,  202 => 65,  199 => 64,  191 => 62,  188 => 61,  185 => 60,  179 => 58,  177 => 57,  174 => 56,  168 => 54,  157 => 48,  151 => 44,  145 => 40,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 29,  118 => 28,  111 => 9,  108 => 8,  102 => 6,  96 => 75,  94 => 73,  89 => 70,  82 => 45,  80 => 44,  75 => 41,  73 => 40,  69 => 38,  67 => 28,  47 => 14,  43 => 13,  39 => 11,  26 => 2,  41 => 15,  38 => 14,  32 => 6,  29 => 7,  165 => 53,  162 => 71,  147 => 58,  142 => 55,  139 => 54,  131 => 42,  128 => 41,  120 => 35,  113 => 33,  109 => 31,  103 => 29,  101 => 28,  95 => 27,  91 => 26,  87 => 48,  83 => 24,  77 => 21,  71 => 20,  64 => 18,  60 => 17,  57 => 21,  53 => 15,  46 => 11,  40 => 7,  37 => 8,  31 => 4,);
    }
}
