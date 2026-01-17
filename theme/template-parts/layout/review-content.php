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

<div class="flex-shrink-0 w-full sm:w-[calc(50%-10px)] lg:w-[422px] h-auto min-h-[274px] bg-white p-6 rounded-lg shadow-sm snap-center sm:snap-start lg:snap-center">
  <div class="flex flex-col items-center gap-4 lg:gap-4 lg:grid lg:grid-cols-3 mb-4 w-full">

    <div class="lg:col-span-2 flex flex-col lg:flex-row items-center lg:items-start gap-2 lg:gap-3">
      <div class="relative">
        <img 
          src="<?php echo esc_url($image); ?>" 
          alt="<?php echo esc_attr($name); ?>" 
          class="w-12 h-12 rounded-full object-cover"
        />
        <div class="hidden lg:block absolute -right-3 top-0 bottom-0 w-[2px] bg-[var(--color-secondary)]"></div>
      </div>
      
      <h3 class="font-semibold text-[var(--color-primary)] lg:ml-3 lg:self-center"><?php echo esc_html($name); ?></h3>
    </div>

    <div class="lg:col-span-1 flex flex-col items-center lg:items-end lg:justify-end gap-1">
      <div class="flex items-center justify-center lg:justify-end gap-1 text-2xl text-[#ffc800]">
        <?php echo $stars; ?>
      </div>
      <p class="text-[#1F1E1780] text-xs lg:text-right lg:pr-4"><?php echo esc_html($date); ?></p>
    </div>

  </div>

  <p class="text-[#4F5665] mt-2 lg:mt-10 leading-relaxed text-center lg:text-left"><?php echo esc_html($review); ?></p>
</div>