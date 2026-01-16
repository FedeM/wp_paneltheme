<div class="relative w-full h-[697px] overflow-hidden bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/casa.png');">
	<!-- Overlay degradado -->
	<div class="absolute inset-0" style="background: linear-gradient(to bottom, #1a2862, #3552c8); opacity: 0.7;"></div>

	<!-- Contenido principal -->
	<div class="relative z-10 flex flex-col items-center justify-center h-full px-6 text-center">
		<div class="flex flex-col items-center justify-center">
			<div class="text-white text-[48px] md:text-4xl font-semibold mb-2">Venta y corte a medida de</div>
			<div class="text-[var(--color-secondary)] text-[85px] md:text-5xl font-extrabold mb-2 relative">
                PANEL <span class="relative inline-block">SÁNDWICH
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Vector.png" alt="" class="absolute -bottom-8 left-0 max-w-full h-auto">
                </span>
            </div>
		</div>

		<a href="#" class="inline-block px-8 py-3 mt-20 bg-white text-[var(--color-primary)] border-2 border-[var(--color-secondary)] font-bold rounded-full hover:bg-gray-50 transition">
            CONTACTA CON NOSOTROS
        </a>
	</div>

	<!-- Flechas (HTML) -->
	<button class="absolute top-1/2 left-[17%] sm:left-[2%] transform -translate-y-1/2 z-20 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white bg-[var(--color-secondary)] text-[26px] font-bold cursor-pointer transition">
		&larr;
	</button>
	<button class="absolute top-1/2 right-[17%] sm:right-[2%] transform -translate-y-1/2 z-20 w-[58px] h-[58px] rounded-full flex items-center justify-center text-white bg-[var(--color-secondary)] text-[26px] font-bold cursor-pointer transition">
		&rarr;
	</button>
</div>