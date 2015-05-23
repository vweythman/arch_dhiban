<?php

use Phalcon\Mvc\Model;

class DomesticateFrags extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_peb_domfrag';
	}

	public function afterFetch()
	{
		// domesticate fragments sums
		self::$sumMesh += $this->Mesh;
		if (self::$sumMesh < 3.6) {
			self::$sumCereal_frag_CT                 += $this->Cereal_frag_CT;
			self::$sumFabaceae_frags                 += $this->Fabaceae_frags;
			self::$sumHordeum_frags                  += $this->Hordeum_frags;
			self::$sumNutshell_frag                  += $this->Nutshell_frag;
			self::$sumPisum_sativum_frags            += $this->Pisum_sativum_frags;
			self::$sumOlea_sp_shell_frag             += $this->Olea_sp_shell_frag;
			self::$sumPisum_sativum_frags_wt         += $this->Pisum_sativum_frags_wt;
			self::$sumPisum_sativum_halves           += $this->Pisum_sativum_halves;
			self::$sumPisum_sativum_halves_wt        += $this->Pisum_sativum_halves_wt;
			self::$sumPisum_sativum_whole_distort    += $this->Pisum_sativum_whole_distort;
			self::$sumPisum_sativum_whole_distort_wt += $this->Pisum_sativum_whole_distort_wt;
			self::$sumTriticum_sp_apex_embryo        += $this->Triticum_sp_apex_embryo;
			self::$sumTriticum_sp_halves             += $this->Triticum_sp_halves;
			self::$sumVitis_vinifera_frag            += $this->Vitis_vinifera_frag;
		}
	}

	public $Mesh;

	// -- fragments
	public $Cereal_frag_CT;
	public $Fabaceae_frags;
	public $Hordeum_frags;
	public $Nutshell_frag;
	public $Pisum_sativum_frags;
	public $Pisum_sativum_frags_wt;
	public $Pisum_sativum_halves;
	public $Pisum_sativum_halves_wt;
	public $Pisum_sativum_whole_distort;
	public $Pisum_sativum_whole_distort_wt;
	public $Triticum_sp_apex_embryo;
	public $Triticum_sp_halves;
	public $Vitis_vinifera_frag;
	public $Olea_sp_shell_frag;

	// SUMS
	public static $sumMesh = 0.0;
	public static $sumCereal_frag_CT                 = 0;
	public static $sumFabaceae_frags                 = 0;
	public static $sumHordeum_frags                  = 0;
	public static $sumNutshell_frag                  = 0;
	public static $sumPisum_sativum_frags            = 0;
	public static $sumPisum_sativum_frags_wt         = 0;
	public static $sumPisum_sativum_halves           = 0;
	public static $sumPisum_sativum_halves_wt        = 0;
	public static $sumPisum_sativum_whole_distort    = 0;
	public static $sumPisum_sativum_whole_distort_wt = 0;
	public static $sumTriticum_sp_apex_embryo        = 0;
	public static $sumTriticum_sp_halves             = 0;
	public static $sumVitis_vinifera_frag            = 0;
	public static $sumOlea_sp_shell_frag             = 0;

}
?>
