<?php

/* AppBundle:Demo:index.html.twig */
class __TwigTemplate_1b4849cac3d594884b3acf30533b17819f441ae76e2aa5fe861e719383431afe extends Twig_Template
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
        $__internal_1441b76555700388c6654b9032d9df840e9e68d86c3feb71a88b3e1c3b2e54b2 = $this->env->getExtension("native_profiler");
        $__internal_1441b76555700388c6654b9032d9df840e9e68d86c3feb71a88b3e1c3b2e54b2->enter($__internal_1441b76555700388c6654b9032d9df840e9e68d86c3feb71a88b3e1c3b2e54b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Demo:index.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["weather"]) ? $context["weather"] : null), "Location", array(), "any", true, true)) {
            echo "    
<h3>Location Name </h3> ";
            // line 2
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "Location", array()), "html", null, true);
            echo "
<h3>Wind </h3> ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "Wind", array()), "html", null, true);
            echo "
<h3>SkyConditions</h3> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "SkyConditions", array()), "html", null, true);
            echo "
<h3>Temperature</h3> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "Temperature", array()), "html", null, true);
            echo "
<h3>DewPoint</h3> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "DewPoint", array()), "html", null, true);
            echo "
<h3>RelativeHumidity</h3> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "RelativeHumidity", array()), "html", null, true);
            echo "
<h3>Pressure</h3> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["weather"]) ? $context["weather"] : $this->getContext($context, "weather")), "Pressure", array()), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "    <h3>";
            echo "Incorrect Country Name or City Name!!!";
            echo "</h3>
";
        }
        
        $__internal_1441b76555700388c6654b9032d9df840e9e68d86c3feb71a88b3e1c3b2e54b2->leave($__internal_1441b76555700388c6654b9032d9df840e9e68d86c3feb71a88b3e1c3b2e54b2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
