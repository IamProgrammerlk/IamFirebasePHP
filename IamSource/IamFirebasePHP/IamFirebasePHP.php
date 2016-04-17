<?php

namespace IamProgrammerlk\IamFirebasePHP;

use IamProgrammerlk\IamFirebasePHP\IamFirebasePHPNodes\IamFirebasePHPNode;
use IamProgrammerlk\IamFirebasePHP\IamFirebasePHPExceptions\IamFirebasePHPException;

class IamFirebasePHP
{
	
	const IAM_FIREBASE_URL = 'FIREBASE_URL';
	
    const IAM_FIREBASE_SECRET = 'FIREBASE_SECRET';
	
    const IAM_DEFAULT_TIMEOUT = 60;
	
	const IAM_DEFAULT_HTTP_CLIENT = 'HTTP_STREAM';
	
	const IAM_DEFAULT_NODE_PATH = '/';
	
    public $IamNode;   

	protected $IamConfig;
	
	
	public function IamSetTimeout($IamTimeout)
	{
		$this->IamConfig['IamResponseTimeout'] = $IamTimeout;
		$this->IamInit();
	}
	
	public function IamSetHttpClient($IamHttpClient)
	{
		$this->IamConfig['IamResponseHandler'] = $IamHttpClient;
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
            'IamHttpClient' => $this->IamConfig['IamHttpClient'],
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
            'IamHttpClient' => static::IAM_DEFAULT_HTTP_CLIENT,
			'IamNodePath' => static::IAM_DEFAULT_NODE_PATH,
        ], $IamConfig);
		
		$this->IamFirebaseUrlVerifier($IamConfig['IamFirebaseUrl']);
		
		$this->IamFirebaseSecretVerifier($IamConfig['IamFirebaseSecret']);
			
		$this->IamResponseTimeoutVerifier($IamConfig['IamResponseTimeout']);
		
		$this->IamHttpClientVerifier($IamConfig['IamHttpClient']);
		
		$this->IamNodePathVerifier($IamConfig['IamNodePath']);
		
		$this->IamInit();
		
    }
	
	protected function IamFirebaseUrlVerifier($IamFirebaseUrl)
	{
		if (!$IamFirebaseUrl) {
            throw new IamFirebasePHPException('Required "IamFirebaseUrl" key not supplied in config and could not find fallback environment variable "' . static::IAM_FIREBASE_URL . '"');
        }
		
//TODO: validate firebase url is valid 

		$this->IamConfig['IamFirebaseUrl'] = $IamFirebaseUrl;
	}

	protected function IamFirebaseSecretVerifier($IamFirebaseSecret)
	{
        if (!$IamFirebaseSecret) {
            throw new IamFirebasePHPException('Required "IamFirebaseSecret" key not supplied in config and could not find fallback environment variable "' . static::IAM_FIREBASE_SECRET . '"');
        }
		
//TODO: validate firebase secret is valid 
				
		$this->IamConfig['IamFirebaseSecret'] = $IamFirebaseSecret;
	}
	
	protected function IamResponseTimeoutVerifier($IamResponseTimeout)
	{
		
//TODO: validate response timeout is valid 

		if (!true){
			
		}
		$this->IamConfig['IamResponseTimeout'] = $IamResponseTimeout;
	}
	
	protected function IamHttpClientVerifier($IamHttpClient)
	{
		
//TODO: validate http client is valid 

		if (!true){
			
		}
		$this->IamConfig['IamHttpClient'] = $IamHttpClient;
	}
	
	protected function IamNodePathVerifier($IamNodePath)
	{
		
//TODO: validate note path is valid 

		if (!true){
			
		}
		$this->IamConfig['IamNodePath'] = $IamNodePath;
	}
	
}
