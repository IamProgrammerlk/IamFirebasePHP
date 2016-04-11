<pre>

// !important:: if you didn't set any of optional parameters for IamFirebasePHP, it's always
// use default options or last options you made previously.    

// option 03 - use IamFirebase custom way
	$Firebace03  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
	]);
	
	$Firebace03->IamSetTimeout(50);
	$Firebace03->IamSetResponseHandler('cURL');
	$Firebace03->IamSetNodePath('/example/Firebace03/Node01');
	$Firebace03_Json_Response01 = $Firebace03->IamNode->IamGet();
	
	var_dump($Firebace03_Json_Response01);
	
	$Firebace03->IamSetNodePath('/example/Firebace03/Node02');
	$Firebace03_Json_Response02 = $Firebace03->IamNode->IamGet();
	
	var_dump($Firebace03_Json_Response02);

</pre>