Display Page Load Time in Wordpress
===================================

This is just a simple snippet code to display page load time in wordrpess sites.

It will generate a line of text in you page, like this line bellow 

`<!-- Page generated 184 queries in 1.7686 seconds ( 95.46% PHP, 4.54% MySQL ) -->`


The initial code is not mine. I've nicked it from this [blog](http://usefulmix.com/wordpress-page-load-statistics/).
I just a bit altered it for my preferences.


If anyone ever will come across this page. Here is how to use this thing.

1. Stick the content of the DisplayLoadTime.php file into your function.php file
2. Add line of code to wp-config.php `define( 'SAVEQUERIES', true );` [Codex](http://codex.wordpress.org/Editing_wp-config.php#Save_queries_for_analysis "Explanation of this variable at the Wordpress Codex") reference 
2. And then just insert `echo DisplayLoadTime();` somewhere in your theme (usually in the footer.php)

That's it!
