//* Activate shortcode function in Post Title
add_filter( 'the_title', 'do_shortcode' );

//* Shortcode to display the current year in WordPress
//* shortcode: [year]
add_shortcode( 'year' , 'current_year' );
    function current_year() {
    $year = date("Y");
    return "$year";
}

//* --------------------------------------------


