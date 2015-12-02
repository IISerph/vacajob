<?php function movie_reviews_init() {
    $args = array(
      'label' => 'Movies',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'moviereviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'movies', $args );
    flush_rewrite_rules();
}
add_action( 'init', 'movie_reviews_init' );
?>


<?php
// WP_Query arguments
$args = array (
    'post_type'              => array( 'movies' ),
    'posts_per_page'         => '5',
);

// The Query
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
?>
<h1 class="movie-title"><?php the_permalink(); ?></h1>
<?php endwhile; ?>