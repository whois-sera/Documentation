<?php 

function shortcode_test($atts = [])
{

    // Gestion param post / get
    $my_post_param = isset($_POST['my_post_param']) ? sanitize_text_field($_POST['my_post_param']) : null;

    // Gestion param shortcode
    $programme_atts = shortcode_atts(
        array(
            'my_param' => '',
        ), $atts
    );

    // Pagination
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // WP_QUERY
    $args = [
        'post_type' => array(
            'programmes'
        ),
        'posts_per_page' => 9,
        'paged' => $paged,
        'order' => 'DESC'
    ];

    // Taxonomy query exemple
    if ($programme_atts['my_param'] != '') {
        $tax_query = array(
            array(
                'taxonomy' => 'my_param',
                'field' => 'slug',
                'terms' => $atts['my_param'],
            ),
        );
        $args['tax_query'] = $tax_query;
    }

    // Search on multiple fields (LIKE) Exemple
    if ($my_post_param != null) {
        $meta_query = array(
            'relation' => 'OR',
            array(
                'key' => 'field1',
                'value' => $my_post_param,
                'compare' => 'LIKE',
            ),
            array(
                'key' => 'field2',
                'value' => $my_post_param,
                'compare' => 'LIKE',
            ),
            array(
                'key' => 'field3',
                'value' => $my_post_param,
                'compare' => 'LIKE',
            )
        );
        $args['meta_query'] = $meta_query;
    }

    // The Query
    $the_query = new WP_Query($args);

    // Start output buffering
    ob_start();

    ?>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                
    <?php

    // The Loop
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {

            $the_query->the_post();

            $terms = get_the_terms(get_the_ID(), 'my_taxonomy');

    ?>

            <!-- Content -->

    <?php

        }

    ?>
            <div class="pagination_navigation">

            <?php
                $default_posts_per_page = get_option( 'posts_per_page' );
                if (get_next_posts_link(null,$default_posts_per_page)) { 
            ?>

                <div class="next_posts">
                    <?php next_posts_link( 'Programmes Suivant >', $the_query->max_num_pages ); ?>
                </div>

            <?php 
                } 
                if (get_previous_posts_link()) { 
            ?>

                <div class="prev_posts">
                    <?php previous_posts_link( '< Programmes Precedants' ); ?> 
                </div>

            <?php
                } 
            ?>

            </div>

    <?php

    } else {
        echo "<p>Aucun contenu n'a été trouvé pour cette demande :/</p>";
    }
    ?>

            </div>
        </div>
    </div>

    <?php

        wp_reset_postdata();
        return ob_get_clean();
}
add_shortcode('test', 'shortcode_test');