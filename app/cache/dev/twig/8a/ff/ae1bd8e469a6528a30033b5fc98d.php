<?php

/* BundleProjectBundle:Places:show.html.twig */
class __TwigTemplate_8affae1bd8e469a6528a30033b5fc98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BundleProjectBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Store Info ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo "  
<article>
    <hgoup>
        <h1>Store Details</h1>
    </hgoup>
    <br />  
   
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 12
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "extId"), "html", null, true);
            echo "</p>
    <p>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
            echo "</p>
        ";
            // line 15
            echo "    <input id=\"name\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type")), "html", null, true);
            echo "\" />
        <input id=\"lat\" type=\"hidden\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "lat"), "html", null, true);
            echo "\" />
        <input id=\"lng\" type=\"hidden\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "lng"), "html", null, true);
            echo "\" />
        <input id=\"extId\" type=\"hidden\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"), "html", null, true);
            echo "\" />
        <input id=\"ip\" type=\"hidden\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
            echo "\" />
        
        <div>
           <div style=\"float:left\">
               <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, (abs($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id")) - 1), "html", null, true);
            echo "\">
                   <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/left.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\" title=\"Previous Store\"/>
               </a>
           </div>
           <div style=\"float:right\">
               <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (abs($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id")) + 1), "html", null, true);
            echo "\">
                   <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/right.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\" title=\"Next Store\"/>
               </a>
           </div>   
        </div>
        <br /> 
        <div class=\"coffeStore\" style=\"clear:both\">
            <p>Store id: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"), "html", null, true);
            echo "</p>
            ";
            // line 36
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "imgRef")) < 15)) {
                // line 37
                echo "                <p>
                    <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/default.jpg"), "html", null, true);
                echo "\" title=\"No image found.\"/>
                </p>            
            ";
            } else {
                // line 41
                echo "                <p>
                    <img src=\"https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "imgRef"), "html", null, true);
                echo "&sensor=true&key=AIzaSyCLRr7MJ5GMGRo0zRCs1azjafkQDIY23jc\" />
                </p>
            ";
            }
            // line 45
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BundleProjectBundle_places_showPlace", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"))), "html", null, true);
            echo "\"/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo "</a>
            <p>
                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "icon"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "icon"), "html", null, true);
            echo "\"/>
                </a>
            </p>
            <p><big>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "name"), "html", null, true);
            echo "</big></p>
            <p><b>Type: </b> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type"), "html", null, true);
            echo "</p>
            <p><b>Addr: </b> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "vicinity"), "html", null, true);
            echo "</p>
            <p><b>Geo Location: </b><u>Lat. </u>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "lat"), "html", null, true);
            echo ". <u>Lng.</u>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "lng"), "html", null, true);
            echo ".</p>
            ";
            // line 55
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "rating")) != 0)) {
                // line 56
                echo "                <p><b>Ratings: <big><font color=\"green\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "rating"), "html", null, true);
                echo "</font></b></big> / 5 points.</p>
            ";
            } else {
                // line 58
                echo "                <p><b>Ratings: </b> No ratings available for this store.</p>
            ";
            }
            // line 60
            echo "            <p><b>Total comments: </b>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "comments")), "html", null, true);
            echo "</p>
        </div>
       
        <div id=\"voteSection\">
            <hgroup>
                <h1>Vote section</h1>
                <h2>Users ratings</h2>
            </hgroup>
            
            ";
            // line 69
            if (array_key_exists("bool", $context)) {
                echo " ";
                // line 70
                echo "                <p><b>Total votes: </b>";
                echo twig_escape_filter($this->env, (isset($context["totalVotesAllTime"]) ? $context["totalVotesAllTime"] : $this->getContext($context, "totalVotesAllTime")), "html", null, true);
                echo " votes (for all places)</p>
                <p><b>Total votes: </b>";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["totalVotes"]) ? $context["totalVotes"] : $this->getContext($context, "totalVotes")), "html", null, true);
                echo " vote(s).</p>
                <p><b>Points / Stars:</b> <font color=\"green\"><big>";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")), "html", null, true);
                echo "</big></font></p>
";
                // line 73
                if (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 2)) {
                    // line 74
                    echo "    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
      <img src=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
       <img src=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
        <img src=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    
";
                } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 3)) {
                    // line 81
                    echo "    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
      <img src=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
       <img src=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
";
                } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 4)) {
                    // line 87
                    echo "    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
      <img src=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
";
                } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 5)) {
                    // line 93
                    echo "    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
";
                } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) == 5)) {
                    // line 99
                    echo "    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
                    echo "\" width=\"30\" height=\"30\" />
";
                }
                // line 105
                echo "            ";
            } else {
                // line 106
                echo "                <p>Select a star</p>
            <form>
                <br />1<input type=\"radio\" name=\"vote\" value=\"1\" onclick=\"setVote(this.value);\">
                2<input type=\"radio\" name=\"vote\" value=\"2\" onclick=\"setVote(this.value);\">
                3<input type=\"radio\" name=\"vote\" value=\"3\" onclick=\"setVote(this.value);\">
                4<input type=\"radio\" name=\"vote\" value=\"4\" onclick=\"setVote(this.value);\">
                5<input type=\"radio\" name=\"vote\" value=\"5\" onclick=\"setVote(this.value);\">
            </form>
            ";
            }
            // line 115
            echo "        </div>
        
        <br />
        <h1>Map</h1>
        <br />
        <div id=\"googleMap\" style=\"width:625px;height:380px; border:2px solid black; border-radius:5px\"></div>
        <p id=\"lati\"></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</article>
<article>
    <hgroup>
        <h1>Comments</h1>
        <h2>Users thoughts about this place.</h2>
    </hgroup>
    <div id=\"flip\">Show / Hide Comments</div>
    ";
        // line 131
        echo "    <div id=\"panel\">
        ";
        // line 132
        $this->env->loadTemplate("BundleProjectBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 133
        echo "    </div>
</article>
<article>
   
    <hgroup>
        <h1>Comments</h1>
        <h2>Share your thoughts about this place.</h2>
    </hgroup>
    <div id=\"flip1\">Show / Hide Comment Form</div>
    <div id=\"panel1\">
      ";
        // line 143
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BundleProjectBundle:Comment:new", array("place_id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
        echo "
    </div>
    
</article>
";
    }

    // line 149
    public function block_javascript($context, array $blocks = array())
    {
        echo " 
<script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/js/loadMap.js"), "html", null, true);
        echo "\"></script>   
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/js/processingVote.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Places:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 152,  394 => 151,  388 => 149,  379 => 143,  367 => 133,  365 => 132,  362 => 131,  353 => 123,  340 => 115,  329 => 106,  326 => 105,  321 => 103,  317 => 102,  313 => 101,  309 => 100,  304 => 99,  299 => 97,  295 => 96,  291 => 95,  287 => 94,  282 => 93,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  260 => 87,  255 => 85,  251 => 84,  247 => 83,  243 => 82,  238 => 81,  232 => 78,  228 => 77,  224 => 76,  220 => 75,  215 => 74,  213 => 73,  209 => 72,  205 => 71,  200 => 70,  197 => 69,  184 => 60,  180 => 58,  174 => 56,  172 => 55,  166 => 54,  162 => 53,  158 => 52,  154 => 51,  148 => 48,  142 => 47,  134 => 45,  128 => 42,  125 => 41,  119 => 38,  116 => 37,  114 => 36,  110 => 35,  101 => 29,  97 => 28,  90 => 24,  86 => 23,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  60 => 15,  56 => 13,  51 => 12,  47 => 11,  36 => 4,  30 => 3,);
    }
}
