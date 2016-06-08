 <?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

    <?php get_template_part('widget-templates/hero'); ?>

    <?php get_template_part('widget-templates/statichero'); ?>

    <div class="wrapper" id="wrapper-index">
        
	   <div id="content" class="container-fluid">

            <div class="row">
           
    	       <div id="primary" class="content-area">
                   
                     <main id="main" class="site-main" role="main">
              
<div class="hello">
  <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 1 29.169 18.529" style="transform: matrix(1.03, 0, 0, 1.03, 0, 0); backface-visibility: hidden; transform-origin: 50% 50% 0px; cursor: move; transition: transform 200ms ease-in-out;">
 <g>
 <path d="M28.678,0.678L14.713,18.379c-0.16,0.201-0.495,0.201-0.658,0L0.088,0.678 C-0.009,0.549-0.027,0.381,0.04,0.233C0.111,0.089,0.26,0,0.414,0H28.35c0.16,0,0.31,0.089,0.378,0.233 C28.798,0.381,28.776,0.549,28.678,0.678z">
</path>
 </g>
 <defs>
<style type="text/css">
.XSVG svg g { fill:rgb(26, 115, 165); }</style>
</defs>
</svg>
 
 
<div class="text-wrap">
    <h1>The Right solution for managing your move to independence</h1>

    <p>For Financial Advisors, having the right strategic partner can make all the difference for long-term success
    </p> 
</div>

</div>
                     
                    
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'loop-templates/content', get_post_format() );
                                ?>

                        <?php endwhile; ?>
                        
                        <?php understrap_paging_nav(); ?>
                        
                    <?php else : ?>

                        <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                        
                    <?php endif; ?>
                        
                    </main><!-- #main -->
                   
    	       </div><!-- #primary -->
        
           
            </div><!-- .row -->
           
       </div><!-- Container end -->
        
    </div><!-- Wrapper end -->

<?php get_footer(); ?>
