<?php

namespace IamProgrammerlk\IamFirebasePHP\IamFirebasePHPExceptions;

class IamFirebasePHPException extends \Exception
{
	/*
	* @param  $IamErrorMessage | error message
	* @param  $IamErrorCode | error type
	* @param  $IamErrorPrevious	
	*/
	public function __construct($IamErrorMessage, $IamErrorCode = 0, Exception $IamErrorPrevious = null) 
	{
		echo '</br>' . $IamErrorMessage;
	}

}

