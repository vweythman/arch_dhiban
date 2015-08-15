<?php

use Phalcon\Mvc\Controller;

// Artifact Sample
class FamiliesRemainsController extends Controller {

	public function editAction($LabLF)
	{
		$FlotData = Flots::findFirst("LabLF = '$LabLF'");
		$Fams     = (count($FlotData) == 1) ? $FlotData->FamiliesRemains : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("Fams", $Fams);
	}

	public function updateAction()
	{

		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);

			foreach ($meshes as $mesh) {

				$dataset = FamiliesRemains::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);
				
				if ($dataset == null)
				{
					$dataset = new FamiliesRemains();
					$dataset->Mesh   = $mesh;
					$dataset->LabLF  = $LabLF;
					$dataset->meshid = "$LabLF".($mesh / 10); 
				}

				$cleanMesh = pointToDash($mesh);
				
				$dataset->Amaranthaceae            = $this->request->getPost("Amaranthaceae$cleanMesh");
				$dataset->Apiaceae                 = $this->request->getPost("Apiaceae$cleanMesh");
				$dataset->Asteraceae               = $this->request->getPost("Asteraceae$cleanMesh");
				$dataset->Boraginaceae_mineralized = $this->request->getPost("Boraginaceae_mineralized$cleanMesh");
				$dataset->Boraginaceae_burnt       = $this->request->getPost("Boraginaceae_burnt$cleanMesh");
				$dataset->Brassicaceae             = $this->request->getPost("Brassicaceae$cleanMesh");
				$dataset->Caryophyllaceae          = $this->request->getPost("Caryophyllaceae$cleanMesh");
				$dataset->Chenopodiaceae           = $this->request->getPost("Chenopodiaceae$cleanMesh");
				$dataset->Cyperaceae               = $this->request->getPost("Cyperaceae$cleanMesh");
				$dataset->Dipsacaceae              = $this->request->getPost("Dipsacaceae$cleanMesh");
				$dataset->Fabaceae                 = $this->request->getPost("Fabaceae$cleanMesh");
				$dataset->Lamiaceae                = $this->request->getPost("Lamiaceae$cleanMesh");
				$dataset->Malvaceae                = $this->request->getPost("Malvaceae$cleanMesh");
				$dataset->Papaveraceae             = $this->request->getPost("Papaveraceae$cleanMesh");
				$dataset->Poaceae                  = $this->request->getPost("Poaceae$cleanMesh");
				$dataset->Poaceae_Frags            = $this->request->getPost("Poaceae_Frags$cleanMesh");
				$dataset->Polygonaceae             = $this->request->getPost("Polygonaceae$cleanMesh");
				$dataset->Portulaceae              = $this->request->getPost("Portulaceae$cleanMesh");
				$dataset->Rubiaceae                = $this->request->getPost("Rubiaceae$cleanMesh");
				$dataset->Scrophulariaceae         = $this->request->getPost("Scrophulariaceae$cleanMesh");
				$dataset->Solanaceae               = $this->request->getPost("Solanaceae$cleanMesh");

				$dataset->save();
			}
			$this->response->redirect("FamiliesRemains/edit/$LabLF");
		}

	}
}

?>