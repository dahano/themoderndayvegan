<?php get_header(); ?>

<div class="mainheader">



<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    </div><!--end post header-->



    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->


    <div class="post-footer">
    </div><!--end post footer-->


  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>    
    


    <div class="row">
        <div class="col-lg-8 col-sm-8">
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_content(); ?></p>   
        </div>

        <!-- Contact us information and Social Media Widgets-->
        <div class="col-lg-4 col-sm-4">
          <h2>Contact Us</h2>
      <address>
        <strong>Facebook & Twitter</strong><br>
        www.facebook.com/themoderndayvegan<br>
      www.twitter.com/themoderndayvegan<br>
      <abbr title="Email">E:</abbr> <a href="mailto:#">admin@themoderndayvegan.com</a>
      </address>
        </div>
    </div>

      <!--Home navigation (the Watermelon image) & the info under them-->
    <div class="home-navi">
      <h1>Check out some of our pages!</h1>
      <div id="veggie-navigation" class="cf">
        <nav>
          <ul> 
            <li><h2><a href="<?php echo get_permalink() ?>"> <?php the_title(); ?></h2></li>
            <li><a href="file:///Users/odahan/veganblog/moderndayvegan/blog.html">Blog</a></li>
            <li><a href="file:///Users/odahan/veganblog/moderndayvegan/recipe.html">Recipes</a></li>
            
          </ul> 
        </nav>
      </div>
      <div id="veggie-navigation-info" class="cf">
        <nav>
          <ul>
            <li><a href="file:///Users/odahan/veganblog/moderndayvegan/recipe.html"><h3>Recipes</h3></a>
              <p></p></li>
            <li><a href="file:///Users/odahan/veganblog/moderndayvegan/blog.html"><h3>Blog</h3></a>
              <p></p></li>
            <li><a href="file:///Users/odahan/veganblog/moderndayvegan/30daychallenge.html"><h3>30 Days</h3></a>
              <p></p></li>
          </ul>
        </nav>
      </div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
    