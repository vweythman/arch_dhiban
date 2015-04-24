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
	*  EXC
	*  combines ExcDay and ExcYear when they exist
	*/
	public function exc() {
		if ($this->ExcDay == null) {
			return $this->ExcYear;
		}
		else {
			return $this->ExcDay."/".$this->ExcYear;
		}
	}

	/* 
	*  Lab_Flot_Link
	*  provides the link to the lab flot id
	*/
	public function labFlotLink() {
		$id = $this->LabFlot;
		return Phalcon\Tag::linkTo("sample/show/$id", $id);
	}

	/* 
	*  HF_Link
	*  provides the link to the HF when it exists
	*/
	public function HFLink() {
		if ($this->HF != null) {
			return Phalcon\Tag::linkTo("sample/getHF/$this->HF", $this->HF);
		}
	}

	// PROPERTIES
	public $LabFlot;  // table id
	public $Flot;
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
