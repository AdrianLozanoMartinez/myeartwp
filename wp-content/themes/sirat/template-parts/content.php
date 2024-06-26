<?php
/**
 * The template part for top header
 *
 * @package Sirat 
 * @subpackage sirat
 * @since Sirat 1.0
 */
?>
<?php 
  $sirat_archive_year  = get_the_time('Y'); 
  $sirat_archive_month = get_the_time('m'); 
  $sirat_archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box wow zoomInDown delay-1000" data-wow-duration="2s">
    <?php $sirat_theme_lay = get_theme_mod( 'sirat_blog_layout_option','Default');
    if($sirat_theme_lay == 'Default'){ ?>
      <div class="row m-0">
        <?php $sirat_blog_post_image_lay = get_theme_mod( 'sirat_blog_post_featured_image_option','Blog Post Image');
          if($sirat_blog_post_image_lay == 'Blog Post Image'){ ?>
            <?php if(has_post_thumbnail()) {?>
              <div class="box-image col-lg-6 col-md-6">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php } ?>
          <?php }
          if($sirat_blog_post_image_lay == 'Blog Post Image Color'){ ?>
          <div class="blog-post-image-color"></div>
        <?php }?>
        <div class="new-text <?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'sirat_toggle_postdate',true) == 1 || get_theme_mod( 'sirat_toggle_author',true) == 1 || get_theme_mod( 'sirat_toggle_comments',true) == 1 || get_theme_mod( 'sirat_toggle_time',true) == 1) { ?>
            <div class="post-info">
              <?php if( get_theme_mod( 'sirat_toggle_postdate',true) == 1 || get_theme_mod( 'sirat_toggle_postdate_hide_show',true) == 1) { ?>
                <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_postdate_icon','fas fa-calendar-alt')); ?>"></i><a href="<?php echo esc_url( get_day_link( $sirat_archive_year, $sirat_archive_month, $sirat_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span></span>
              <?php } ?>

              <?php if( get_theme_mod( 'sirat_toggle_author',true) == 1 || get_theme_mod( 'sirat_toggle_author_hide_show',true) == 1) { ?>
                <span class="entry-author"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_author_icon','far fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span></span>
              <?php } ?>

              <?php if( get_theme_mod( 'sirat_toggle_comments',true) == 1 || get_theme_mod( 'sirat_toggle_comments_hide_show',true) == 1) { ?>
                <span class="entry-comments"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_comments_icon','fas fa-comments')); ?>"></i><?php comments_number( __('0 Comment', 'sirat'), __('0 Comments', 'sirat'), __('% Comments', 'sirat') ); ?> </span><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span>
              <?php } ?>

              <?php if( get_theme_mod( 'sirat_toggle_time',true) == 1 || get_theme_mod( 'sirat_toggle_time_hide_show',true) == 1) { ?>
                <span class="entry-time"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_time_icon','far fa-clock')); ?>"></i><?php echo esc_html( get_the_time() ); ?></span>
              <?php }?>
              <?php echo esc_html (sirat_edit_link()); ?>
            </div>
          <?php } ?>
          <div class="entry-content">
            <?php $sirat_theme_lay = get_theme_mod( 'sirat_excerpt_settings','Excerpt');
              if($sirat_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($sirat_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <p><?php $sirat_excerpt = get_the_excerpt(); echo esc_html( sirat_string_limit_words( $sirat_excerpt, esc_attr(get_theme_mod('sirat_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('sirat_excerpt_suffix',''));?></p>
                <?php }?>
              <?php }?>
          </div>
          <?php if( get_theme_mod('sirat_button_text','Read More') != ''){ ?>
            <div class="more-btn">
              <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('sirat_button_text',__('Read More','sirat')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sirat_button_text',__('Read More','sirat')));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }else if($sirat_theme_lay == 'Center'){ ?>
      <div class="new-text">
        <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'sirat_featured_image_hide_show',true) == 1) { ?>
          <?php $sirat_blog_post_image_lay = get_theme_mod( 'sirat_blog_post_featured_image_option','Blog Post Image');
            if($sirat_blog_post_image_lay == 'Blog Post Image'){ ?>
              <div class="box-image">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php }
            if($sirat_blog_post_image_lay == 'Blog Post Image Color'){ ?>
              <div class="blog-post-image-color"></div>
            <?php }?>
        <?php } ?>
        <?php if( get_theme_mod( 'sirat_toggle_postdate',true) == 1 || get_theme_mod( 'sirat_toggle_author',true) == 1 || get_theme_mod( 'sirat_toggle_comments',true) == 1 || get_theme_mod( 'sirat_toggle_time',true) == 1) { ?>
          <div class="post-info">
            <?php if( get_theme_mod( 'sirat_toggle_postdate',true) == 1 || get_theme_mod( 'sirat_toggle_postdate_hide_show',true) == 1) { ?>
              <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_postdate_icon','fas fa-calendar-alt')); ?>"></i><a href="<?php echo esc_url( get_day_link( $sirat_archive_year, $sirat_archive_month, $sirat_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span></span>
            <?php } ?>

            <?php if( get_theme_mod( 'sirat_toggle_author',true) == 1 || get_theme_mod( 'sirat_toggle_author_hide_show',true) == 1) { ?>
              <span class="entry-author"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_author_icon','far fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span></span>
            <?php } ?>

            <?php if( get_theme_mod( 'sirat_toggle_comments',true) == 1 || get_theme_mod( 'sirat_toggle_comments_hide_show',true) == 1) { ?>
              <span class="entry-comments"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_comments_icon','fas fa-comments')); ?>"></i><?php comments_number( __('0 Comment', 'sirat'), __('0 Comments', 'sirat'), __('% Comments', 'sirat') ); ?> </span><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span>
            <?php } ?>

            <?php if( get_theme_mod( 'sirat_toggle_time',true) == 1 || get_theme_mod( 'sirat_toggle_time_hide_show',true) == 1) { ?>
              <span class="entry-time"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_time_icon','far fa-clock')); ?>"></i><?php echo esc_html( get_the_time() ); ?></span>
            <?php }?>
            <?php echo esc_html (sirat_edit_link()); ?>
          </div>
        <?php } ?>
        <div class="entry-content">
          <?php $sirat_theme_lay = get_theme_mod( 'sirat_excerpt_settings','Excerpt');
            if($sirat_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($sirat_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <p><?php $sirat_excerpt = get_the_excerpt(); echo esc_html( sirat_string_limit_words( $sirat_excerpt, esc_attr(get_theme_mod('sirat_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('sirat_excerpt_suffix',''));?></p>
              <?php }?>
            <?php }?>
        </div>
        <?php if( get_theme_mod('sirat_button_text','Read More') != ''){ ?>
          <div class="more-btn">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('sirat_button_text',__('Read More','sirat')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sirat_button_text',__('Read More','sirat')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($sirat_theme_lay == 'Left'){ ?>
      <div class="new-text">
        <?php if( get_theme_mod( 'sirat_featured_image_hide_show',true) == 1) { ?>
          <?php $sirat_blog_post_image_lay = get_theme_mod( 'sirat_blog_post_featured_image_option','Blog Post Image');
            if($sirat_blog_post_image_lay == 'Blog Post Image'){ ?>
              <div class="box-image">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php }
            if($sirat_blog_post_image_lay == 'Blog Post Image Color'){ ?>
              <div class="blog-post-image-color"></div>
            <?php }?>
        <?php } ?>
        <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'sirat_toggle_postdate',true) == 1 || get_theme_mod( 'sirat_toggle_author',true) == 1 || get_theme_mod( 'sirat_toggle_comments',true) == 1 || get_theme_mod( 'sirat_toggle_time',true) == 1) { ?>
          <div class="post-info">
            <?php if( get_theme_mod( 'sirat_toggle_postdate',true) == 1 || get_theme_mod( 'sirat_toggle_postdate_hide_show',true) == 1) { ?>
              <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_postdate_icon','fas fa-calendar-alt')); ?>"></i><a href="<?php echo esc_url( get_day_link( $sirat_archive_year, $sirat_archive_month, $sirat_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span></span>
            <?php } ?>

            <?php if( get_theme_mod( 'sirat_toggle_author',true) == 1 || get_theme_mod( 'sirat_toggle_author_hide_show',true) == 1) { ?>
              <span class="entry-author"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_author_icon','far fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span></span>
            <?php } ?>

            <?php if( get_theme_mod( 'sirat_toggle_comments',true) == 1 || get_theme_mod( 'sirat_toggle_comments_hide_show',true) == 1) { ?>
              <span class="entry-comments"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_comments_icon','fas fa-comments')); ?>"></i><?php comments_number( __('0 Comment', 'sirat'), __('0 Comments', 'sirat'), __('% Comments', 'sirat') ); ?> </span><span><?php echo esc_html(get_theme_mod('sirat_meta_field_separator','|'));?></span>
            <?php } ?>
            
            <?php if( get_theme_mod( 'sirat_toggle_time',true) == 1 || get_theme_mod( 'sirat_toggle_time_hide_show',true) == 1) { ?>
              <span class="entry-time"> <i class="<?php echo esc_attr(get_theme_mod('sirat_toggle_time_icon','far fa-clock')); ?>"></i><?php echo esc_html( get_the_time() ); ?></span>
            <?php }?>
            <?php echo esc_html (sirat_edit_link()); ?>
          </div>
        <?php } ?>
        <div class="entry-content">
          <?php $sirat_theme_lay = get_theme_mod( 'sirat_excerpt_settings','Excerpt');
            if($sirat_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($sirat_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <p><?php $sirat_excerpt = get_the_excerpt(); echo esc_html( sirat_string_limit_words( $sirat_excerpt, esc_attr(get_theme_mod('sirat_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('sirat_excerpt_suffix',''));?></p>
              <?php }?>
            <?php }?>
        </div>
        <?php if( get_theme_mod('sirat_button_text','Read More') != ''){ ?>
          <div class="more-btn">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('sirat_button_text',__('Read More','sirat')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sirat_button_text',__('Read More','sirat')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</article>