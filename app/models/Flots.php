<?php

use Phalcon\Mvc\Model;

class Flots extends Model
{

	public function getSource()
	{
		return 'flot_log';
	}

	public $LabFlot; // id for table
	public $Flot;

	public $row_name;

	public $Bag;

	public $ExcDay;
	public $ExcYear;

	public function exc() {
		if ($this->ExcDay == null) {
			return $this->ExcYear;
		}
		else {
			return $this->ExcDay."/".$this->ExcYear;
		}
	}

	public function hf_link() {
		if ($this->HF != null) {
			return Phalcon\Tag::linkTo("sample/getHF/$this->HF", $this->HF);
		}
	}

	public $Unit;

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

	public $HF;
	public $HFAnalyzed;
	
	public $MDAnalyzed;
	public $Date;

	public $Notes;



}
