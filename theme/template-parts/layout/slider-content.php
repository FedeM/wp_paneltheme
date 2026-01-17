<div class="relative w-full h-[697px] overflow-hidden bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/casa.png');">
	<!-- Overlay degradado -->
	<div class="absolute inset-0" style="background: linear-gradient(to bottom, #1a2862, #3552c8); opacity: 0.7;"></div>

	<!-- Contenido principal -->
	<div class="relative z-10 flex flex-col items-center justify-center h-full px-12 md:px-6 text-center">
		<div class="flex flex-col items-center justify-center">
			<div class="text-white text-2xl md:text-3xl lg:text-4xl font-semibold mb-2 leading-tight">Venta y corte a medida de</div>
			<div class="text-[var(--color-secondary)] text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 md:mb-2 relative leading-none">
                PANEL <span class="relative inline-block">SÁNDWICH
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Vector.png" alt="" class="absolute -bottom-4 md:-bottom-6 left-0 w-full h-auto">
                </span>
            </div>
		</div>

		<a href="#contacto" class="inline-block px-8 py-3 mt-20 md:mt-24 bg-white text-[var(--color-primary)] border-2 border-[var(--color-secondary)] font-bold rounded-full hover:bg-gray-50 transition">
            CONTACTA CON NOSOTROS
        </a>
	</div>

	<!-- Flechas (HTML) -->
	<button class="absolute top-1/2 left-4 md:left-[5%] transform -translate-y-1/2 z-20 w-[40px] h-[40px] md:w-[58px] md:h-[58px] rounded-full flex items-center justify-center text-white bg-[var(--color-secondary)] text-[20px] md:text-[26px] font-bold cursor-pointer transition hover:bg-white hover:text-[var(--color-secondary)]">
		&larr;
	</button>
	<button class="absolute top-1/2 right-4 md:right-[5%] transform -translate-y-1/2 z-20 w-[40px] h-[40px] md:w-[58px] md:h-[58px] rounded-full flex items-center justify-center text-white bg-[var(--color-secondary)] text-[20px] md:text-[26px] font-bold cursor-pointer transition hover:bg-white hover:text-[var(--color-secondary)]">
		&rarr;
	</button>
</div>