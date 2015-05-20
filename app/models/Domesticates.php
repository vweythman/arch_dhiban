<?php

use Phalcon\Mvc\Model;

class Domesticates extends Model
{
	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_peb_idet';
	}

	public function afterFetch()
	{
		// Domesticate sums
		self::$sumCicer_Arietinum         += $this->Cicer_arietinum;
		self::$sumCoriandrum_Sativum      += $this->Coriandrum_sativum;
		self::$sumFicus_carica            += $this->Ficus_carica;
		self::$sumHordeum_distichon       += $this->Hordeum_distichon;
		self::$sumHordeum_sp              += $this->Hordeum_sp;
		self::$sumHordeum_vulgare         += $this->Hordeum_vulgare;
		self::$sumIndeterminate_Cereal    += $this->Indeterminate_Cereal;
		self::$sumLathyrus_sativa         += $this->Lathyrus_sativa;
		self::$sumLens_culinaris          += $this->Lens_culinaris;
		self::$sumOlea_sp                 += $this->Olea_sp;
		self::$sumOlea_sp_shell_frag      += $this->Olea_sp_shell_frag;
		self::$sumPisum_sativum_ct        += $this->Pisum_sativum_ct;
		self::$sumPrunus_sp_cf_cerasifera += $this->Prunus_sp_cf_cerasifera;
		self::$sumPunica_granatum         += $this->Punica_granatum;
		self::$sumSecale_cereale          += $this->Secale_cereale;
		self::$sumSorghum_cf_bicolor      += $this->Sorghum_cf_bicolor;
		self::$sumTriticum_aestivum_durum += $this->Triticum_aestivum_durum;
		self::$sumTriticum_dicoccum       += $this->Triticum_dicoccum;
		self::$sumTriticum_monococcum     += $this->Triticum_monococcum;
		self::$sumTriticum_mono_di        += $this->Triticum_mono_di;
		self::$sumTriticum_sp             += $this->Triticum_sp;
		self::$sumTriticum_spelta         += $this->Triticum_spelta;
		self::$sumVicia_ervilia           += $this->Vicia_ervilia;
		self::$sumVicia_faba              += $this->Vicia_faba;
		self::$sumVicia_sp                += $this->Vicia_sp;
		self::$sumVitis_vinifera          += $this->Vitis_vinifera;
		self::$sumZiziphus_spina_christi  += $this->Ziziphus_spina_christi;

		// domesticate weight sums
		self::$sumOlea_sp_shell_frag_wt += $this->Olea_sp_shell_frag_wt;
		self::$sumPisum_sativum_wt      += $this->Pisum_sativum_wt;
		self::$sumOlea_sp_wt            += $this->Olea_sp_wt;

		// domesticate other parts sums
		self::$sumVitis_sp_pedicel           += $this->Vitis_sp_pedicel;
		self::$sumVitis_vinifera_endocarp    += $this->Vitis_vinifera_endocarp;
		self::$sumVitis_vinifera_endocarp_wt += $this->Vitis_vinifera_endocarp_wt;

		// domesticate fragments sums
		self::$sumCereal_frag_CT                 += $this->Cereal_frag_CT;
		self::$sumFabaceae_frags                 += $this->Fabaceae_frags;
		self::$sumHordeum_frags                  += $this->Hordeum_frags;
		self::$sumNutshell_frag                  += $this->Nutshell_frag;
		self::$sumPisum_sativum_frags            += $this->Pisum_sativum_frags;
		self::$sumPisum_sativum_frags_wt         += $this->Pisum_sativum_frags_wt;
		self::$sumPisum_sativum_halves           += $this->Pisum_sativum_halves;
		self::$sumPisum_sativum_halves_wt        += $this->Pisum_sativum_halves_wt;
		self::$sumPisum_sativum_whole_distort    += $this->Pisum_sativum_whole_distort;
		self::$sumPisum_sativum_whole_distort_wt += $this->Pisum_sativum_whole_distort_wt;
		self::$sumTriticum_sp_apex_embryo        += $this->Triticum_sp_apex_embryo;
		self::$sumTriticum_sp_halves             += $this->Triticum_sp_halves;
		self::$sumVitis_vinifera_frag            += $this->Vitis_vinifera_frag;
	}

	// PROPERTIES
	public $Cicer_arietinum;
	public $Coriandrum_sativum;
	public $Ficus_carica;
	public $Hordeum_distichon;
	public $Hordeum_sp;
	public $Hordeum_vulgare;
	public $Indeterminate_Cereal;
	public $Lathyrus_sativa;
	public $Lens_culinaris;
	public $Olea_sp;
	public $Olea_sp_shell_frag;
	public $Pisum_sativum_ct;
	public $Prunus_sp_cf_cerasifera;
	public $Punica_granatum;
	public $Secale_cereale;
	public $Sorghum_cf_bicolor;
	public $Triticum_aestivum_durum;
	public $Triticum_dicoccum;
	public $Triticum_monococcum;
	public $Triticum_mono_di;
	public $Triticum_sp;
	public $Triticum_spelta;
	public $Vicia_ervilia;
	public $Vicia_faba;
	public $Vicia_sp;
	public $Vitis_vinifera;
	public $Ziziphus_spina_christi;

	// -- weights
	public $Olea_sp_shell_frag_wt;
	public $Pisum_sativum_wt;
	public $Olea_sp_wt;

	// -- other parts
	public $Vitis_sp_pedicel;
	public $Vitis_vinifera_endocarp;
	public $Vitis_vinifera_endocarp_wt;

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

	// SUMS
	public static $sumCicer_Arietinum         = 0;
	public static $sumCoriandrum_Sativum      = 0;
	public static $sumFicus_carica            = 0;
	public static $sumHordeum_distichon       = 0;
	public static $sumHordeum_sp              = 0;
	public static $sumHordeum_vulgare         = 0;
	public static $sumIndeterminate_Cereal    = 0;
	public static $sumLathyrus_sativa         = 0;
	public static $sumLens_culinaris          = 0;
	public static $sumOlea_sp                 = 0;
	public static $sumOlea_sp_shell_frag      = 0;
	public static $sumPisum_sativum_ct        = 0;
	public static $sumPrunus_sp_cf_cerasifera = 0;
	public static $sumPunica_granatum         = 0;
	public static $sumSecale_cereale          = 0;
	public static $sumSorghum_cf_bicolor      = 0;
	public static $sumTriticum_aestivum_durum = 0;
	public static $sumTriticum_dicoccum       = 0;
	public static $sumTriticum_monococcum     = 0;
	public static $sumTriticum_mono_di        = 0;
	public static $sumTriticum_sp             = 0;
	public static $sumTriticum_spelta         = 0;
	public static $sumVicia_ervilia           = 0;
	public static $sumVicia_faba              = 0;
	public static $sumVicia_sp                = 0;
	public static $sumVitis_vinifera          = 0;
	public static $sumZiziphus_spina_christi  = 0;

	// domesticate weight sums
	public static $sumOlea_sp_shell_frag_wt = 0;
	public static $sumPisum_sativum_wt      = 0;
	public static $sumOlea_sp_wt            = 0;

	// domesticate other parts sums
	public static $sumVitis_sp_pedicel           = 0;
	public static $sumVitis_vinifera_endocarp    = 0;
	public static $sumVitis_vinifera_endocarp_wt = 0;

	// domesticate fragments sums
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

}
?>
