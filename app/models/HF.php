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

	/* 
	*  INITIALIZE
	*  defines model relationships and other important variables
	*/
	public function initialize()
	{
		$this->hasMany('HF', 'Flots', 'HF');
	}

	/* 
	*  AFTER_FETCH
	*  defines the variables names that would be missed
	*/
	public function afterFetch()
	{

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
	public $WeightTotal; // Weight Total in original schema

	public $CT_25;
	public $WT_25;
	public $CT_12_5;
	public $WT_12_5;

	public $CT_8;
	public $WT_8;
	
	public $CT_4;
	public $WT_4;

}
