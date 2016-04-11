<pre>

// !important:: if you didn't set any of optional parameters for IamFirebasePHP, it's always
// use default options or last options you made previously.    

// option 02 - use IamFirebase middle way
	$Firebace02  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
		'IamNodePath' => '/example/Firebace02/Node01', // optional - Default::"/" - required for middle way
		'IamResponseHandler' =>'IamResponseHandler', // optional - Default::"IamResponseHandler"
		'IamResponseTimeout' => 20, // optional - Default::"10"
	]);

	$Firebace02_Json_Response01 = $Firebace02->IamNode->IamGet();
	
	var_dump($Firebace02_Json_Response01);
	
	// use IamInit() function to change options.
	// !important:: you can't set or change 'IamFirebaseUrl' and 'IamFirebaseSecret' propertes in IamInit()
	$Firebace02->IamInit([
		'IamNodePath' => '/example/Firebace02/Node02',
		'IamResponseHandler' => 'cURL',
		// 'IamResponseTimeout' => 20, // don't set array eliment to use default value 
	]);
	$Firebace02_Json_Response02 = $Firebace02->IamNode->IamGet();
	
	var_dump($Firebace02_Json_Response02);

	$Firebace02->IamInit([
		'IamNodePath' => '/example/Firebace02/Node03',
	]);
	$Firebace02_Json_Response03 = $Firebace02->IamNode->IamGet();
	
	var_dump($Firebace02_Json_Response03);

</pre>