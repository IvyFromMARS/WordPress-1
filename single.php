<?php 
	if (in_category('1')) {
		include (TEMPLATEPATH . '/single-category-name-1.php');
	} 
	elseif ( in_category('2') ) {
		include(TEMPLATEPATH . '/single-category-name-2.php');
	}
	else { 
		include (TEMPLATEPATH . '/single-category-name-3.php'); 
	} 
	
?>
