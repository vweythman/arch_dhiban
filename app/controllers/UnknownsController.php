<?php

use Phalcon\Mvc\Controller;

// Artifact Sample
class UnknownsController extends Controller {

	public function editAction($LabLF)
	{
		$FlotData = Flots::findFirst("LabLF = '$LabLF'");
		$Unknowns = (count($FlotData) == 1) ? $FlotData->Unknowns : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("Unknowns", $Unknowns);
	}

	public function updateAction()
	{
		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);
			$saves  = 0;

			foreach ($meshes as $mesh) {

				$dataset = Unknowns::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);

				if ($dataset == null)
				{
					$dataset = new Unknowns();
					$dataset->Mesh   = $mesh;
					$dataset->LabLF  = $LabLF;
					$dataset->meshid = "$LabLF".($mesh / 10); 
				}

				$cleanMesh = pointToDash($mesh);
				$dataset->Clinker                      = $this->request->getPost("Clinker$cleanMesh");
				$dataset->Indeterminate_rachis         = $this->request->getPost("Indeterminate_rachis$cleanMesh");
				$dataset->Parenchyma_fragment          = $this->request->getPost("Parenchyma_fragment$cleanMesh");
				$dataset->Rachis_fragment              = $this->request->getPost("Rachis_fragment$cleanMesh");
				$dataset->Unknown_fruit_seed           = $this->request->getPost("Unknown_fruit_seed$cleanMesh");
				$dataset->Unidentifiable_seed_fragment = $this->request->getPost("Unidentifiable_seed_fragment$cleanMesh");
				$dataset->Unknown_rachis_remains       = $this->request->getPost("Unknown_rachis_remains$cleanMesh");
				$dataset->Unknown_non_Poaceae          = $this->request->getPost("Unknown_non_Poaceae$cleanMesh");

				$saves += $dataset->save();
			}

			if ($saves == 3) {
				$this->response->redirect("sample/show/$LabLF");
			}
			else {
				$this->response->redirect("unknowns/edit/$LabLF");
			}
		}
	}
}

?>