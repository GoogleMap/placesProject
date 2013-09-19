<?php

/* BundleProjectBundle:Places:voteResult.html.twig */
class __TwigTemplate_f692702d605a4f4eda4d5cec6255d08b extends Twig_Template
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
        echo "<h1>Thx for the vote</h1>
<p>Yes: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")), "html", null, true);
        echo "</p>
<p>It's ok: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")), "html", null, true);
        echo "</p>
<p>Not really: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")), "html", null, true);
        echo "</p>
<p>No: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")), "html", null, true);
        echo "</p>
<br />
<p>Total: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["totalVotes"]) ? $context["totalVotes"] : $this->getContext($context, "totalVotes")), "html", null, true);
        echo "</p>

";
        // line 11
        echo "<h1>Results:</h1>
<p>Yes: <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "\" height=\"20\"/> ";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "%</p>
<p>Ok: <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "\" height=\"20\"/> ";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "%</p>
<p>NotR: <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "\" height=\"20\"/>";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "%</p>
<p>No: <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "\" height=\"20\"/> ";
        echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
        echo "%</p>

";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:Places:voteResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  63 => 14,  55 => 13,  47 => 12,  44 => 11,  39 => 8,  34 => 6,  30 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
