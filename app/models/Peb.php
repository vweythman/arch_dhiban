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
			// Domesticate sums
			self::$sumCicer_arietinum         += $this->Cicer_arietinum;
			self::$sumCoriandrum_sativum      += $this->Coriandrum_sativum;
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

			// domesticate other parts
			self::$sumVitis_sp_pedicel           += $this->Vitis_sp_pedicel;
			self::$sumVitis_vinifera_endocarp    += $this->Vitis_vinifera_endocarp;
			self::$sumVitis_vinifera_endocarp_wt += $this->Vitis_vinifera_endocarp_wt;

			// domesticate fragments
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

			// Families sums
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

			// Weeds and Wilds sums
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

			// Unknowns and Fragments sums
			self::$sumClinker                      += $this->Clinker;
			self::$sumIndeterminate_rachis         += $this->Indeterminate_rachis;
			self::$sumParenchyma_fragment          += $this->Parenchyma_fragment;
			self::$sumRachis_fragment              += $this->Rachis_fragment;
			self::$sumUnknown_fruit_seed           += $this->Unknown_fruit_seed;
			self::$sumUnidentifiable_seed_fragment += $this->Unidentifiable_seed_fragment;
			self::$sumUnknown_rachis_remains       += $this->Unknown_rachis_remains;
			self::$sumUnknown_non_Poaceae          += $this->Unknown_non_Poaceae;

			// Rachis Remains sums
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

			// Other Remains sum
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

	// Families
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

	// Weeds and Wilds
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


	// Unknowns and Fragments
	public $Clinker;
	public $Indeterminate_rachis;
	public $Parenchyma_fragment;
	public $Rachis_fragment;
	public $Unknown_fruit_seed;
	public $Unidentifiable_seed_fragment;
	public $Unknown_rachis_remains;
	public $Unknown_non_Poaceae;

	// Rachis Remains
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
	public static $sumCicer_arietinum         = 0;
	public static $sumCoriandrum_sativum      = 0;
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

	// domesticate other parts
	public static $sumVitis_sp_pedicel           = 0;
	public static $sumVitis_vinifera_endocarp    = 0;
	public static $sumVitis_vinifera_endocarp_wt = 0;

	// domesticate fragments
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

	// families sums
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

	// weeds and wilds sums
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

	// Unknowns and Fragments sums
	public static $sumClinker                      = 0;
	public static $sumIndeterminate_rachis         = 0;
	public static $sumParenchyma_fragment          = 0;
	public static $sumRachis_fragment              = 0;
	public static $sumUnknown_fruit_seed           = 0;
	public static $sumUnidentifiable_seed_fragment = 0;
	public static $sumUnknown_rachis_remains       = 0;
	public static $sumUnknown_non_Poaceae          = 0;

	// Rachis Remains
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

	// other remains
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
