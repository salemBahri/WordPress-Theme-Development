<?php get_header(); ?>

<header id="main-header">
<div class="container">
    <h1><?php single_term_title()?></h1>
    <p><?php the_archive_description()?></p>
</div>
</header>
<h2>Hello you in index page</h2>


    <section id="blog-posts">
        <div class="container posts-container">
            <?php while (have_posts()) :the_post();?>
           
           
            <article class="card">

            <?php if (has_post_thumbnail()):?>
                <a href="<?php the_permalink();?>">
                     <?php the_post_thumbnail('medium');?>
                </a>
                    <?php else: ?>
                        <a href="<?php the_permalink();?>">
                        <img src="https://via.placeholder.com/300" alt="">
                        </a>
                    <?php endif;?>

                <div>
                <h3>
                    <a href="<?php the_permalink_rss()?>">
                    <?php the_title(); ?>
                    </a>
                </h3>
                <p><?php the_excerpt(); ?></p>
                <div class="post-categories">
                <?php the_category(' ')?>
                </div>
            </div>
            </article>

            
            <?php endwhile;?>
        </div>
        <?php get_template_part('pagination'); ?>
    </section>





<?php get_footer(); ?>