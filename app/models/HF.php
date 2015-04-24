<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class HF extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_hf_data';
	}

	// PROPERTIES
	public $HF;
	public $Square;
	public $Locus;
	public $SG;
	public $Volume;
	public $Field;
	public $Bagnum;
	public $Material;
	public $Type;
	public $Part;
	public $Spec;
	public $Density;
	public $CountTotal;
	public $WeightDens;
	// Weight Total in original schema
	public $WeightTotal;

	// rest of table uses . in name
}
