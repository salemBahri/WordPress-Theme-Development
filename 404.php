<?php get_header(); ?>

<header id="main-header">
<div class="container">
    <h1>Sorry ! Page Not Found</h1>
    <?php get_search_form();?>
</div>
</header>



    <section id="blog-posts">
        <div id="latest-blog-posts">Latest Blog Posts</div>
        <div class="container posts-container">
        <?php $the_query=new WP_Query('posts_per_page=4');?>
        <?php if($the_query->have_posts()):?>
            <?php while ($the_query->have_posts()) :$the_query-> the_post();?>
           
           
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
        <?php else:?>
            <p style="text-align: center;color: red;font-weight: bold;font-size: 2rem;"><?php echo "No Posts finded !!"?></p>
        <?php endif;?>    
                


        </div>
        <?php get_template_part('pagination'); ?>
    </section>





<?php get_footer(); ?>