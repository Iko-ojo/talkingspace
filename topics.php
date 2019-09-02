<?php require('core/init.php');?>

<?php 
// GEt template & Assign Vars
$template = new Template('templates/topics.php');

//Assign vars
$template->heading = 'This is a template heading';

// Display template
echo $template;