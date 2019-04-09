<?php

//Insert ads after second paragraph of single post content.
add_filter( 'the_content', 'alp_insert_post_ads' );            
function alp_insert_post_ads( $content ) {


	$desktop 	= get_field('desktop','option');
	$mobile 	= get_field('mobile', 'option');

	if ( is_single() && ! is_admin() ) {
	    return alp_insert_after_paragraph( $desktop, $mobile, $content );
	}
	 
	return $content;
}
  
// Parent Function that makes the magic happen
function alp_insert_after_paragraph( $desktop, $mobile, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );

    foreach ($desktop as $key => $desk) {
    	foreach ($paragraphs as $index => $paragraph) {
    	 
    	        if ( trim( $paragraph ) ) {
    	            $paragraphs[$index] .= $closing_p;
    	        }
    	 
    	        if ( $desk['paragraph'] == $index + 1 ) {

    	        	if ('image' == 'image') {
    	        		$paragraphs[$index] .= '<img src="'.$desk['image']['url'].'" />';
    	        	}
    	          
    	        }
    	    }
    }
     
    return implode( '', $paragraphs );
}