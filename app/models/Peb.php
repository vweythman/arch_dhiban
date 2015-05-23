<?php

use Phalcon\Mvc\Model;

class Peb extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_peb_data';
	}

	public function initialize()
	{
		// add all relationships here
		// when table has been broken into smaller tables
		$this->hasOne(internalID, assocModelName, idFromAssocModel);
	}

}
?>
