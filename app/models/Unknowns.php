<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class Unknowns extends Model {

	public function afterFetch()
	{
		self::$sumClinker                      += $this->Clinker;
		self::$sumIndeterminate_rachis         += $this->Indeterminate_rachis;
		self::$sumParenchyma_fragment          += $this->Parenchyma_fragment;
		self::$sumRachis_fragment              += $this->Rachis_fragment;
		self::$sumUnknown_fruit_seed           += $this->Unknown_fruit_seed;
		self::$sumUnidentifiable_seed_fragment += $this->Unidentifiable_seed_fragment;
		self::$sumUnknown_rachis_remains       += $this->Unknown_rachis_remains;
		self::$sumUnknown_non_Poaceae          += $this->Unknown_non_Poaceae;
	}

	// PROPERTIES
	public $Clinker;
	public $Indeterminate_rachis;
	public $Parenchyma_fragment;
	public $Rachis_fragment;
	public $Unknown_fruit_seed;
	public $Unidentifiable_seed_fragment;
	public $Unknown_rachis_remains;
	public $Unknown_non_Poaceae;

	// SUMS
	public static $sumClinker                      = 0;
	public static $sumIndeterminate_rachis         = 0;
	public static $sumParenchyma_fragment          = 0;
	public static $sumRachis_fragment              = 0;
	public static $sumUnknown_fruit_seed           = 0;
	public static $sumUnidentifiable_seed_fragment = 0;
	public static $sumUnknown_rachis_remains       = 0;
	public static $sumUnknown_non_Poaceae          = 0;
}

?>