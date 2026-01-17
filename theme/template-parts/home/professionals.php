<?php
/**
 * Home: Profesionales y CERCANOS
 */
?>
<!-- Profesionales y cercanos -->
<section class="py-24 bg-white">
    <div class="container mx-auto max-w-[1300px]">

        <div class="flex flex-col md:flex-row items-center gap-10 mb-12">
            <!-- Imagen -->
            <div class="flex justify-center md:justify-start w-full md:w-4/12">
                <img 
                src="<?php echo get_template_directory_uri(); ?>/images/image_profesionales.png"
                alt="Paneles sandwich" 
                class="w-full lg:max-w-[423px] h-auto -scale-x-100"
                />
            </div>

            <div class="relative w-full px-8 md:px-0 md:w-8/12 md:text-left">
                <!-- Título -->
                <h2 class="text-[var(--color-primary)] text-3xl md:text-4xl font-semibold mb-10">Profesionales y <span class="text-[var(--color-secondary)] relative inline-block">CERCANOS</span></h2>

                <!-- Texto -->
                <p class="text-gray-600 mb-10 lg:max-w-[600px]">
                Por eso, en <strong>XXXXX</strong> estamos en constante desarrollo en los materiales y técnicas de la construcción modular prefabricada.
                </p>
                <p class="text-gray-600 mb-10 lg:max-w-[600px]">
                Contamos con un excelente equipo de ingenieros, delineantes, técnicos y montadores con experiencia y profesionalidad con el fin de que el cliente siempre tenga el mejor resultado posible.
                </p>
                <p class="text-gray-600 mb-8 lg:max-w-[600px]">
                Nos encanta asesorarte e intentar dar solución a tus inquietudes y proyectos y para ello creemos en el trato personal y humano para poder resolver todas tus dudas.
                </p>

                <!-- Botón contacto -->
                <a href="#contacto" class="inline-block px-8 py-3 mt-3 mx-auto md:mx-0 justify-center bg-white text-[var(--color-primary)] border-2 border-[var(--color-secondary)] font-bold rounded-full hover:bg-gray-50 transition">
                    CONTACTA CON NOSOTROS
                </a>

                <!-- Flechita verde -->
                <div class="hidden xl:block absolute -top-1 right-0">
                    <img 
                    src="<?php echo get_template_directory_uri(); ?>/images/vector_profesionales.png" 
                    alt="Flecha verde decorativa"
                    />
                </div>
            </div>
        </div>

        <!-- Items -->
        <div class="lg:bg-[var(--color-gray)] px-6 rounded-lg mt-10 h-auto lg:max-h-[112px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                <div class="bg-[var(--color-gray)] flex items-center gap-3 p-4 relative">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/icon-punto-venta.svg" 
                        alt="Punto de venta de panel sándwich" 
                        class="w-16 h-16 flex-shrink-0"
                    />
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">
                        Punto de venta de panel sándwich
                    </div>
                    <div class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 w-[2px] h-16 bg-[var(--color-primary)]"></div>
                </div>

                <div class="bg-[var(--color-gray)] flex items-center gap-3 p-4 relative">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/icon-diseno-fabricacion.svg" 
                        alt="Diseño y fabricación de estructuras" 
                        class="w-16 h-16 flex-shrink-0"
                    />
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">
                        Diseño y fabricación de estructuras
                    </div>
                    <div class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 w-[2px] h-16 bg-[var(--color-primary)]"></div>
                </div>

                <div class="bg-[var(--color-gray)] flex items-center gap-3 p-4 relative">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/icon-ingenieria.svg" 
                        alt="Ingeniería" 
                        class="w-16 h-16 flex-shrink-0"
                    />
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">
                        Ingeniería
                    </div>
                    <div class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 w-[2px] h-16 bg-[var(--color-primary)]"></div>
                </div>

                <div class="bg-[var(--color-gray)] flex items-center gap-3 p-4">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/icon-construccion.svg" 
                        alt="Construcción modular prefabricada" 
                        class="w-16 h-16 flex-shrink-0"
                    />
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">
                        Construcción modular prefabricada
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
