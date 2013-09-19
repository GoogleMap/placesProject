<?php

/* BundleProjectBundle:About:about.html.twig */
class __TwigTemplate_bce2e6463ad077957b18d2f8e30bf5fc extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Contact ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <article>
        <hgroup>
            <h1>About</h1>
            <h2>Info about the project</h2>
        </hgroup>
        
        <p>about page content..<p>   
    </article>

    <article>
        <hgroup>
            <h1>Poll</h1>
            <h2>Share your thoughts about this platform..</h2>
        </hgroup>
         <div id=\"usersPoll\">
            <h2>Vote section</h2>
            <p>Poll question..</p>
            ";
        // line 24
        if (array_key_exists("bool", $context)) {
            echo " ";
            // line 25
            echo "                ";
            if ((((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) != 0) || ((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) != 0)) || ((isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")) != 0)) || ((isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")) != 0))) {
                // line 26
                echo "                    <p>Yes: ";
                echo twig_escape_filter($this->env, (isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")), "html", null, true);
                echo "</p>
                    <p>It's ok: ";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")), "html", null, true);
                echo "</p>
                    <p>Not really: ";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")), "html", null, true);
                echo "</p>
                    <p>No: ";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")), "html", null, true);
                echo "</p>
                    <br />
                    <p>Total votes: ";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["totalVotes"]) ? $context["totalVotes"] : $this->getContext($context, "totalVotes")), "html", null, true);
                echo "</p>

                    ";
                // line 34
                echo "                    <h1>Results:</h1>
                    <p>Yes: <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "\" height=\"20\"/> ";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "%</p>
                    <p>Ok: <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "\" height=\"20\"/> ";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "%</p>
                    <p>NotR: <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "\" height=\"20\"/>";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "%</p>
                    <p>No: <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/images/poll.gif"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "\" height=\"20\"/> ";
                echo twig_escape_filter($this->env, (100 * twig_number_format_filter($this->env, ((isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")) / ((((isset($context["yes"]) ? $context["yes"] : $this->getContext($context, "yes")) + (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok"))) + (isset($context["notReally"]) ? $context["notReally"] : $this->getContext($context, "notReally"))) + (isset($context["no"]) ? $context["no"] : $this->getContext($context, "no")))), 2)), "html", null, true);
                echo "%</p>
                ";
            }
            // line 40
            echo "            ";
        } else {
            // line 41
            echo "                <form>
                    ";
            // line 45
            echo "                        Yes: <input type=\"radio\" name=\"vote\" value=\"0\" onclick=\"getVote(this.value);\">
                    <br>It's ok:<input type=\"radio\" name=\"vote\" value=\"1\" onclick=\"getVote(this.value);\">
                    <br>Not really: <input type=\"radio\" name=\"vote\" value=\"2\" onclick=\"getVote(this.value);\">
                    <br>No: <input type=\"radio\" name=\"vote\" value=\"3\" onclick=\"getVote(this.value);\">
                </form>
            ";
        }
        // line 51
        echo "            
        </div>
    </article>
";
    }

    // line 56
    public function block_javascript($context, array $blocks = array())
    {
        // line 57
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bundleproject/js/setVote.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "BundleProjectBundle:About:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  144 => 56,  137 => 51,  129 => 45,  126 => 41,  123 => 40,  114 => 38,  106 => 37,  98 => 36,  90 => 35,  87 => 34,  82 => 31,  77 => 29,  73 => 28,  69 => 27,  64 => 26,  61 => 25,  58 => 24,  36 => 6,  30 => 4,);
    }
}
