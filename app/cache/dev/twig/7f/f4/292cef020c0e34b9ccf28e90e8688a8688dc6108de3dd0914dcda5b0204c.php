<?php

/* AcmeStoreBundle:Default:index.html.twig */
class __TwigTemplate_7ff4292cef020c0e34b9ccf28e90e8688a8688dc6108de3dd0914dcda5b0204c extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "name"));
        foreach ($context['_seq'] as $context["_key"] => $context["names"]) {
            // line 3
            echo "
        <li>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "names"), "_id"), "html", null, true);
            echo "</li>
        <li>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "names"), "name"), "html", null, true);
            echo "</li>
<li>-----</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
