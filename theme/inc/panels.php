<?php
/**
 * Panel Custom Post Type
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registrar Custom Post Type "Panel"
 */
function pt_register_panel_cpt() {
	$labels = array(
		'name'                  => _x( 'Paneles', 'Post type general name', 'pt-panel' ),
		'singular_name'         => _x( 'Panel', 'Post type singular name', 'pt-panel' ),
		'menu_name'             => _x( 'Paneles', 'Admin Menu text', 'pt-panel' ),
		'name_admin_bar'        => _x( 'Panel', 'Add New on Toolbar', 'pt-panel' ),
		'add_new'               => __( 'Añadir nuevo', 'pt-panel' ),
		'add_new_item'          => __( 'Añadir nuevo Panel', 'pt-panel' ),
		'new_item'              => __( 'Nuevo Panel', 'pt-panel' ),
		'edit_item'             => __( 'Editar Panel', 'pt-panel' ),
		'view_item'             => __( 'Ver Panel', 'pt-panel' ),
		'all_items'             => __( 'Todos los Paneles', 'pt-panel' ),
		'search_items'          => __( 'Buscar Paneles', 'pt-panel' ),
		'parent_item_colon'     => __( 'Panel padre:', 'pt-panel' ),
		'not_found'             => __( 'No se encontraron paneles.', 'pt-panel' ),
		'not_found_in_trash'    => __( 'No se encontraron paneles en la papelera.', 'pt-panel' ),
		'featured_image'        => _x( 'Imagen del panel', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pt-panel' ),
		'set_featured_image'    => _x( 'Establecer imagen del panel', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pt-panel' ),
		'remove_featured_image' => _x( 'Eliminar imagen del panel', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pt-panel' ),
		'use_featured_image'    => _x( 'Usar como imagen del panel', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pt-panel' ),
	);

	$args = array(
		'label'                 => __( 'Paneles', 'pt-panel' ),
		'description'           => __( 'Paneles para mostrar en la sección "Panel Sándwich para tu proyecto"', 'pt-panel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-layout',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'post',
	);

	register_post_type( 'panel', $args );
}
add_action( 'init', 'pt_register_panel_cpt', 0 );

/**
 * Shortcode para mostrar los paneles
 */
function pt_panel_shortcode( $atts ) {
	ob_start();

	// Atributos del shortcode
	$atts = shortcode_atts( array(
		'posts_per_page' => -1,
	), $atts, 'pt_panel' );

	// Consultar paneles
	$args = array(
		'post_type'      => 'panel',
		'posts_per_page' => $atts['posts_per_page'],
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	);

	$panels = new WP_Query( $args );

	if ( $panels->have_posts() ) :
		?>

		<div class="pt-panels grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3 gap-y-8 justify-items-center">
            <?php while ( $panels->have_posts() ) : $panels->the_post(); ?>
                <div class="pt-panel bg-white rounded-lg shadow-md overflow-hidden w-[320px] h-[565px] sm:h-[547px] sm:w-[350px] lg:w-[423px] flex flex-col mx-auto">
                    <!-- Imagen -->
                    <div class="h-[275px] min-h-[275px] bg-gray-200 p-10 flex items-center justify-center">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'max-w-full max-h-full object-contain' ) ); ?>
                        <?php endif; ?>
                    </div>

                    <!-- Contenido -->
                    <div class="p-6 flex-grow flex flex-col justify-between text-center">
                        <div>
                            <div class="text-[var(--color-primary)] text-[24px] font-medium mb-4"><?php the_title(); ?></div>
                            <div class="text-gray-600 text-[15px] mb-6 leading-tight">
                                <?php
                                echo wp_trim_words( get_the_content(), 30, '...' );
                                ?>
                            </div>
                        </div>

                        <!-- Botón LEER MÁS -->
                        <a href="<?php the_permalink(); ?>" class="inline-block w-[123px] h-[48px] mb-6 mx-auto py-3 items-center justify-center text-[16px] font-bold rounded-full bg-[var(--color-secondary)] text-white">
                            LEER MÁS
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

		<?php
		wp_reset_postdata();
	else :
		echo '<p>No hay paneles disponibles.</p>';
	endif;

	$output = ob_get_clean();
	return $output;
}
add_shortcode( 'pt_paneles', 'pt_panel_shortcode' );