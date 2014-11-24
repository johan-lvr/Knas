<?php 
/**
 * This is a Knas pagecontroller.
 *
 */
// Include the essential config-file which also creates the $knas variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Knas container.
$knas['title'] = "Hello World";

$knas['header'] = <<<EOD
<img class='sitelogo' src='img/knas.png' alt='Knas Logo'/>
<span class='sitetitle'>Knas webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$knas['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Knas ser ut och fungerar.</p>
EOD;

$knas['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Knas.
include(KNAS_THEME_PATH);
