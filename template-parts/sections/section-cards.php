<?php 
$sitename    = get_bloginfo('name');
$group_cards = get_field('group_cards');

$img_1       = isset($group_cards['image_1']) ? esc_url($group_cards['image_1']) : '';
$title_1     = isset($group_cards['link_1']['title']) ? esc_attr($group_cards['link_1']['title']) : '';
$link_1      = isset($group_cards['link_1']['url']) ? esc_url($group_cards['link_1']['url']) : '';
$target_1    = isset($group_cards['link_1']['target']) ? esc_attr($group_cards['link_1']['target']) : '';
$copy_1      = isset($group_cards['copy_1']) ? esc_attr($group_cards['copy_1']) : '';
$alt_1       = isset($group_cards['link_1']['title']) ? esc_attr($group_cards['link_1']['title'] . ' - ' . $sitename) : '';

$img_2       = isset($group_cards['image_2']) ? esc_url($group_cards['image_2']) : '';
$title_2     = isset($group_cards['link_2']['title']) ? esc_attr($group_cards['link_2']['title']) : '';
$link_2      = isset($group_cards['link_2']['url']) ? esc_url($group_cards['link_2']['url']) : '';
$target_2    = isset($group_cards['link_2']['target']) ? esc_attr($group_cards['link_2']['target']) : '';
$copy_2      = isset($group_cards['copy_2']) ? esc_attr($group_cards['copy_2']) : '';
$alt_2       = isset($group_cards['link_2']['title']) ? esc_attr($group_cards['link_2']['title'] . ' - ' . $sitename) : '';

$img_3       = isset($group_cards['image_3']) ? esc_url($group_cards['image_3']) : '';
$title_3     = isset($group_cards['link_3']['title']) ? esc_attr($group_cards['link_3']['title']) : '';
$link_3      = isset($group_cards['link_3']['url']) ? esc_url($group_cards['link_3']['url']) : '';
$target_3    = isset($group_cards['link_3']['target']) ? esc_attr($group_cards['link_3']['target']) : '';
$copy_3      = isset($group_cards['copy_3']) ? esc_attr($group_cards['copy_3']) : '';
$alt_3       = isset($group_cards['link_3']['title']) ? esc_attr($group_cards['link_3']['title'] . ' - ' . $sitename) : '';

$img_4       = isset($group_cards['image_4']) ? esc_url($group_cards['image_4']) : '';
$title_4     = isset($group_cards['link_4']['title']) ? esc_attr($group_cards['link_4']['title']) : '';
$link_4      = isset($group_cards['link_4']['url']) ? esc_url($group_cards['link_4']['url']) : '';
$target_4    = isset($group_cards['link_4']['target']) ? esc_attr($group_cards['link_4']['target']) : '';
$copy_4      = isset($group_cards['copy_4']) ? esc_attr($group_cards['copy_4']) : '';
$alt_4       = isset($group_cards['link_4']['title']) ? esc_attr($group_cards['link_4']['title'] . ' - ' . $sitename) : '';


?>
<section class="customCards">
    <div class="customCards__item">
        <figure class="customCards__img">
            <img src="<?php echo $img_1 ?>" alt="<?php echo $alt_1; ?>" title="<?php echo $title_1; ?>" width="1024" height="683">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_1; ?></h2>
            <p class="h3"><?php echo $copy_1; ?></p>
            <a class="button button--transparent" href="<?php echo $link_1; ?>" target="<?php echo $target_1; ?>" title="<?php echo $alt_1; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
    <div class="customCards__item">
        <figure class="customCards__img">
            <img src="<?php echo $img_2 ?>" alt="<?php echo $alt_2; ?>" title="<?php echo $title_2; ?>" width="1024" height="683">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_2; ?></h2>
            <p class="h3"><?php echo $copy_2; ?></p>
            <a class="button button--transparent" href="<?php echo $link_2; ?>" target="<?php echo $target_2; ?>" title="<?php echo $alt_2; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
    <div class="customCards__item">
        <figure class="customCards__img">
            <img src="<?php echo $img_3 ?>" alt="<?php echo $alt_3; ?>" title="<?php echo $title_3; ?>" width="1024" height="683">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_3; ?></h2>
            <p class="h3"><?php echo $copy_3; ?></p>
            <a class="button button--transparent" href="<?php echo $link_3; ?>" target="<?php echo $target_3; ?>" title="<?php echo $alt_3; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
    <div class="customCards__item">
        <figure class="customCards__img">
            <img src="<?php echo $img_4 ?>" alt="<?php echo $alt_4; ?>" title="<?php echo $title_4; ?>" width="1024" height="683">
        </figure>
        <figcaption class="customCards__copy">
            <h2 class="h2"><?php echo $title_4; ?></h2>
            <p class="h3"><?php echo $copy_4; ?></p>
            <a class="button button--transparent" href="<?php echo $link_4; ?>" target="<?php echo $target_4; ?>" title="<?php echo $alt_4; ?>">
                CONOCE MÁS
            </a>
        </figcaption>
    </div>
</section>
