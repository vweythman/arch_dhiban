<?php

use Phalcon\Mvc\Model;

class C14 extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'dhb_c14';
	}

	/* 
	*  INITIALIZE
	*  defines model relationships and other important variables
	*/
	public function initialize()
	{
		// $internalID, $assocModelName, $idFromAssocModel
		$this->hasOne("LabLF", "Flots", "LabLF");
	}

	public function getContext()
	{
		if ($this->Flots != Null && $this->Flots->Context != "")
		{
			return $this->Flots->Context;
		}
		else {
			return "None";
		}
	}

	public function LFLink()
	{
		if ($this->Flots != Null)
		{
			return $this->Flots->labFlotLink();
		}
	}

	public function HFLink()
	{
		if ($this->Flots != Null)
		{
			return $this->Flots->HFLink();
		}
	}

}
