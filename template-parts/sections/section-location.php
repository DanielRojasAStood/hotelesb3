<?php 
$sitename       = get_bloginfo('name');
$title          = get_field('title_location');
$heading_level  = 'h2';
$group_location = get_field('group_location');

$title     = isset($title) ? esc_html($title) : '';
$map       = isset($group_location['map']) ? $group_location['map'] : '';

$title_1   = isset($group_location['cta_1']['title']) ? esc_attr($group_location['cta_1']['title']) : '';
$cta_1     = isset($group_location['cta_1']['url']) ? esc_url($group_location['cta_1']['url']) : '';
$target_1  = isset($group_location['cta_1']['target']) ? esc_attr($group_location['cta_1']['target']) : '';
$copy_1    = isset($group_location['copy_1']) ? $group_location['copy_1'] : '';

$title_2   = isset($group_location['cta_2']['title']) ? esc_attr($group_location['cta_2']['title']) : '';
$cta_2     = isset($group_location['cta_2']['url']) ? esc_url($group_location['cta_2']['url']) : '';
$target_2  = isset($group_location['cta_2']['target']) ? esc_attr($group_location['cta_2']['target']) : '';
$copy_2    = isset($group_location['copy_2']) ? $group_location['copy_2'] : '';
?>
<section class="customLocation">
    <?php get_template_part('template-parts/content', 'title', array('title' => $title, 'class' => 'h2 text-center', 'heading_level' => $heading_level));?>
    <div class="container--medium">
        <div class="customLocation__grid">
            <div class="customLocation__col">
                <?php echo $map; ?>
            </div>
            <div class="customLocation__col">
                <div class="customLocation__content">
                    <div class="copy text-center">
                        <?php echo $copy_1 ; ?>
                    </div>
                    <a href="<?php echo $cta_1 ; ?>" class="button button--red" title="<?php echo $title_1 ; ?>" target="<?php echo $target_1 ; ?>">
                        <?php echo $title_1 ; ?>
                    </a>
                    <div class="copy text-center">
                        <?php echo $copy_2 ; ?>
                    </div>
                    <a href="<?php echo $cta_2 ; ?>" class="button button--red" title="<?php echo $title_2 ; ?>" target="<?php echo $target_2 ; ?>">
                        <?php echo $title_2 ; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>