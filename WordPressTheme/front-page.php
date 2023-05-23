<?php get_header(); ?>

<?php
$slideItems = [
  [
    'imgSrc' => 'https://rea1i2e.github.io/sample-images/images/picture01.jpg',
    'imgAlt' => '',
  ],
  [
    'imgSrc' => 'https://rea1i2e.github.io/sample-images/images/picture02.jpg',
    'imgAlt' => '',
  ],
  [
    'imgSrc' => 'https://rea1i2e.github.io/sample-images/images/picture03.jpg',
    'imgAlt' => '',
  ],
  [
    'imgSrc' => 'https://rea1i2e.github.io/sample-images/images/picture04.jpg',
    'imgAlt' => '',
  ],
];
?>

<div class="p-parts__carousel">
  <div class="p-carousel">
    <div class="p-carousel__wrapper js-carousel-slider">
      <div class="p-carousel__images js-carousel-slider__images">
        <?php foreach ($slideItems as $slideItem) : ?>
          <div class="p-carousel__image">
            <img src="<?php echo $slideItem['imgSrc']; ?>" alt="<?php echo $slideItem['imgAlt']; ?>">
            <!-- <img src="<?php echo $slideItem['imgSrc']; ?>" alt="<?php echo $slideItem['imgAlt']; ?>"  loading="lazy"> -->
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<img src="<?php echo esc_url(get_theme_file_uri('/assets/images/')); ?>" alt="" loading="lazy">

<?php get_footer(); ?>