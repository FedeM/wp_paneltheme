<?php
/**
 * Front Page Template
 *
 * @package underscoretw
 */

get_header('theme');
get_template_part('template-parts/layout/header', 'theme');
?>

<main class="min-h-screen">
    <?php 
    // Slider principal
    get_template_part('template-parts/layout/slider', 'content'); 

    // Sección: ¿Por qué nosotros?
    get_template_part('template-parts/home/why', 'us');

    // Sección: Paneles Sándwich para tu proyecto
    get_template_part('template-parts/home/product', 'panels');

    // Sección: Pide Presupuesto (Formulario)
    get_template_part('template-parts/home/budget', 'form');

    // Sección: Profesionales y cercanos
    get_template_part('template-parts/home/professionals');

    // Sección: Reseñas de clientes
    get_template_part('template-parts/home/reviews');

    // Sección: Necesitas asesoramiento
    get_template_part('template-parts/home/advice', 'cta');

    // Footer de la página
    get_template_part('template-parts/layout/footer', 'content'); 
    ?>
</main>

<?php
get_footer('theme');
