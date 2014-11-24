<?php 
/**
 * This is a Knas pagecontroller.
 *
 */
// Include the essential config-file which also creates the $knas variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$knas['stylesheets'][]        = 'css/slideshow.css';
$knas['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Knas container.
$knas['title'] = "Slideshow för att testa JavaScript i Knas";

$knas['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg", "me-2.jpg", "me-4.jpg", "me-6.jpg"]'>
<img src='img/me/me-6.jpg' width='950px' height='180px' alt='Me'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur Knas fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of Knas.
include(KNAS_THEME_PATH);
