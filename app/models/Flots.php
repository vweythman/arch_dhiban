<?php

use Phalcon\Mvc\Model;

class Flots extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'flot_log';
	}

	/* 
	*  INITIALIZE
	*  defines model relationships and other important variables
	*/
	public function initialize()
	{
		// $internalID, $assocModelName, $idFromAssocModel
		$this->hasOne('HF', 'HF', 'HF');
		$this->hasMany("LabLF", "Domesticates", "LabLF");
		$this->hasMany("LabLF", "DomesticateFrags", "LabLF");
		$this->hasMany("LabLF", "FamiliesRemains", "LabLF");
		$this->hasMany("LabLF", "OtherRemains", "LabLF");
		$this->hasMany("LabLF", "RachisRemains", "LabLF");
		$this->hasMany("LabLF", "Unknowns", "LabLF");
		$this->hasMany("LabLF", "WeedsWilds", "LabLF");
	}

	/* 
	* AFTER_FETCH
	* setups any variables after the database variables have been found
	*/
	public function afterFetch()
	{
		$this->Exc = ($this->ExcDay == null) ? $this->ExcYear : $this->ExcDay."/".$this->ExcYear;
	}

	/* 
	*  Lab_Flot_Link
	*  provides the link to the lab flot id
	*/
	public function labFlotLink() {
		$id = $this->LabLF;
		return Phalcon\Tag::linkTo("sample/show/$id", $id);
	}

	/* 
	*  HF_Link
	*  provides the link to the HF when it exists
	*/
	public function HFLink() {
		if ($this->HF != null) {
			return Phalcon\Tag::linkTo("HF/show/$this->HF", $this->HF);
		}
	}

	// PROPERTIES
	public $LabLF;  // table id
	public $LF;
	public $HF;

	public $Bag;
	public $Unit;

	public $ExcDay;
	public $ExcYear;

	public $row_name;

	public $Locus;
	public $SG;
	public $Coll;
	public $Vol_L;
	public $FLD;
	
	// Location
	public $x;
	public $y;
	public $z;
	
	public $spatttype;

	public $C14OP;
	public $PeriodOP;
	public $CalibRadiocarbonDate;
	public $Phasing;
	public $Context;
	public $Period;
	public $StructNum;

	public $HFAnalyzed;
	
	public $MDAnalyzed;
	public $Date;

	public $Notes;

}
