<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class Families extends Model {
	public function afterFetch() 
	{
		self::$sumAmaranthaceae            += $this->Amaranthaceae;
		self::$sumApiaceae                 += $this->Apiaceae;
		self::$sumAsteraceae               += $this->Asteraceae;
		self::$sumBoraginaceae_mineralized += $this->Boraginaceae_mineralized;
		self::$sumBoraginaceae_burnt       += $this->Boraginaceae_burnt;
		self::$sumBrassicaceae             += $this->Brassicaceae;
		self::$sumCaryophyllaceae          += $this->Caryophyllaceae;
		self::$sumChenopodiaceae           += $this->Chenopodiaceae;
		self::$sumCyperaceae               += $this->Cyperaceae;
		self::$sumDipsacaceae              += $this->Dipsacaceae;
		self::$sumFabaceae                 += $this->Fabaceae;
		self::$sumLamiaceae                += $this->Lamiaceae;
		self::$sumMalvaceae                += $this->Malvaceae;
		self::$sumPapaveraceae             += $this->Papaveraceae;
		self::$sumPoaceae                  += $this->Poaceae;
		self::$sumPoaceae_Frags            += $this->Poaceae_Frags;
		self::$sumPolygonaceae             += $this->Polygonaceae;
		self::$sumPortulaceae              += $this->Portulaceae;
		self::$sumRubiaceae                += $this->Rubiaceae;
		self::$sumScrophulariaceae         += $this->Scrophulariaceae;
		self::$sumSolanaceae               += $this->Solanaceae;
	}

	// PROPERITES
	public $Amaranthaceae;
	public $Apiaceae;
	public $Asteraceae;
	public $Boraginaceae_mineralized;
	public $Boraginaceae_burnt;
	public $Brassicaceae;
	public $Caryophyllaceae;
	public $Chenopodiaceae;
	public $Cyperaceae;
	public $Dipsacaceae;
	public $Fabaceae;
	public $Lamiaceae;
	public $Malvaceae;
	public $Papaveraceae;
	public $Poaceae;
	public $Poaceae_Frags;
	public $Polygonaceae;
	public $Portulaceae;
	public $Rubiaceae;
	public $Scrophulariaceae;
	public $Solanaceae;

	// Sums
	public static $sumAmaranthaceae            = 0;
	public static $sumApiaceae                 = 0;
	public static $sumAsteraceae               = 0;
	public static $sumBoraginaceae_mineralized = 0;
	public static $sumBoraginaceae_burnt       = 0;
	public static $sumBrassicaceae             = 0;
	public static $sumCaryophyllaceae          = 0;
	public static $sumChenopodiaceae           = 0;
	public static $sumCyperaceae               = 0;
	public static $sumDipsacaceae              = 0;
	public static $sumFabaceae                 = 0;
	public static $sumLamiaceae                = 0;
	public static $sumMalvaceae                = 0;
	public static $sumPapaveraceae             = 0;
	public static $sumPoaceae                  = 0;
	public static $sumPoaceae_Frags            = 0;
	public static $sumPolygonaceae             = 0;
	public static $sumPortulaceae              = 0;
	public static $sumRubiaceae                = 0;
	public static $sumScrophulariaceae         = 0;
	public static $sumSolanaceae               = 0;

}

