<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class WeedsWilds extends Model {

	/* 
	*  GET_SOURCE
	*  defines the table connected to the model
	*/
	public function getSource()
	{
		return 'raw_peb_weed';
	}

	public function afterFetch()
	{
		self::$sumMesh += $this->Mesh;
		if (self::$sumMesh < 3.6) {
			self::$sumAdonis                       += $this->Adonis;
			self::$sumAgrostemma                   += $this->Agrostemma;
			self::$sumAizoon                       += $this->Aizoon;
			self::$sumAjuga                        += $this->Ajuga;
			self::$sumAmaranthus                   += $this->Amaranthus;
			self::$sumAndrosace_maxima             += $this->Androsace_maxima;
			self::$sumAnthemis                     += $this->Anthemis;
			self::$sumArnebia                      += $this->Arnebia;
			self::$sumArtemisia                    += $this->Artemisia;
			self::$sumAsparagus                    += $this->Asparagus;
			self::$sumAsphodelus                   += $this->Asphodelus;
			self::$sumAstragalus                   += $this->Astragalus;
			self::$sumAtriplex                     += $this->Atriplex;
			self::$sumAvena                        += $this->Avena;
			self::$sumBellevalia                   += $this->Bellevalia;
			self::$sumBrassica                     += $this->Brassica;
			self::$sumBromus                       += $this->Bromus;
			self::$sumBupleurum                    += $this->Bupleurum;
			self::$sumCalendula                    += $this->Calendula;
			self::$sumCamelina                     += $this->Camelina;
			self::$sumCarex                        += $this->Carex;
			self::$sumCarex_Scirpus                += $this->Carex_Scirpus;
			self::$sumCentaurea                    += $this->Centaurea;
			self::$sumCephalaria_syriaca           += $this->Cephalaria_syriaca;
			self::$sumCerastium                    += $this->Cerastium;
			self::$sumcf_Asparagus                 += $this->cf_Asparagus;
			self::$sumcf_Berberis                  += $this->cf_Berberis;
			self::$sumcf_Camelina                  += $this->cf_Camelina;
			self::$sumcf_Setaria                   += $this->cf_Setaria;
			self::$sumChenopodium_album            += $this->Chenopodium_album;
			self::$sumConvolvulus                  += $this->Convolvulus;
			self::$sumCoronilla                    += $this->Coronilla;
			self::$sumEleocharis                   += $this->Eleocharis;
			self::$sumEragrostis                   += $this->Eragrostis;
			self::$sumEremo_Agropyron              += $this->Eremo_Agropyron;
			self::$sumErodium                      += $this->Erodium;
			self::$sumErodium_cicutarium_awn       += $this->Erodium_cicutarium_awn;
			self::$sumEuphorbia                    += $this->Euphorbia;
			self::$sumFumaria                      += $this->Fumaria;
			self::$sumGalium                       += $this->Galium;
			self::$sumGlaucium                     += $this->Glaucium;
			self::$sumHeliotropium                 += $this->Heliotropium;
			self::$sumHippocrepis                  += $this->Hippocrepis;
			self::$sumHordeum_murinum_boeticum     += $this->Hordeum_murinum_boeticum;
			self::$sumHyoscyamus                   += $this->Hyoscyamus;
			self::$sumLavatera                     += $this->Lavatera;
			self::$sumLolium                       += $this->Lolium;
			self::$sumMalva                        += $this->Malva;
			self::$sumMedicago                     += $this->Medicago;
			self::$sumMedicago_type                += $this->Medicago_type;
			self::$sumMelilotus_Trifolium          += $this->Melilotus_Trifolium;
			self::$sumMelilotus_Trifolium_punctate += $this->Melilotus_Trifolium_punctate;
			self::$sumOnopordum_Eleusine           += $this->Onopordum_Eleusine;
			self::$sumOrnithogalum                 += $this->Ornithogalum;
			self::$sumOrnithogalum_type            += $this->Ornithogalum_type;
			self::$sumPapaver                      += $this->Papaver;
			self::$sumPeganum_harmala              += $this->Peganum_harmala;
			self::$sumPhalaris                     += $this->Phalaris;
			self::$sumPhleum                       += $this->Phleum;
			self::$sumPlantago                     += $this->Plantago;
			self::$sumPolygonum                    += $this->Polygonum;
			self::$sumPortulaca                    += $this->Portulaca;
			self::$sumRumex                        += $this->Rumex;
			self::$sumSalsola                      += $this->Salsola;
			self::$sumSchinus                      += $this->Schinus;
			self::$sumScirpus                      += $this->Scirpus;
			self::$sumScorpiurus                   += $this->Scorpiurus;
			self::$sumSilene                       += $this->Silene;
			self::$sumStellaria                    += $this->Stellaria;
			self::$sumStipa                        += $this->Stipa;
			self::$sumSuaeda                       += $this->Suaeda;
			self::$sumTeucrium                     += $this->Teucrium;
			self::$sumThymelaea                    += $this->Thymelaea;
			self::$sumTrifolium_repens             += $this->Trifolium_repens;
			self::$sumTrifolium_cf_repens          += $this->Trifolium_cf_repens;
			self::$sumTrigonella                   += $this->Trigonella;
			self::$sumTrigonella_astroites         += $this->Trigonella_astroites;
			self::$sumTrigonella_coele_syriaca     += $this->Trigonella_coele_syriaca;
			self::$sumVaccaria                     += $this->Vaccaria;
			self::$sumVerbascum                    += $this->Verbascum;
			self::$sumVeronica                     += $this->Veronica;
			self::$sumZiziphora                    += $this->Ziziphora;
		}
	}

	// PROPERTIES
	public $Mesh;

	public $Adonis;
	public $Agrostemma;
	public $Aizoon;
	public $Ajuga;
	public $Amaranthus;
	public $Androsace_maxima;
	public $Anthemis;
	public $Arnebia;
	public $Artemisia;
	public $Asparagus;
	public $Asphodelus;
	public $Astragalus;
	public $Atriplex;
	public $Avena;
	public $Bellevalia;
	public $Brassica;
	public $Bromus;
	public $Bupleurum;
	public $Calendula;
	public $Camelina;
	public $Carex;
	public $Carex_Scirpus;
	public $Centaurea;
	public $Cephalaria_syriaca;
	public $Cerastium;
	public $cf_Asparagus;
	public $cf_Berberis;
	public $cf_Camelina;
	public $cf_Setaria;
	public $Chenopodium_album;
	public $Convolvulus;
	public $Coronilla;
	public $Eleocharis;
	public $Eragrostis;
	public $Eremo_Agropyron;
	public $Erodium;
	public $Erodium_cicutarium_awn;
	public $Euphorbia;
	public $Fumaria;
	public $Galium;
	public $Glaucium;
	public $Heliotropium;
	public $Hippocrepis;
	public $Hordeum_murinum_boeticum;
	public $Hyoscyamus;
	public $Lavatera;
	public $Lolium;
	public $Malva;
	public $Medicago;
	public $Medicago_type;
	public $Melilotus_Trifolium;
	public $Melilotus_Trifolium_punctate;
	public $Onopordum_Eleusine;
	public $Ornithogalum;
	public $Ornithogalum_type;
	public $Papaver;
	public $Peganum_harmala;
	public $Phalaris;
	public $Phleum;
	public $Plantago;
	public $Polygonum;
	public $Portulaca;
	public $Rumex;
	public $Salsola;
	public $Schinus;
	public $Scirpus;
	public $Scorpiurus;
	public $Silene;
	public $Stellaria;
	public $Stipa;
	public $Suaeda;
	public $Teucrium;
	public $Thymelaea;
	public $Trifolium_repens;
	public $Trifolium_cf_repens;
	public $Trigonella;
	public $Trigonella_astroites;
	public $Trigonella_coele_syriaca;
	public $Vaccaria;
	public $Verbascum;
	public $Veronica;
	public $Ziziphora;

	// SUMS
	public static $sumMesh = 0.0;
	public static $sumAdonis                       = 0;
	public static $sumAgrostemma                   = 0;
	public static $sumAizoon                       = 0;
	public static $sumAjuga                        = 0;
	public static $sumAmaranthus                   = 0;
	public static $sumAndrosace_maxima             = 0;
	public static $sumAnthemis                     = 0;
	public static $sumArnebia                      = 0;
	public static $sumArtemisia                    = 0;
	public static $sumAsparagus                    = 0;
	public static $sumAsphodelus                   = 0;
	public static $sumAstragalus                   = 0;
	public static $sumAtriplex                     = 0;
	public static $sumAvena                        = 0;
	public static $sumBellevalia                   = 0;
	public static $sumBrassica                     = 0;
	public static $sumBromus                       = 0;
	public static $sumBupleurum                    = 0;
	public static $sumCalendula                    = 0;
	public static $sumCamelina                     = 0;
	public static $sumCarex                        = 0;
	public static $sumCarex_Scirpus                = 0;
	public static $sumCentaurea                    = 0;
	public static $sumCephalaria_syriaca           = 0;
	public static $sumCerastium                    = 0;
	public static $sumcf_Asparagus                 = 0;
	public static $sumcf_Berberis                  = 0;
	public static $sumcf_Camelina                  = 0;
	public static $sumcf_Setaria                   = 0;
	public static $sumChenopodium_album            = 0;
	public static $sumConvolvulus                  = 0;
	public static $sumCoronilla                    = 0;
	public static $sumEleocharis                   = 0;
	public static $sumEragrostis                   = 0;
	public static $sumEremo_Agropyron              = 0;
	public static $sumErodium                      = 0;
	public static $sumErodium_cicutarium_awn       = 0;
	public static $sumEuphorbia                    = 0;
	public static $sumFumaria                      = 0;
	public static $sumGalium                       = 0;
	public static $sumGlaucium                     = 0;
	public static $sumHeliotropium                 = 0;
	public static $sumHippocrepis                  = 0;
	public static $sumHordeum_murinum_boeticum     = 0;
	public static $sumHyoscyamus                   = 0;
	public static $sumLavatera                     = 0;
	public static $sumLolium                       = 0;
	public static $sumMalva                        = 0;
	public static $sumMedicago                     = 0;
	public static $sumMedicago_type                = 0;
	public static $sumMelilotus_Trifolium          = 0;
	public static $sumMelilotus_Trifolium_punctate = 0;
	public static $sumOnopordum_Eleusine           = 0;
	public static $sumOrnithogalum                 = 0;
	public static $sumOrnithogalum_type            = 0;
	public static $sumPapaver                      = 0;
	public static $sumPeganum_harmala              = 0;
	public static $sumPhalaris                     = 0;
	public static $sumPhleum                       = 0;
	public static $sumPlantago                     = 0;
	public static $sumPolygonum                    = 0;
	public static $sumPortulaca                    = 0;
	public static $sumRumex                        = 0;
	public static $sumSalsola                      = 0;
	public static $sumSchinus                      = 0;
	public static $sumScirpus                      = 0;
	public static $sumScorpiurus                   = 0;
	public static $sumSilene                       = 0;
	public static $sumStellaria                    = 0;
	public static $sumStipa                        = 0;
	public static $sumSuaeda                       = 0;
	public static $sumTeucrium                     = 0;
	public static $sumThymelaea                    = 0;
	public static $sumTrifolium_repens             = 0;
	public static $sumTrifolium_cf_repens          = 0;
	public static $sumTrigonella                   = 0;
	public static $sumTrigonella_astroites         = 0;
	public static $sumTrigonella_coele_syriaca     = 0;
	public static $sumVaccaria                     = 0;
	public static $sumVerbascum                    = 0;
	public static $sumVeronica                     = 0;
	public static $sumZiziphora                    = 0;
}

?>
