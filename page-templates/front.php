<?php
/*
Template Name: Front
*/
get_header(); 

$pageID = get_the_ID();

$thumb_id = get_post_thumbnail_id( $pageID );
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$featuredImage = $thumb_url_array[0];

$heroHeaderText = get_post_meta($pageID, 'headerText', true);
$heroParaText = get_post_meta($pageID, 'headerParagraph', true);

?>

<section class="hero" style="background-image: url('<?php echo $featuredImage;?>');">
	<div class="hero_detail">
		<h2><?php echo $heroHeaderText; ?></h2>
		<p class="hero_paragraph"><?php echo $heroParaText; ?></p>
	</div>
</section>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="row section" role="main">
	<div <?php post_class('column') ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</div>
</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>



<?php get_footer();
