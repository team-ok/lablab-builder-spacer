<?php

// options
$line = get_sub_field( 'lablab-divider-line' );


// output
if ( $line ){
	beans_open_markup_e( "lablab_divider_line", "div", array(
		"class" => "lablab-divider-line",
		) 
	);
	beans_close_markup_e( "lablab_divider_line", "div" );
}