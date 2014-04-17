<?php

require ('libs/Slim/Slim.php');

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'mode'      => 'development',
    'debug'     => true,
));

$app->get('/', function() use ($app) {
    echo '<h2>Home page</h2>';
    
    // urlFor() is generating the url with site_2.0 which works but I don't want to see that folder...
    echo ("<a href='" . $app->urlFor('pag1') . "'>Page 1</a>");
});


$app->get('/page1', function() use ($app) {
    echo '<h2>Page 1</h2>';    
})->name('pag1');

$app->run();
