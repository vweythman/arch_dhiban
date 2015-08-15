<?php

use Phalcon\Mvc\Controller;

// Artifact Sample
class OtherRemainsController extends Controller {

	public function editAction($LabLF)
	{
		$FlotData = Flots::findFirst("LabLF = '$LabLF'");
		$Others   = (count($FlotData) == 1) ? $FlotData->OtherRemains : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("Others", $Others);
	}

	public function updateAction()
	{

		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);

			foreach ($meshes as $mesh) {

				$dataset = OtherRemains::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);
				
				if ($dataset == null)
				{
					$dataset = new OtherRemains();
					$dataset->Mesh   = $mesh;
					$dataset->LabLF  = $LabLF;
					$dataset->meshid = "$LabLF".($mesh / 10); 
				}

				$cleanMesh = pointToDash($mesh);
				
				$dataset->Bone              = $this->request->getPost("Bone$cleanMesh");
				$dataset->Carbonized_insect = $this->request->getPost("Carbonized_insect$cleanMesh");
				$dataset->Dung              = $this->request->getPost("Dung$cleanMesh");
				$dataset->Eggshell          = $this->request->getPost("Eggshell$cleanMesh");
				$dataset->Fish_Scale        = $this->request->getPost("Fish_Scale$cleanMesh");
				$dataset->Fish_Vertebra     = $this->request->getPost("Fish_Vertebra$cleanMesh");
				$dataset->Insect_Pupae      = $this->request->getPost("Insect_Pupae$cleanMesh");
				$dataset->Shell             = $this->request->getPost("Shell$cleanMesh");
				$dataset->Shell_Burnt       = $this->request->getPost("Shell_Burnt$cleanMesh");
				$dataset->save();
			}
			$this->response->redirect("OtherRemains/edit/$LabLF");
		}

	}
}

?>
