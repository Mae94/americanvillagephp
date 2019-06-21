<?php get_header();?>

    <!-- Main画像 -->
    <div class="top-image">
        <div class="main">
        <img src="<?php header_image(); ?>" alt="" class="background" width="1024px" height="448px"><br/>
        <p>進化し続ける「街」アメリカンビレッジマガジン</p>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="logo" width="242px" height="242px">
        <img src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" class="sign" alt="">
    </div>

    <!-- Articles -->
    <div class="img-container" >
            <h2>Latest Articles</h2>
          <ul class="img-children">
          <?php while(have_posts()): the_post();?>
             <li>
              
          <img src="<?php the_post_thumbnail_url();?>" alt="">
         <p><?php echo get_the_date() ?></p>
         <p><?php the_excerpt()?></p>
        <a class="readMore" href="">Read More</a>
             </li>
         <?php endwhile;?>
     
          </ul>
      </div>
      
      <?php get_footer();?>