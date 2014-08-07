function DisplatLoadTime() {

    if (current_user_can('level_10'))
    {
    global $wpdb;
     
    // Get the total page generation time
    $totaltime = timer_stop( false, 22 );
     
    // Calculate the time spent on MySQL queries by adding up the time spent on each query
    $mysqltime = 0;
    // if there are indeed mysql queries then
    if ($wpdb->queries != null)
    foreach ( $wpdb->queries as $query )
    $mysqltime = $mysqltime + $query[1];
     
    // The time spent on PHP is the remainder
    $phptime = $totaltime - $mysqltime;
     
    // Create the percentages
    $mysqlper = number_format_i18n( $mysqltime / $totaltime * 100, 2 );
    $phpper = number_format_i18n( $phptime / $totaltime * 100, 2 );
     
    // Output the stats
    echo '<!-- Page generated ' . get_num_queries() . ' queries in ' . number_format_i18n( $totaltime, 4 ) . " seconds ( {$phpper}% PHP, {$mysqlper}% MySQL ) -->";
    }
}
