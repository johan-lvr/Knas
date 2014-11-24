<?php 
/**
 * This is a Knas pagecontroller.
 *
 */
// Include the essential config-file which also creates the $knas variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$knas['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Knas container.
$knas['title'] = "Visa källkod";

$knas['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Knas.
include(KNAS_THEME_PATH);