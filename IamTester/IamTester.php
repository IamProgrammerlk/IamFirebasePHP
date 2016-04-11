<?php

// !important:: if you didn't set any of optional parameters for IamFirebasePHP, it's always
// use default options or last options you made previously.    

require_once '../IamSource/IamFirebasePHP/IamClassAutoloader.php';

use IamProgrammerlk\IamFirebasePHP\IamFirebasePHP;

	$fb  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
	]);
	
	$fbnode01 = $fb->IamSetNode('new node path is / here / 01');
	echo '</br>From "$fbnode01->IamGet" -->> ' . $fbnode01->IamGet();

	$fbnode02 = $fb->IamSetNode('new node path is / here / 02');
	echo '</br>From "$fbnode02->IamGet" -->> ' . $fbnode02->IamGet();
