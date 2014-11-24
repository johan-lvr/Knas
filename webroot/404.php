<?php 
/**
 * This is a Knas pagecontroller.
 *
 */
// Include the essential config-file which also creates the $knas variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Knas container.
$knas['title'] = "404";
$knas['header'] = "";
$knas['main'] = "This is a Knas 404. Document is not here.";
$knas['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Knas.
include(KNAS_THEME_PATH);
