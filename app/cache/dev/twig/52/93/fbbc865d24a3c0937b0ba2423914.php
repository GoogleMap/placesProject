<?php

/* BundleProjectBundle:Places:usersRating.html.twig */
class __TwigTemplate_5293fbbc865d24a3c0937b0ba2423914 extends Twig_Template
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
        echo "<h1>Thx for the vote !</h1>
<h2>Current Results:</h2>
<p><b>Total votes: </b> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["totalVotes"]) ? $context["totalVotes"] : $this->getContext($context, "totalVotes")), "html", null, true);
        echo "</p>
<p><b>Points / Stars:</b> <font color=\"green\"><big>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")), "html", null, true);
        echo "</big></font></p>
";
        // line 5
        if (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 2)) {
            // line 6
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
      <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
       <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
";
        } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 3)) {
            // line 12
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
      <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
       <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
";
        } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 4)) {
            // line 18
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
      <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
";
        } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) < 5)) {
            // line 24
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
     <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/blank_star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
";
        } elseif (((isset($context["usersRating"]) ? $context["usersRating"] : $this->getContext($context, "usersRating")) == 5)) {
            // line 30
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/star.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" />
   
";
        }
        // line 37
        echo "

";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Places:usersRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  121 => 30,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 24,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  55 => 12,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  33 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
