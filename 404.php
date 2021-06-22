<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Inconf
 */

get_header( 'error' ); 
$page_title = get_field('404_page_title', 'option');
$page_sub_title = get_field('404_page_subtitle', 'option');
$text_color = get_field('404_text_color', 'option') ? get_field('404_text_color', 'option') : "#000000";
$background_image = get_field('404_background_image', 'option');
$background_color = get_field('404_background_color', 'option') ? get_field('404_background_color', 'option') : "#dd3333";

echo '
    <style>
      body.error404 h1, .error404 h3, body.error404 a, body.error404.light-theme {
      color: '.$text_color.';
      }
      body.error404 a, body.error404.light-theme a { border-bottom: 1px solid '.$text_color.'; }

      body.error404, body.error404.light-theme {
          color: '.$text_color.';
         ';
if ($background_image){
        echo' 
        background-image: url('.$background_image['url'].');
        background-repeat: no-repeat; 
        background-position: left top; 
        background-size: cover;';
}else{
  echo '
        background-color: '. $background_color .'
  ';
}

  echo '
      }
    </style>';
?>

  <div class="container-fluid h-100">
    <div class="row justify-content-center cover-panel">
      <div class="col-lg-5 col-sm-10 px-5 text-center cover-content">
          <?php if ($page_title): ?>
            <h1><?php echo $page_title; ?></h1>
          <?php endif; ?>

          <?php if ($page_sub_title): ?>
            <h3><?php echo $page_sub_title; ?></h3>
          <?php endif; ?>

          <p><a href="/">Go Home</a></p>
        
        </div>
      </div>
    </div>
  </div>

<?php
get_footer( 'access' );
