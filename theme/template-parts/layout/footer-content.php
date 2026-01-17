<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paneltheme
 */

?>

<footer class="py-12 bg-[var(--color-primary)] text-white">
	<div class="container mx-auto max-w-[1300px]">

		<!-- Grid de 12 columnas -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 mx-10 lg:mx-0">

			<!-- Columna 1: Contacto (3 ítems) -->
			<div class="lg:col-span-3 space-y-6 lg:pt-15">

				<!-- Email -->
				<div class="flex items-start gap-3">
					<div class="w-8 h-6 rounded-full flex items-center justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Email-green.svg" alt="Email" class="w-5 h-5">
					</div>
					<div>
						<p class="text-sm align-middle">dominio@dominio.es</p>
					</div>
				</div>

				<!-- Teléfono -->
				<div class="flex items-start gap-3">
					<div class="w-8 h-6 rounded-full flex items-center justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Phone.svg" alt="Teléfono" class="w-5 h-5">
					</div>
					<div>
						<p class="text-sm align-middle">123 456 789</p>
					</div>
				</div>

				<!-- Ubicación -->
				<div class="flex items-start gap-3">
					<div class="w-8 h-6 rounded-full flex items-center justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Location.svg" alt="Ubicación" class="w-5 h-5">
					</div>
					<div>
						<p class="text-sm align-middle">Polígono Industrial "<span class="font-semibold">XX XXXXXX</span>"<br>Parcela XX 12345, Zaragoza</p>
					</div>
				</div>
			</div>

			<!-- Columna 2: Productos -->
			<div class="lg:col-span-3">
				<h3 class="text-lg font-semibold text-[var(--color-secondary)] mb-6">PRODUCTOS</h3>
				<ul class="space-y-1 text-sm">
					<li><a href="#" class="hover:underline">Panel Sándwich Cubierta</a></li>
					<li><a href="#" class="hover:underline">Panel Sándwich Fachada</a></li>
					<li><a href="#" class="hover:underline">Panel Sándwich Lana de Roca</a></li>
					<li><a href="#" class="hover:underline">Panel Sándwich Panel Teja</a></li>
					<li><a href="#" class="hover:underline">Panel Sándwich Segunda</a></li>
					<li><a href="#" class="hover:underline">Chapa Metálica</a></li>
					<li><a href="#" class="hover:underline">Remates Panel Sándwich</a></li>
				</ul>
			</div>

			<!-- Columna 3: Información General -->
			<div class="lg:col-span-3">
				<h3 class="text-lg font-semibold text-[var(--color-secondary)] mb-6">INFORMACIÓN GENERAL</h3>
				<ul class="space-y-1 text-sm">
					<li><a href="#" class="hover:underline">Proyectos</a></li>
					<li><a href="#" class="hover:underline">Construcción Modular</a></li>
					<li><a href="#" class="hover:underline">Blog</a></li>
					<li><a href="#" class="hover:underline">Contacto</a></li>
				</ul>

				<div class="flex gap-4 mt-6">
					<!-- Facebook -->
					<div class="w-10 h-10 bg-[var(--color-secondary)] rounded-full flex items-center justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Facebook" class="w-4 h-4">
					</div>
					<!-- Twitter/X -->
					<div class="w-10 h-10 bg-[var(--color-secondary)] rounded-full flex items-center justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-x.svg" alt="X" class="w-4 h-4">
					</div>
					<!-- Instagram -->
					<div class="w-10 h-10 bg-[var(--color-secondary)] rounded-full flex items-center justify-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt="Instagram" class="w-4 h-4">
					</div>
				</div>
			</div>

			<!-- Columna 4: Información Legal + Redes Sociales -->
			<div class="lg:col-span-3 space-y-6">
				<div>
					<h3 class="text-lg font-semibold text-[var(--color-secondary)] mb-6">INFORMACIÓN LEGAL</h3>
					<ul class="space-y-1 text-sm">
						<li><a href="#" class="hover:underline">Aviso legal</a></li>
						<li><a href="#" class="hover:underline">Política de privacidad</a></li>
						<li><a href="#" class="hover:underline">Política de cookies</a></li>
						<li><a href="#" class="hover:underline">Condiciones de venta</a></li>
						<li><a href="#" class="hover:underline">Política de Gestión</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Copyright -->
<div class="max-w-full py-6 h-[70px] bg-[var(--color-primary-dark)] text-white text-center text-xs">
	Copyright © 2025 Empresa | Todos los derechos reservados.
</div>