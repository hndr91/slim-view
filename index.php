<?php
require 'vendor/autoload.php'; //composer autoload

//initiate the slim
$app = new \Slim\Slim(array(
  'view' => new \Slim\Views\Twig(),
  'templates.path' => './app/view'
));

//simple route
$app->get('/', function() use($app){
  $app->view()->setData(array(
    'title' => 'Template Title',
    'paragraf' => 'This is one liner paragraf',
    'sub' => 'Subtitle'
  ));
  $app->render('view2.html');
});

$app->get('/test', function(){
  echo "Test Route";
});

$app->run();
 ?>
