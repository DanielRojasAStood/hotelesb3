<?php 
$sitename = get_bloginfo('name');
$items    = get_field('group_slider');
$slider_1 = isset($items['slider_1']) ? esc_url($items['slider_1']) : '';
$slider_2 = isset($items['slider_2']) ? esc_url($items['slider_2']) : '';
$slider_3 = isset($items['slider_3']) ? esc_url($items['slider_3']) : '';

$title_1  = isset($items['link_1']['title']) ? esc_attr($items['link_1']['title']) : '';
$link_1   = isset($items['link_1']['url']) ? esc_url($items['link_1']['url']) : '';
$target_1 = isset($items['link_1']['target']) ? esc_attr($items['link_1']['target']) : '';

$title_2  = isset($items['link_2']['title']) ? esc_attr($items['link_2']['title']) : '';
$link_2   = isset($items['link_2']['url']) ? esc_url($items['link_2']['url']) : '';
$target_2 = isset($items['link_2']['target']) ? esc_attr($items['link_2']['target']) : '';

$title_3  = isset($items['link_3']['title']) ? esc_attr($items['link_3']['title']) : '';
$link_3   = isset($items['link_3']['url']) ? esc_url($items['link_3']['url']) : '';
$target_3 = isset($items['link_3']['target']) ? esc_attr($items['link_3']['target']) : '';

$title_4  = isset($items['link_4']['title']) ? esc_attr($items['link_4']['title']) : '';
$link_4   = isset($items['link_4']['url']) ? esc_url($items['link_4']['url']) : '';
$target_4 = isset($items['link_4']['target']) ? esc_attr($items['link_4']['target']) : '';

$title_5  = isset($items['link_5']['title']) ? esc_attr($items['link_5']['title']) : '';
$link_5   = isset($items['link_5']['url']) ? esc_url($items['link_5']['url']) : '';
$target_5 = isset($items['link_5']['target']) ? esc_attr($items['link_5']['target']) : '';
?>

<section class="slick-banner">
    <div class="slick-banner__overlay"></div>
    <div class="slick-banner__copy">
        <?php if($title_1) { ?><a href="<?php echo $link_1; ?>" target="<?php echo $target_1; ?>" title="<?php echo $title_1; ?>"><?php echo $title_1; ?></a><?php }?>
        <?php if($title_2) { ?><a href="<?php echo $link_2; ?>" target="<?php echo $target_2; ?>" title="<?php echo $title_2; ?>"><?php echo $title_2; ?></a><?php }?>
        <?php if($title_3) { ?><a href="<?php echo $link_3; ?>" target="<?php echo $target_3; ?>" title="<?php echo $title_3; ?>"><?php echo $title_3; ?></a><?php }?>
        <?php if($title_4) { ?><a href="<?php echo $link_4; ?>" target="<?php echo $target_4; ?>" title="<?php echo $title_4; ?>"><?php echo $title_4; ?></a><?php }?>
        <?php if($title_5) { ?><a href="<?php echo $link_5; ?>" target="<?php echo $target_5; ?>" title="<?php echo $title_5; ?>"><?php echo $title_5; ?></a><?php }?>
    </div>
    <div class="slickBanner">
        <figure class="slick-banner__img">
            <img src="<?php echo $slider_1; ?>" alt="slider 1 - <?php echo $sitename; ?>" title="slider 1" width="1600" height="1068">
        </figure>

        <figure class="slick-banner__img">
            <img src="<?php echo $slider_2; ?>" alt="slider 2 - <?php echo $sitename; ?>" title="slider 2" width="1600" height="1068">
        </figure>

        <figure class="slick-banner__img">
            <img src="<?php echo $slider_3; ?>" alt="slider 3 - <?php echo $sitename; ?>" title="slider 3" width="1600" height="1068">
        </figure>
    </div>
</section>
