<pre>

// !important:: if you didn't set any of optional parameters for IamFirebasePHP, it's always
// use default options or last options you made previously.    

// option 01 - use IamFirebase easy way
	$Firebace01  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
	]);
	
	$Firebace01_Node01 = $Firebace01->IamSetNode('/example/Firebace01/Node01');
	$Firebace01_Json_Response01 = $Firebace01_Node01->IamGet();
	var_dump($Firebace01_Json_Response01);
	
	$Firebace01_Node02 = $Firebace01->IamSetNode('/example/Firebace01/Node02');
	$Firebace01_Json_Response02 = $Firebace01_Node02->IamGet();
	var_dump($Firebace01_Json_Response02);
	
	// or more and more nodes or any other functions

</pre>



