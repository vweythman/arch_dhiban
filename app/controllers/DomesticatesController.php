<?php

use Phalcon\Mvc\Controller;

class DomesticatesController extends Controller {

	public function editAction($LabLF)
	{
		$FlotData = Flots::findFirst("LabLF = '$LabLF'");
		$Doms     = (count($FlotData) == 1) ? $FlotData->Domesticates : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("Doms", $Doms);
	}

	public function updateAction()
	{
		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);

			foreach ($meshes as $mesh) {

				$dataset = Domesticates::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);

				$cleanMesh = pointToDash($mesh);
				$dataset->Cicer_arietinum            = $this->request->getPost("Cicer_arietinum$cleanMesh");
				$dataset->Coriandrum_sativum         = $this->request->getPost("Coriandrum_sativum$cleanMesh");
				$dataset->Ficus_carica               = $this->request->getPost("Ficus_carica$cleanMesh");
				$dataset->Hordeum_distichon          = $this->request->getPost("Hordeum_distichon$cleanMesh");
				$dataset->Hordeum_sp                 = $this->request->getPost("Hordeum_sp$cleanMesh");
				$dataset->Hordeum_vulgare            = $this->request->getPost("Hordeum_vulgare$cleanMesh");
				$dataset->Indeterminate_Cereal       = $this->request->getPost("Indeterminate_Cereal$cleanMesh");
				$dataset->Lathyrus_sativa            = $this->request->getPost("Lathyrus_sativa$cleanMesh");
				$dataset->Lens_culinaris             = $this->request->getPost("Lens_culinaris$cleanMesh");
				$dataset->Olea_sp                    = $this->request->getPost("Olea_sp$cleanMesh");
				$dataset->Pisum_sativum_ct           = $this->request->getPost("Pisum_sativum_ct$cleanMesh");
				$dataset->Prunus_sp_cf_cerasifera    = $this->request->getPost("Prunus_sp_cf_cerasifera$cleanMesh");
				$dataset->Punica_granatum            = $this->request->getPost("Punica_granatum$cleanMesh");
				$dataset->Secale_cereale             = $this->request->getPost("Secale_cereale$cleanMesh");
				$dataset->Sorghum_cf_bicolor         = $this->request->getPost("Sorghum_cf_bicolor$cleanMesh");
				$dataset->Triticum_aestivum_durum    = $this->request->getPost("Triticum_aestivum_durum$cleanMesh");
				$dataset->Triticum_dicoccum          = $this->request->getPost("Triticum_dicoccum$cleanMesh");
				$dataset->Triticum_monococcum        = $this->request->getPost("Triticum_monococcum$cleanMesh");
				$dataset->Triticum_mono_di           = $this->request->getPost("Triticum_mono_di$cleanMesh");
				$dataset->Triticum_sp                = $this->request->getPost("Triticum_sp$cleanMesh");
				$dataset->Triticum_spelta            = $this->request->getPost("Triticum_spelta$cleanMesh");
				$dataset->Vicia_ervilia              = $this->request->getPost("Vicia_ervilia$cleanMesh");
				$dataset->Vicia_faba                 = $this->request->getPost("Vicia_faba$cleanMesh");
				$dataset->Vicia_sp                   = $this->request->getPost("Vicia_sp$cleanMesh");
				$dataset->Vitis_vinifera             = $this->request->getPost("Vitis_vinifera$cleanMesh");
				$dataset->Olea_sp_shell_frag_wt      = $this->request->getPost("Olea_sp_shell_frag_wt$cleanMesh");
				$dataset->Pisum_sativum_wt           = $this->request->getPost("Pisum_sativum_wt$cleanMesh");
				$dataset->Olea_sp_wt                 = $this->request->getPost("Olea_sp_wt$cleanMesh");
				$dataset->Vitis_sp_pedicel           = $this->request->getPost("Vitis_sp_pedicel$cleanMesh");
				$dataset->Vitis_vinifera_endocarp    = $this->request->getPost("Vitis_vinifera_endocarp$cleanMesh");
				$dataset->Vitis_vinifera_endocarp_wt = $this->request->getPost("Vitis_vinifera_endocarp_wt$cleanMesh");

				$dataset->save();
			}
			$this->response->redirect("Domesticates/edit/$LabLF");
		}

	}
}

?>
