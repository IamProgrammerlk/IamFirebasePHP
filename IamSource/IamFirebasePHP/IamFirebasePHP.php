<?php

namespace IamProgrammerlk\IamFirebasePHP;

use IamProgrammerlk\IamFirebasePHP\IamFirebasePHPClient;
use IamProgrammerlk\IamFirebasePHP\IamFirebasePHPExceptions;

class IamFirebasePHP
{
	
    const IAM_FIREBASE_URL = 'FIREBASE_URL';
	
    const IAM_FIREBASE_SECRET = 'FIREBASE_SECRET';
	
    const IAM_DEFAULT_TIMEOUT = 10;
	
	const IAM_DEFAULT_RESPONSE_HANDLER = 'IamResponseHandler';
	
	const IAM_DEFAULT_NODE_PATH = '/';
    

	protected $IamConfig;
	
	
    public $IamNode;

	public function IamSetTimeout($IamTimeout)
	{
		$this->IamConfig['IamResponseTimeout'] = $IamTimeout;
		$this->IamInit();
	}
	
	public function IamSetResponseHandler($IamResponseHandler)
	{
		$this->IamConfig['IamResponseHandler'] = $IamResponseHandler;
		$this->IamInit();
	}
	
	public function IamSetNodePath($IamNodePath)
	{
		$this->IamConfig['IamNodePath'] = $IamNodePath;
		$this->IamInit();
	}
	
	public function IamSetNode($IamNodePath, $IamConfig = [])
	{
		if (!isset($IamNodePath)){
			throw new IamFirebasePHPExceptions('Required "Node Path" is not supplied in parameter');
		}
		
		$IamConfig = array_merge(
		[ // this eliment's value can be replaced by new value by IamSetNode()
			'IamResponseTimeout' => $this->IamConfig['IamResponseTimeout'],
            'IamResponseHandler' => $this->IamConfig['IamResponseHandler'],
			'IamNodePath' => $IamNodePath,
		],
		$IamConfig,
		[ // this eliment's value canno't be replaced by new value by IamSetNode()
            'IamFirebaseUrl' => $this->IamConfig['IamFirebaseUrl'],
            'IamFirebaseSecret' => $this->IamConfig['IamFirebaseSecret'],
		]);
		
		return new IamFirebasePHPNode($IamConfig);
	
	}
	
	public function IamInit($IamConfig = [])
	{
		
		$IamConfig = array_merge(
		[ // this eliment's value can be replaced by new value by IamInit()
			'IamResponseTimeout' => $this->IamConfig['IamResponseTimeout'],
            'IamResponseHandler' => $this->IamConfig['IamResponseHandler'],
			'IamNodePath' => $this->IamConfig['IamNodePath'],
		],
		$IamConfig,
		[ // this eliment's value canno't be replaced by new value by IamInit()
            'IamFirebaseUrl' => $this->IamConfig['IamFirebaseUrl'],
            'IamFirebaseSecret' => $this->IamConfig['IamFirebaseSecret'],
		]);
		
		$this->IamNode = new IamFirebasePHPNode($IamConfig);
	}
	
    public function __construct(array $IamConfig = [])
    {

        $IamConfig = array_merge([
            'IamFirebaseUrl' => getenv(static::IAM_FIREBASE_URL),
            'IamFirebaseSecret' => getenv(static::IAM_FIREBASE_SECRET),
            'IamResponseTimeout' => static::IAM_DEFAULT_TIMEOUT,
            'IamResponseHandler' => static::IAM_DEFAULT_RESPONSE_HANDLER,
			'IamNodePath' => static::IAM_DEFAULT_NODE_PATH,
        ], $IamConfig);
			
        if (!$IamConfig['IamFirebaseUrl']) {
            throw new IamFirebasePHPExceptions('Required "IamFirebaseUrl" key not supplied in config and could not find fallback environment variable "' . static::IAM_FIREBASE_URL . '"');
        }
		$this->IamConfig['IamFirebaseUrl'] = $IamConfig['IamFirebaseUrl'];
		
        if (!$IamConfig['IamFirebaseSecret']) {
            throw new IamFirebasePHPExceptions('Required "IamFirebaseSecret" key not supplied in config and could not find fallback environment variable "' . static::IAM_FIREBASE_SECRET . '"');
        }
		$this->IamConfig['IamFirebaseSecret'] = $IamConfig['IamFirebaseSecret'];
	
		if (!true){
			
		}
		$this->IamConfig['IamResponseTimeout'] = $IamConfig['IamResponseTimeout'];
	
		if (!true){
			
		}
		$this->IamConfig['IamResponseHandler'] = $IamConfig['IamResponseHandler'];
		
		if (!true){
			
		}
		$this->IamConfig['IamNodePath'] = $IamConfig['IamNodePath'];
		
		$this->IamInit();
		
    }
	
}
