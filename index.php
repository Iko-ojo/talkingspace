<?php require('core/init.php');?>

<?php 
// Create topic object
$topic = new Topic;

// GEt template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign vars
$template->topics = $topic->getAllTopics();

// Display template
echo $template;