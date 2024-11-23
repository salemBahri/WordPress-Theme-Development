<?php get_header(); ?>
<!-- Single Page -->
 <section id="single" class="container">
    <div class="single-content">



        <?php if(have_posts()): ?>
            <?php while(have_posts()):?>
                <?php the_post();?>
                    <article class="card">
                        <div class="article-header">
                            <h1><?php the_title()?></h1>
                            <small><?php the_date()?> - <?php the_author()?></small>
                            <div class="post-categories">
                                <?php the_category(' ')?>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>
                            <?php the_content()?>
                            </p>
                        </div>
                    </article>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php get_template_part('pagination'); ?>
    </div>
    <?php get_sidebar()?>
 </section>


<?php get_footer(); ?>