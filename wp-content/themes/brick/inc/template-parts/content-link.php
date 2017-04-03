<div class="blog-post">
<?php $class = "date-margin-top"; ?>
<?php if (has_post_thumbnail()): ?>
    <?php $class = ""; ?>
 <?php endif ?>
<div class="blog-image-n-meta <?php echo esc_attr($class); ?>">

<?php $class = "date-margin-top"; ?>
<?php if (has_post_thumbnail()): ?>
<?php the_post_thumbnail('brick_blog'); ?>
<?php $class = ""; ?>
 <?php endif ?>
    <div class="post-format-n-date ">
        <?php if (has_post_thumbnail()): ?>
        <span class="post-format"><a href="<?php the_permalink(); ?>"><i class="fa fa-image"></i></a></span>
        <?php endif ?>
        <?php $date = get_the_date(); $dates = preg_split('/[\s,\/\-]+/', $date );?>
        <span class="post-date"><a href="<?php the_permalink(); ?>"><span class="date"><?php echo esc_html($dates[0]); ?></span><span class="month"><?php echo esc_html($dates[1]); ?></span><span class="month"><?php echo esc_html($dates[2]); ?></span></a></span>
     </div>
</div>   
    <div class="blog-content">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="post-meta">
            <span class="meta author"><span class="fa fa-user"></span><a href="#"><?php esc_html_e('By ','brick' ); the_author(); ?></a></span>
            <span class="meta tags"><span class="fa fa-tags"></span><?php the_tags( ); ?></span>
            <span class="meta like"><?php if ( shortcode_exists( 'brickliker')) echo do_shortcode('[brickliker]'); ?></span>
            <span class="meta comments"><a href="#"><?php comments_number( '', '', '<span class="fa fa-comments"></span> %' ); ?></a></span>
        </div>
        <div class="editor-content">
            <?php the_content(); ?> 
            <?php wp_link_pages(); ?>    
        </div>
    </div>
</div>      