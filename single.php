<?php 
  if (in_category('4')) {
		include (TEMPLATEPATH . '/single-blog.php');
	} 
	elseif ( in_category('5') ) {
		include(TEMPLATEPATH . '/single-case-studies.php');
	}
	else { 
		include (TEMPLATEPATH . '/single-events.php'); 
	} 
?>;
