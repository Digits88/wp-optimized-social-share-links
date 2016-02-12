<?php

function social_share_links_shortcode() {
	$title = urlencode(the_title());
	$url = urlencode(the_permalink());
	$twitterName = 'heatherthedev';
	$twitterLink="https://twitter.com/intent/tweet?text=$title&url=$url&via=$twitterName";
	$facebookLink = "https://www.facebook.com/sharer/sharer.php?u=$url";
	$linkedinLink = "https://www.linkedin.com/shareArticle?mini=true&url=$url&title=$title";
	$returnString = '<div class="social-share-link-container">';
	$returnString = $returnString . '<ul>';
	$returnString = $returnString . '<li class="title">Share Post:</li>';
	$returnString = $returnString . "<li class='link twitter'><a href='$twitterLink' alt='Share $title on Twitter'><i class='fa fa-twitter'></i></a></li>";
	$returnString = $returnString . "<li class='link linkedin'><a href='$linkedinLink' alt='Share $title on LinkedIn'><i class='fa fa-linkedin'></i></a></li>";
	$returnString = $returnString . "<li class='link facebook'><a href='$facebookLink' alt='Share $title on Facebook'><i class='fa fa-facebook'></i></a></li>";
	$returnString = $returnString . '</ul></div>';
	return $returnString;
}

add_shortcode('social-share-links', 'social_share_links_shortcode');

?>
