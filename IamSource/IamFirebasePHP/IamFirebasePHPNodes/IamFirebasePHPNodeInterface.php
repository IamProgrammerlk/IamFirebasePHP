<?php

namespace IamProgrammerlk\IamFirebasePHP\IamFirebasePHPNodes;

interface IamFirebasePHPNodeInterface
{
	
	// GET - Reading Data
	public function IamGet();
	
	// PUT - Writing Data
	public function IamPut($IamParam);
	
	// POST - Pushing Data
	public function IamPost($IamParam);
	
	// PATCH - Updating Data
	public function IamPatch($IamParam);
	
	// DELETE - Removing Data
	public function IamDelete($IamParam);

}