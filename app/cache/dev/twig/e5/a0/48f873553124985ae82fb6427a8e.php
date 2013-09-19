<?php

/* BundleProjectBundle:Comment:index.html.twig */
class __TwigTemplate_e5a048f873553124985ae82fb6427a8e extends Twig_Template
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
        // line 2
        echo "<div style=\"height: 250px; overflow: scroll; overflow-x: hidden\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "        <div class=\"comment";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
            <h2><b>";
            // line 5
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user")), "html", null, true);
            echo "</b> <span>- on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "created"), "l, F j, Y @ H:i"), "html", null, true);
            echo "</span></h2>
            <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "</p>
        </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 9
            echo "            <p>No comments for this post !</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  45 => 5,  40 => 4,  22 => 3,  19 => 2,  398 => 152,  394 => 151,  388 => 149,  379 => 143,  367 => 133,  365 => 132,  362 => 131,  353 => 123,  340 => 115,  329 => 106,  326 => 105,  321 => 103,  317 => 102,  313 => 101,  309 => 100,  304 => 99,  299 => 97,  295 => 96,  291 => 95,  287 => 94,  282 => 93,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  260 => 87,  255 => 85,  251 => 84,  247 => 83,  243 => 82,  238 => 81,  232 => 78,  228 => 77,  224 => 76,  220 => 75,  215 => 74,  213 => 73,  209 => 72,  205 => 71,  200 => 70,  197 => 69,  184 => 60,  180 => 58,  174 => 56,  172 => 55,  166 => 54,  162 => 53,  158 => 52,  154 => 51,  148 => 48,  142 => 47,  134 => 45,  128 => 42,  125 => 41,  119 => 38,  116 => 37,  114 => 36,  110 => 35,  101 => 29,  97 => 28,  90 => 24,  86 => 23,  79 => 19,  75 => 18,  71 => 17,  67 => 9,  60 => 15,  56 => 13,  51 => 6,  47 => 11,  36 => 4,  30 => 3,);
    }
}
