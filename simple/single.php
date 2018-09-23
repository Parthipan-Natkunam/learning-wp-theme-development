<?php get_header(); ?> 
   <main class="single-post">
        <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post() ?>
                <div class="container">
                    <h3>
                        <?php the_title();?>
                    </h3>
                    <div class="meta">
                        Created By: <?php the_author(); ?> on <?php the_time('F j, Y g:i a');?>
                    </div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="container">
                <?php echo wpautop('Sorry, no posts found.'); ?>
            </div>
        <?php endif; ?>
   </main>
<?php get_footer(); ?>