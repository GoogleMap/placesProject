<?php

/* BundleProjectBundle:Places:infoPlaces.html.twig */
class __TwigTemplate_ee44a970987c24bdb9b03a052efe237a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BundleProjectBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascript' => array($this, 'block_javascript'),
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
        echo " InfoStore ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article>
        <hgroup>
            <h1>Info store</h1>
            <h2><big>Coffe, Restaurants, Gym, etc. places near Cluj-N.</big></h2>
            <h2><i>Query found <b>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["placesCount"]) ? $context["placesCount"] : $this->getContext($context, "placesCount")), "html", null, true);
        echo "</b> places.</i></h2>
        </hgroup>
        <br />
        <div id=\"storeContainer\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 16
            echo "            <div class=\"place\" style=\"display:none\">
            <p>Place id: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BundleProjectBundle_places_showPlace", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"))), "html", null, true);
            echo "\"/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo "</a>
            <p>
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "icon"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "icon"), "html", null, true);
            echo "\"/>
                </a>
            </p>
            <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo "</p>
            <p><b>Type: </b> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type"), "html", null, true);
            echo "</p>
            <p><b>Addr: </b> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "vicinity"), "html", null, true);
            echo "</p>
            <p><b>Geo Location: </b><u>Lat. </u>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "lat"), "html", null, true);
            echo ". <u>Lng.</u>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "lng"), "html", null, true);
            echo ".</p>
            ";
            // line 28
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "rating")) != 0)) {
                // line 29
                echo "                <p><b>Ratings: </b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "rating"), "html", null, true);
                echo " / 5 points.</p>
            ";
            } else {
                // line 31
                echo "                <p><b>Ratings: </b> No ratings available for this store.</p>
            ";
            }
            // line 33
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <button id=\"loadmore\" style=\"padding:10px; border: 2px solid black; border-radius: 5px; background: #6d6; font-weight: bold; width:450px; margin-bottom: 10px\">Load more stores</button>
            <p id=\"stop\" style=\"display:none\"><b>End of page !</b></p>
        </div>
    </article>
";
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
        // line 42
        echo "<div class=\"sideDiv\">
    <hgroup>
        <h1 class=\"sideHeader\">Search by rating or type<h1>
        <h2>Enter a rating. For example: 4.5<h2>
        <h2>Enter a type. For example: cafe</h2>
    </hgroup>
        ";
        // line 54
        echo "        
    <form action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("BundleProjectBundle_search");
        echo "\" method=\"post\">
        <input type=\"text\" name=\"input\" style=\"padding:3px; width:80px\" />
        ";
        // line 58
        echo "        <button class=\"button\" type=\"submit\" style=\"padding: 5px; border-radius:5px; width:80px\"><b>Search</b></button>
    </form>
    
</div>
<div class=\"sideDiv\">
    <hgroup>
        <h1 class=\"sideHeader\">Side bar title</h1>
        <h2>Side bar subtitle</h2>
    </hgroup>
    <p>Side bar content</p>
</div>
";
    }

    // line 71
    public function block_javascript($context, array $blocks = array())
    {
        // line 72
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/js/loadMorePlaces.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Places:infoPlaces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  162 => 71,  147 => 58,  142 => 55,  139 => 54,  131 => 42,  128 => 41,  120 => 35,  113 => 33,  109 => 31,  103 => 29,  101 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  77 => 21,  71 => 20,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  46 => 11,  40 => 7,  37 => 6,  31 => 4,);
    }
}
