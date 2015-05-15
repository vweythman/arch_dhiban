<?php

use Phalcon\Mvc\Model;

class Domesticates extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_peb_idet';
	}

	public function initialize()
	{
	}

	// PROPERTIES
	public $Domesticates

}
?>
