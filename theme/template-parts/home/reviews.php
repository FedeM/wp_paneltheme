<?php
/**
 * Home: Reseñas de CLIENTES
 */
?>
<!-- Reseñas de clientes -->
<section class="py-18 bg-[var(--color-gray)]">
    <div class="container mx-auto max-w-[1300px]">

        <div class="relative flex flex-col items-center mb-10">

            <!-- Título -->
            <h2 class="text-[var(--color-primary)] text-3xl md:text-4xl font-semibold text-center w-full">
                Reseñas de <span class="text-[var(--color-secondary)]">CLIENTES</span>
            </h2>

            <!-- Flechas -->
            <div class="flex gap-4 justify-center mt-6 md:mt-0 md:absolute md:right-0 md:top-1/2 md:-translate-y-1/2">
                <!-- Flecha izquierda -->
                <button data-prev class="w-[58px] h-[58px] bg-white border-2 border-[var(--color-primary)] rounded-full flex items-center justify-center hover:bg-[var(--color-primary)] hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l-7-7 7-7" />
                </svg>
                </button>

                <!-- Flecha derecha -->
                <button data-next class="w-[58px] h-[58px] bg-[var(--color-primary)] text-white rounded-full flex items-center justify-center hover:bg-[var(--color-primary-dark)] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 5l7 7-7 7" />
                </svg>
                </button>
            </div>

        </div>

        <!-- Contenedor de reseñas -->
        <div class="relative">
            <div class="flex reviews overflow-x-auto gap-5 px-6 pb-6 snap-x snap-mandatory scrollbar-hide">
                <?php
                $reviews = [
                    [
                        'image' => get_template_directory_uri().'/images/cliente.png',
                        'name' => 'Carlos Javier',
                        'rating' => 5,
                        'date' => '30/01/2024',
                        'review' => 'Me considero un cliente satisfecho. Me asesoraron como ninguna otra empresa. Cumplieron en los tiempos y excelente trato humano.'
                    ],
                    [
                        'image' => get_template_directory_uri().'/images/cliente.png',
                        'name' => 'Carlos Javier',
                        'rating' => 3,
                        'date' => '30/01/2024',
                        'review' => 'Atención muy buena por parte del comercial y entrega muy rápida.'
                    ],
                    [
                        'image' => get_template_directory_uri().'/images/cliente.png',
                        'name' => 'Carlos Javier',
                        'rating' => 4,
                        'date' => '30/01/2024',
                        'review' => 'Necesitaba unos paneles para un trabajo en mi casa, fui de forma particular y me atendieron muy bien y me explicaron todo al detalle, acabe comprando lo que necesita y sin duda volveré.'
                    ]
                ];

                foreach ($reviews as $review) {
                    get_template_part( 'template-parts/layout/review', 'content', $review );
                }
                ?>
            </div>
        </div>

    </div>
</section>
