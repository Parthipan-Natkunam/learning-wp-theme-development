<?php get_header(); ?> 
   <main class="posts-list">
        <?php if(have_posts()): ?>
            <div class="container">
                <?php while(have_posts()) : the_post() ?>
                    <article>
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title();?>
                            </a>
                        </h3>
                        <div class="meta">
                            Created By: <?php the_author(); ?> on <?php the_time('F j, Y g:i a');?>
                        </div>
                        <?php the_content(); ?>
                        <br/>
                        <a class="readmore-btn" href="<?php the_permalink();?>"> Read More </a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="container">
                <?php echo wpautop('Sorry, no posts found.'); ?>
            </div>
        <?php endif; ?>
   </main>
<?php get_footer(); ?>