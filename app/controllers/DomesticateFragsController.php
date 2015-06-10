<?php

use Phalcon\Mvc\Controller;

class DomesticateFragsController extends Controller {

	public function editAction($LabLF)
	{
		$FlotData = Flots::findFirst("LabLF = '$LabLF'");
		$DomFrags = (count($FlotData) == 1) ? $FlotData->DomesticateFrags : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("DomFrags", $DomFrags);
	}

	public function updateAction()
	{
		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);

			foreach ($meshes as $mesh) {

				$dataset = DomesticateFrags::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);

				$cleanMesh = pointToDash($mesh);
				$dataset->Cereal_frag_CT                 = $this->request->getPost("Cereal_frag_CT$cleanMesh");
				$dataset->Fabaceae_frags                 = $this->request->getPost("Fabaceae_frags$cleanMesh");
				$dataset->Hordeum_frags                  = $this->request->getPost("Hordeum_frags$cleanMesh");
				$dataset->Nutshell_frag                  = $this->request->getPost("Nutshell_frag$cleanMesh");
				$dataset->Olea_sp_shell_frag             = $this->request->getPost("Olea_sp_shell_frag$cleanMesh");
				$dataset->Pisum_sativum_frags            = $this->request->getPost("Pisum_sativum_frags$cleanMesh");
				$dataset->Pisum_sativum_frags_wt         = $this->request->getPost("Pisum_sativum_frags_wt$cleanMesh");
				$dataset->Pisum_sativum_halves           = $this->request->getPost("Pisum_sativum_halves$cleanMesh");
				$dataset->Pisum_sativum_halves_wt        = $this->request->getPost("Pisum_sativum_halves_wt$cleanMesh");
				$dataset->Pisum_sativum_whole_distort    = $this->request->getPost("Pisum_sativum_whole_distort$cleanMesh");
				$dataset->Pisum_sativum_whole_distort_wt = $this->request->getPost("Pisum_sativum_whole_distort_wt$cleanMesh");
				$dataset->Triticum_sp_apex_embryo        = $this->request->getPost("Triticum_sp_apex_embryo$cleanMesh");
				$dataset->Triticum_sp_halves             = $this->request->getPost("Triticum_sp_halves$cleanMesh");
				$dataset->Vitis_vinifera_frag            = $this->request->getPost("Vitis_vinifera_frag$cleanMesh");

				$dataset->save();
			}
			$this->response->redirect("DomesticateFrags/edit/$LabLF");
		}

	}
}

?>
