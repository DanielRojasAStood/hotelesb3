<?php
$sitename       = get_bloginfo('name');
// Obtener todos los posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Obtener todos los posts
);

$all_posts = get_posts($args);

// Seleccionar aleatoriamente 3 posts
$random_posts = array_rand($all_posts, 5);
?>

    <!-- Loop de posts aleatorios -->
    <section>
        <?php get_template_part('template-parts/content', 'title', array('title' => 'Artículos de Interés para Ti', 'class' => 'h4', 'heading_level' => 'h3'));?>
        <?php 
        foreach ($random_posts as $post_index) :
            $post = $all_posts[$post_index];
            setup_postdata($post);
            ?>
            <article id="post-<?php the_ID(); ?>" class="customCardRecommended">
                <!-- Contenido del post -->
                <a href="<?php the_permalink(); ?>" title="<?php echo the_title() . ' - ' . $sitename ?>">
                    <figure class="customCardRecommended__thumbnail">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        } else {
                            echo '<img src="' . IMG_BASE . 'placeholde.png' . '" alt="Placeholder Image - $sitename" title="Placeholder Image">';
                        }
                        ?>
                    </figure>
                    <div class="customCardRecommended__info">
                        <?php $name = get_the_title() ?>
                        <?php get_template_part('template-parts/content', 'title', array('title' => $name, 'class' => 'small', 'heading_level' => 'h4'));?>
                        <p class="small pt-5"><?php echo esc_html(get_the_date('F j, Y')); ?></p>
                        <p class="small">Leer más</a>
                    </div>
                </a>
            </article>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </section>