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
		// $this->hasOne(internalID, assocModelName, idFromAssocModel)
	}

	public function afterFetch() 
	{
		self::$sumMesh += $this->Mesh;
		if (self::$sumMesh < 3.6) {

			self::$sumCicer_Arietinum    += $this->Cicer_arietinum;
			self::$sumCoriandrum_Sativum += $this->Coriandrum_sativum;

			self::$sumOlea_sp_shell_frag_wt += $this->Olea_sp_shell_frag_wt;
			self::$sumPisum_sativum_wt      += $this->Pisum_sativum_wt;
			self::$sumOlea_sp_wt            += $this->Olea_sp_wt;

			self::$sumAmaranthaceae += $this->Amaranthaceae;
			self::$sumApiaceae      += $this->Apiaceae;
			self::$sumAsteraceae    += $this->Asteraceae;

			// other remains
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
	public $Unit;
	public $Locus;
	public $SG;
	public $Bag;
	public $FlotNum;
	public $FlotVol;
	public $TotWt;
	public $Mesh;
	public $Charcoal_ct;
	public $Charcoal_wt;

	// DOMESTICATE - will be its own model
	public $Cicer_arietinum;
	public $Coriandrum_sativum;

	public $DOMESTICATE_WEIGHTS;
	public $Olea_sp_shell_frag_wt;
	public $Pisum_sativum_wt;
	public $Olea_sp_wt;

	// Families
	public $Amaranthaceae;
	public $Apiaceae;
	public $Asteraceae;

	// Other Remains
	public $OTHER_REMAINS;
	public $Bone;
	public $Carbonized_insect;
	public $Dung;
	public $Eggshell;
	public $Fish_Scale;
	public $Fish_Vertebra;
	public $Insect_Pupae;
	public $Shell;
	public $Shell_Burnt;


	// STATIC VARIABLES
	public static $sumMesh = 0.0;

	public static $sumCicer_Arietinum    = 0;
	public static $sumCoriandrum_Sativum = 0;
	public static $sumCaryophyllaceae    = 0;

	public static $sumOlea_sp_shell_frag_wt = 0;
	public static $sumPisum_sativum_wt      = 0;
	public static $sumOlea_sp_wt            = 0;

	public static $sumAmaranthaceae = 0;
	public static $sumApiaceae      = 0;
	public static $sumAsteraceae    = 0;

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
