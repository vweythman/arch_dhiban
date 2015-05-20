<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class RachisRemains extends Model {

	public function afterFetch() {
		self::$sumPoaceae_culm                             += $this->Poaceae_culm;
		self::$sumPoaceae_root                             += $this->Poaceae_root;
		self::$sumHordeum_internode                        += $this->Hordeum_internode;
		self::$sumHordeum_rachis                           += $this->Hordeum_rachis;
		self::$sumTriticum_aestivum_rachis                 += $this->Triticum_aestivum_rachis;
		self::$sumTriticum_aestivum_durum_rachis           += $this->Triticum_aestivum_durum_rachis;
		self::$sumTriticum_aestivum_durum_rachis_internode += $this->Triticum_aestivum_durum_rachis_internode;
		self::$sumTriticum_aestivum_durum_rachis_node      += $this->Triticum_aestivum_durum_rachis_node;
		self::$sumTriticum_durum_rachis                    += $this->Triticum_durum_rachis;
		self::$sumTriticum_mono_di_rachis                  += $this->Triticum_mono_di_rachis;
		self::$sumTriticum_glume                           += $this->Triticum_glume;
		self::$sumTriticum_internode                       += $this->Triticum_internode;
		self::$sumTriticum_node                            += $this->Triticum_node;
		self::$sumTriticum_rachis                          += $this->Triticum_rachis;
		self::$sumWild_or_Weed_rachis                      += $this->Wild_or_Weed_rachis;
	}

	public $Poaceae_culm;
	public $Poaceae_root;
	public $Hordeum_internode;
	public $Hordeum_rachis;
	public $Triticum_aestivum_rachis;
	public $Triticum_aestivum_durum_rachis;
	public $Triticum_aestivum_durum_rachis_internode;
	public $Triticum_aestivum_durum_rachis_node;
	public $Triticum_durum_rachis;
	public $Triticum_mono_di_rachis;
	public $Triticum_glume;
	public $Triticum_internode;
	public $Triticum_node;
	public $Triticum_rachis;
	public $Wild_or_Weed_rachis;

	// SUMS
	public static $sumPoaceae_culm                             = 0;
	public static $sumPoaceae_root                             = 0;
	public static $sumHordeum_internode                        = 0;
	public static $sumHordeum_rachis                           = 0;
	public static $sumTriticum_aestivum_rachis                 = 0;
	public static $sumTriticum_aestivum_durum_rachis           = 0;
	public static $sumTriticum_aestivum_durum_rachis_internode = 0;
	public static $sumTriticum_aestivum_durum_rachis_node      = 0;
	public static $sumTriticum_durum_rachis                    = 0;
	public static $sumTriticum_mono_di_rachis                  = 0;
	public static $sumTriticum_glume                           = 0;
	public static $sumTriticum_internode                       = 0;
	public static $sumTriticum_node                            = 0;
	public static $sumTriticum_rachis                          = 0;
	public static $sumWild_or_Weed_rachis                      = 0;
}

?>
