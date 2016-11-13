<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_c4b74bfd8f7bbf9879bd9964c623ec55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  84 => 37,  58 => 19,  127 => 62,  170 => 69,  160 => 65,  134 => 52,  129 => 49,  104 => 36,  100 => 35,  90 => 46,  70 => 25,  34 => 14,  81 => 34,  77 => 33,  65 => 31,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 51,  128 => 49,  107 => 36,  61 => 21,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 67,  119 => 57,  102 => 46,  71 => 30,  67 => 26,  63 => 25,  59 => 20,  94 => 38,  89 => 36,  85 => 21,  75 => 27,  68 => 14,  56 => 21,  87 => 33,  21 => 3,  26 => 6,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  27 => 5,  44 => 15,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 63,  151 => 63,  142 => 59,  138 => 54,  136 => 54,  121 => 46,  117 => 43,  105 => 40,  91 => 41,  62 => 20,  49 => 17,  24 => 4,  25 => 5,  19 => 1,  79 => 35,  72 => 31,  69 => 24,  47 => 12,  40 => 17,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 40,  108 => 41,  101 => 32,  98 => 31,  96 => 34,  83 => 25,  74 => 30,  66 => 23,  55 => 15,  52 => 10,  50 => 18,  43 => 7,  41 => 7,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 73,  173 => 65,  168 => 72,  164 => 59,  162 => 66,  154 => 62,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 50,  106 => 36,  103 => 32,  99 => 40,  95 => 42,  92 => 33,  86 => 39,  82 => 31,  80 => 30,  73 => 18,  64 => 26,  60 => 22,  57 => 12,  54 => 25,  51 => 17,  48 => 9,  45 => 16,  42 => 8,  39 => 10,  36 => 13,  33 => 6,  30 => 5,);
    }
}
