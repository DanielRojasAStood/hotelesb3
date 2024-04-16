<?php 
$sitename = get_bloginfo('name');
$title    = get_field('title_slider_text');
$items    = get_field('group_slider_text');

$title = isset($title) ? esc_html($title) : '';

$slider_1 = isset($items['slider_1']) ? esc_url($items['slider_1']) : '';
$slider_2 = isset($items['slider_2']) ? esc_url($items['slider_2']) : '';
$slider_3 = isset($items['slider_3']) ? esc_url($items['slider_3']) : '';
$copy     = isset($items['copy']) ? $items['copy'] : '';
?>

<section class="slick-small">
    <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'text-center')) ?>
    <div class="container--medium">
        <div class="slick-small__grid">
            <div class="slick-small__col">
                <div class="slickSmall">
                    <figure class="slick-small__img">
                        <img src="<?php echo $slider_1; ?>" alt="slider 1 - <?php echo $sitename; ?>" title="slider 1" width="430" height="537">
                    </figure>
                    <figure class="slick-small__img">
                        <img src="<?php echo $slider_2; ?>" alt="slider 2 - <?php echo $sitename; ?>" title="slider 2" width="430" height="537">
                    </figure>
                    <figure class="slick-small__img">
                        <img src="<?php echo $slider_3; ?>" alt="slider 3 - <?php echo $sitename; ?>" title="slider 3" width="430" height="537">
                    </figure>
                </div>
            </div>
            <div class="slick-small__col">
                <div class="slick-small__copy copy">
                    <?php echo $copy ?>
                </div>
            </div>
        </div>
    </div>
</section>