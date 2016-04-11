<?php  

namespace IamProgrammerlk\IamFirebasePHP;

class IamFirebasePHPNode implements IamFirebasePHPNodeInterface
{
	protected $IamConfig;
	
	
	// GET - Reading Data
	public function IamGet()
	{
		return '</br>This is get from "ImGet" function. new node path is --->>> ' . $this->IamConfig['IamNodePath'] . '</br>';
	}
	
	// PUT - Writing Data
	public function IamPut($IamParam)
	{
		
	}
	
	// POST - Pushing Data
	public function IamPost($IamParam)
	{
		
	}
	
	// PATCH - Updating Data
	public function IamPatch($IamParam)
	{
		
	}
	
	// DELETE - Removing Data
	public function IamDelete($IamParam)
	{
		
	}
	
 
    public function __construct($IamConfig)
    {

		$this->IamConfig = $IamConfig;

	}

}
