<?php
//adds header
get_header();
?>

<article class="content px-3 py-5 p-md-5">
// the if loop looks to see if there are posts and content, then adds the content to the front page
<?php
if( have_posts() ){
	while (have_posts()){
		the_post();
		the_content();
	}
}
?>

</article>

<?php
//adds footer
get_footer();
?>