<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class OtherRemains extends Model {

	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_peb_other';
	}

	public function afterFetch()
	{
		// sum the three meshes
		self::$sumMesh += $this->Mesh;
		if (self::$sumMesh < 3.6) {
			self::$sumBone              += $this->Bone;
			self::$sumCarbonized_insect += $this->Carbonized_insect;
			self::$sumDung              += $this->Dung;
			self::$sumEggshell          += $this->Eggshell;
			self::$sumFish_Scale        += $this->Fish_Scale;
			self::$sumFish_Vertebra     += $this->Fish_Vertebra;
			self::$sumInsect_Pupae      += $this->Insect_Pupae;
			self::$sumShell             += $this->Shell;
			self::$sumShell_Burnt       += $this->Shell_Burnt;
		}
	}

	// PROPERTIES
	public $Mesh;

	public $Bone;
	public $Carbonized_insect;
	public $Dung;
	public $Eggshell;
	public $Fish_Scale;
	public $Fish_Vertebra;
	public $Insect_Pupae;
	public $Shell;
	public $Shell_Burnt;
	
	// SUMS
	public static $sumMesh = 0.0;
	public static $sumBone              = 0;
	public static $sumCarbonized_insect = 0;
	public static $sumDung              = 0;
	public static $sumEggshell          = 0;
	public static $sumFish_Scale        = 0;
	public static $sumFish_Vertebra     = 0;
	public static $sumInsect_Pupae      = 0;
	public static $sumShell             = 0;
	public static $sumShell_Burnt       = 0;


}

?>
