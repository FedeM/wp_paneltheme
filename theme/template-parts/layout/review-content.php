<?php
$image = isset($args['image']) ? $args['image'] : 'https://via.placeholder.com/60';
$name = isset($args['name']) ? $args['name'] : 'Nombre';
$rating = isset($args['rating']) ? $args['rating'] : 5;
$date = isset($args['date']) ? $args['date'] : '01/01/2026';
$review = isset($args['review']) ? $args['review'] : 'Reseña del cliente...';

// Generamos las estrellas (con color verde secundario)
$stars = '';
for ($i = 1; $i <= 5; $i++) {
    if ($i <= $rating) {
        $stars .= '★';
    } else {
        $stars .=  '☆';
    }
}
?>

<div class="flex-shrink-0 w-full mx-6 sm:mx-0 sm:w-[422px] h-[274px] bg-white p-6 rounded-lg shadow-sm snap-start">
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-4">

    <div class="sm:col-span-2 flex items-start gap-3">
      <div class="relative">
        <img 
          src="<?php echo esc_url($image); ?>" 
          alt="<?php echo esc_attr($name); ?>" 
          class="w-12 h-12 rounded-full object-cover"
        />
        <div class="hidden sm:block absolute -right-3 top-0 bottom-0 w-[2px] bg-[var(--color-secondary)]"></div>
      </div>

      <h3 class="font-semibold ml-3 text-[var(--color-primary)] self-center"><?php echo esc_html($name); ?></h3>
    </div>

    <div class="sm:col-span-1 flex flex-col justify-end gap-1">
      <div class="flex items-center gap-1 text-right text-2xl text-[#ffc800]">
        <?php echo $stars; ?>
      </div>
      <p class="text-[#1F1E1780] sm:text-right sm:pr-4 text-xs"><?php echo esc_html($date); ?></p>
    </div>

  </div>

  <p class="text-[#4F5665] mt-2 sm:mt-10 leading-relaxed"><?php echo esc_html($review); ?></p>
</div>