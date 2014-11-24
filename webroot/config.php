<?php
/**
 * Config-file for Knas. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Knas paths.
 *
 */
define('KNAS_INSTALL_PATH', __DIR__ . '/..');
define('KNAS_THEME_PATH', KNAS_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(KNAS_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Knas variable.
 *
 */
$knas = array();


/**
 * Site wide settings.
 *
 */
$knas['lang']         = 'sv';
$knas['title_append'] = ' | Knas en webbtemplate';

$knas['header'] = <<<EOD
<img class='sitelogo' src='img/knas.png' alt='Knas Logo'/>
<span class='sitetitle'>Knas webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$knas['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$knas['stylesheet'] = 'css/style.css';
$knas['stylesheets'] = array('css/style.css');
$knas['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$knas['modernizr'] = 'js/modernizr.js';
$knas['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$knas['jquery'] = null; // To disable jQuery
$knas['javascript_include'] = array();
//$knas['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$knas['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
