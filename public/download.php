<?php

/*
	Creator: Oliver Martinez A.K.A. NemOry
	Email, facebook, paypal: nemoryoliver@gmail.com
	Twitter: @NemOry
	if you want to contribute to the System or copy the system and build your own.
	I hope you can please just notify me 1st. :)
*/

require_once("../includes/initialize.php");

$file = 'groups/'.Group::get_by_id($session->user_group_id)->name.'/files/quiz.zip';

echo $file;

 ?>
<a href="<?php echo $file; ?>">Download</a>