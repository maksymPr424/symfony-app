<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* layout.html.twig */
class __TwigTemplate_04ce34f49205d9897903d13208cafd99 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        yield "<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Мій Symfony проєкт</title>

    ";
        // line 7
        yield "    <link
        href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\"
        rel=\"stylesheet\"
        integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoXHk+LQ2DkzU8UqC2bJzCkJ3q8jAJFhWl5dB0t1wVhZzN\"
        crossorigin=\"anonymous\"
    >
</head>
<body>

    <div class=\"container mt-5\">
        <h1 class=\"text-primary\">Bootstrap працює! 🎉</h1>
        <button class=\"btn btn-success\">Кнопка Bootstrap</button>
    </div>

    ";
        // line 22
        yield "    <script
        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-w76A08GgW+yy8gtE2+7F0pH3c+FZ9Fbhz9e+OrlSvh6Gk5zZ1iZP5lnz9UJ0Z0yN\"
        crossorigin=\"anonymous\"
    ></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  71 => 22,  55 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Мій Symfony проєкт</title>

    {# Bootstrap CSS CDN #}
    <link
        href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\"
        rel=\"stylesheet\"
        integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoXHk+LQ2DkzU8UqC2bJzCkJ3q8jAJFhWl5dB0t1wVhZzN\"
        crossorigin=\"anonymous\"
    >
</head>
<body>

    <div class=\"container mt-5\">
        <h1 class=\"text-primary\">Bootstrap працює! 🎉</h1>
        <button class=\"btn btn-success\">Кнопка Bootstrap</button>
    </div>

    {# Bootstrap JS CDN (опціонально) #}
    <script
        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-w76A08GgW+yy8gtE2+7F0pH3c+FZ9Fbhz9e+OrlSvh6Gk5zZ1iZP5lnz9UJ0Z0yN\"
        crossorigin=\"anonymous\"
    ></script>
</body>
</html>
", "layout.html.twig", "/home/maksym/Documents/GitHub/symfony-app/templates/layout.html.twig");
    }
}
