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
	*  defines model relationships
	*/
	public function initialize()
	{
		// $internalID, $assocModelName, $idFromAssocModel
		$this->hasMany('HF', 'Flots', 'HF');
	}

	/* 
	*  AFTER_FETCH
	*  defines the variables names that would be missed
	*/
	public function afterFetch()
	{
		$vars = get_object_vars($this);
		$this->CT_25 = $vars['CT.25'];
		$this->WT_25 = $vars['WT.25'];

		$this->CT_12_5 = $vars['CT.12.5'];
		$this->WT_12_5 = $vars['WT.12.5'];

		$this->CT_8 = $vars['CT.8'];
		$this->WT_8 = $vars['WT.8'];

		$this->CT_4 = $vars['CT.4'];
		$this->WT_4 = $vars['WT.4'];
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
