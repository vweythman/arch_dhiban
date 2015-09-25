<?php

use Phalcon\Mvc\Controller;
class WeedsWildsController extends Controller
{
	public function editAction($LabLF)
	{
		$FlotData   = Flots::findFirst("LabLF = '$LabLF'");
		$WeedsWilds = (count($FlotData) == 1) ? $FlotData->WeedsWilds : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("WeedsWilds", $WeedsWilds);

	}

	public function updateAction()
	{
		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);
			$saves  = 0;

			foreach ($meshes as $mesh) {

				$dataset = WeedsWilds::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);

				if ($dataset == null)
				{
					$dataset = new WeedsWilds();
					$dataset->Mesh   = $mesh;
					$dataset->LabLF  = $LabLF;
					$dataset->meshid = "$LabLF".($mesh / 10); 
				}
				
				$cleanMesh = pointToUnderscore($mesh);

				$dataset->Adonis                       = $this->request->getPost("Adonis$cleanMesh");
				$dataset->Agrostemma                   = $this->request->getPost("Agrostemma$cleanMesh");
				$dataset->Aizoon                       = $this->request->getPost("Aizoon$cleanMesh");
				$dataset->Ajuga                        = $this->request->getPost("Ajuga$cleanMesh");
				$dataset->Amaranthus                   = $this->request->getPost("Amaranthus$cleanMesh");
				$dataset->Androsace_maxima             = $this->request->getPost("Androsace_maxima$cleanMesh");
				$dataset->Anthemis                     = $this->request->getPost("Anthemis$cleanMesh");
				$dataset->Arnebia                      = $this->request->getPost("Arnebia$cleanMesh");
				$dataset->Artemisia                    = $this->request->getPost("Artemisia$cleanMesh");
				$dataset->Asparagus                    = $this->request->getPost("Asparagus$cleanMesh");
				$dataset->Asphodelus                   = $this->request->getPost("Asphodelus$cleanMesh");
				$dataset->Astragalus                   = $this->request->getPost("Astragalus$cleanMesh");
				$dataset->Atriplex                     = $this->request->getPost("Atriplex$cleanMesh");
				$dataset->Avena                        = $this->request->getPost("Avena$cleanMesh");
				$dataset->Bellevalia                   = $this->request->getPost("Bellevalia$cleanMesh");
				$dataset->Brassica                     = $this->request->getPost("Brassica$cleanMesh");
				$dataset->Bromus                       = $this->request->getPost("Bromus$cleanMesh");
				$dataset->Bupleurum                    = $this->request->getPost("Bupleurum$cleanMesh");
				$dataset->Calendula                    = $this->request->getPost("Calendula$cleanMesh");
				$dataset->Camelina                     = $this->request->getPost("Camelina$cleanMesh");
				$dataset->Carex                        = $this->request->getPost("Carex$cleanMesh");
				$dataset->Carex_Scirpus                = $this->request->getPost("Carex_Scirpus$cleanMesh");
				$dataset->Centaurea                    = $this->request->getPost("Centaurea$cleanMesh");
				$dataset->Cephalaria_syriaca           = $this->request->getPost("Cephalaria_syriaca$cleanMesh");
				$dataset->Cerastium                    = $this->request->getPost("Cerastium$cleanMesh");
				$dataset->cf_Asparagus                 = $this->request->getPost("cf_Asparagus$cleanMesh");
				$dataset->cf_Berberis                  = $this->request->getPost("cf_Berberis$cleanMesh");
				$dataset->cf_Camelina                  = $this->request->getPost("cf_Camelina$cleanMesh");
				$dataset->cf_Setaria                   = $this->request->getPost("cf_Setaria$cleanMesh");
				$dataset->Chenopodium_album            = $this->request->getPost("Chenopodium_album$cleanMesh");
				$dataset->Convolvulus                  = $this->request->getPost("Convolvulus$cleanMesh");
				$dataset->Coronilla                    = $this->request->getPost("Coronilla$cleanMesh");
				$dataset->Eleocharis                   = $this->request->getPost("Eleocharis$cleanMesh");
				$dataset->Eragrostis                   = $this->request->getPost("Eragrostis$cleanMesh");
				$dataset->Eremo_Agropyron              = $this->request->getPost("Eremo_Agropyron$cleanMesh");
				$dataset->Erodium                      = $this->request->getPost("Erodium$cleanMesh");
				$dataset->Erodium_cicutarium_awn       = $this->request->getPost("Erodium_cicutarium_awn$cleanMesh");
				$dataset->Euphorbia                    = $this->request->getPost("Euphorbia$cleanMesh");
				$dataset->Fumaria                      = $this->request->getPost("Fumaria$cleanMesh");
				$dataset->Galium                       = $this->request->getPost("Galium$cleanMesh");
				$dataset->Glaucium                     = $this->request->getPost("Glaucium$cleanMesh");
				$dataset->Heliotropium                 = $this->request->getPost("Heliotropium$cleanMesh");
				$dataset->Hippocrepis                  = $this->request->getPost("Hippocrepis$cleanMesh");
				$dataset->Hordeum_murinum_boeticum     = $this->request->getPost("Hordeum_murinum_boeticum$cleanMesh");
				$dataset->Hyoscyamus                   = $this->request->getPost("Hyoscyamus$cleanMesh");
				$dataset->Lavatera                     = $this->request->getPost("Lavatera$cleanMesh");
				$dataset->Lolium                       = $this->request->getPost("Lolium$cleanMesh");
				$dataset->Malva                        = $this->request->getPost("Malva$cleanMesh");
				$dataset->Medicago                     = $this->request->getPost("Medicago$cleanMesh");
				$dataset->Medicago_type                = $this->request->getPost("Medicago_type$cleanMesh");
				$dataset->Melilotus_Trifolium          = $this->request->getPost("Melilotus_Trifolium$cleanMesh");
				$dataset->Melilotus_Trifolium_punctate = $this->request->getPost("Melilotus_Trifolium_punctate$cleanMesh");
				$dataset->Onopordum_Eleusine           = $this->request->getPost("Onopordum_Eleusine$cleanMesh");
				$dataset->Ornithogalum                 = $this->request->getPost("Ornithogalum$cleanMesh");
				$dataset->Ornithogalum_type            = $this->request->getPost("Ornithogalum_type$cleanMesh");
				$dataset->Papaver                      = $this->request->getPost("Papaver$cleanMesh");
				$dataset->Peganum_harmala              = $this->request->getPost("Peganum_harmala$cleanMesh");
				$dataset->Phalaris                     = $this->request->getPost("Phalaris$cleanMesh");
				$dataset->Phleum                       = $this->request->getPost("Phleum$cleanMesh");
				$dataset->Plantago                     = $this->request->getPost("Plantago$cleanMesh");
				$dataset->Polygonum                    = $this->request->getPost("Polygonum$cleanMesh");
				$dataset->Portulaca                    = $this->request->getPost("Portulaca$cleanMesh");
				$dataset->Rumex                        = $this->request->getPost("Rumex$cleanMesh");
				$dataset->Salsola                      = $this->request->getPost("Salsola$cleanMesh");
				$dataset->Schinus                      = $this->request->getPost("Schinus$cleanMesh");
				$dataset->Scirpus                      = $this->request->getPost("Scirpus$cleanMesh");
				$dataset->Scorpiurus                   = $this->request->getPost("Scorpiurus$cleanMesh");
				$dataset->Silene                       = $this->request->getPost("Silene$cleanMesh");
				$dataset->Stellaria                    = $this->request->getPost("Stellaria$cleanMesh");
				$dataset->Stipa                        = $this->request->getPost("Stipa$cleanMesh");
				$dataset->Suaeda                       = $this->request->getPost("Suaeda$cleanMesh");
				$dataset->Teucrium                     = $this->request->getPost("Teucrium$cleanMesh");
				$dataset->Thymelaea                    = $this->request->getPost("Thymelaea$cleanMesh");
				$dataset->Trifolium_repens             = $this->request->getPost("Trifolium_repens$cleanMesh");
				$dataset->Trifolium_cf_repens          = $this->request->getPost("Trifolium_cf_repens$cleanMesh");
				$dataset->Trigonella                   = $this->request->getPost("Trigonella$cleanMesh");
				$dataset->Trigonella_astroites         = $this->request->getPost("Trigonella_astroites$cleanMesh");
				$dataset->Trigonella_coele_syriaca     = $this->request->getPost("Trigonella_coele_syriaca$cleanMesh");
				$dataset->Vaccaria                     = $this->request->getPost("Vaccaria$cleanMesh");
				$dataset->Verbascum                    = $this->request->getPost("Verbascum$cleanMesh");
				$dataset->Veronica                     = $this->request->getPost("Veronica$cleanMesh");
				$dataset->Ziziphora                    = $this->request->getPost("Ziziphora$cleanMesh");

				$saves += $dataset->save();
			}
			
			if ($saves == 3) {
				$this->response->redirect("sample/show/$LabLF");
			}
			else {
				$this->response->redirect("WeedsWilds/edit/$LabLF");
			}
		}
	}
}
?>