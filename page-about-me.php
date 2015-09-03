<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    
    <article class="post page">
        <nav class="site-nav children-links clearfix">            <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_anc_id());?>"><?php echo get_the_title(get_top_anc_id());?></a></span>
            <ul>
                <?php 
                    $args = array(
                        'child_of' => get_top_anc_id() ,
                        'title_li' => ''
                         );
                ?>

                <?php wp_list_pages($args); ?>
            </ul>
        </nav>

        <!-- column-container -->
        <div class="column-container clearfix">
            
            <!-- title-column -->
            <div class="title-column">
                <h2><?php the_title(); ?></h2>
            </div><!-- /title-column -->
            
            <!-- text-column -->
            <div class="text-column">
                <?php the_content(); ?>
            </div><!-- /text-column -->
            
        </div><!-- /column-container -->
        
        
    </article>
    
    <?php endwhile;
    
    else :
        echo '<p>No content found</p>';
    
    endif;
    
get_footer();

?>