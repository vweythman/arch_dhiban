<?php

use Phalcon\Mvc\Controller;

// Artifact Sample
class RachisRemainsController extends Controller {

	public function editAction($LabLF)
	{
		$FlotData = Flots::findFirst("LabLF = '$LabLF'");
		$Rachis   = (count($FlotData) == 1) ? $FlotData->RachisRemains : array();

		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("Rachis", $Rachis);

	}

	public function updateAction()
	{

		if ($this->request->isPost()) 
		{
			$LabLF  = $this->request->getPost("LabLF");
			$meshes = array(2, 1, 0.5);
			$saves = 0;

			foreach ($meshes as $mesh) {

				$dataset = RachisRemains::findFirst(
					array(
					"LabLF = ?1 AND Mesh = ?2",
					'bind' => array(1 => $LabLF, 2 => $mesh), 
					"for_update" => true
					)
				);

				if ($dataset == null)
				{
					$dataset = new RachisRemains();
					$dataset->Mesh   = $mesh;
					$dataset->LabLF  = $LabLF;
					$dataset->meshid = "$LabLF".($mesh / 10); 
				}

				$cleanMesh = pointToUnderscore($mesh);
				
				$dataset->Poaceae_culm                             = $this->request->getPost("Poaceae_culm$cleanMesh");
				$dataset->Poaceae_root                             = $this->request->getPost("Poaceae_root$cleanMesh");
				$dataset->Hordeum_internode                        = $this->request->getPost("Hordeum_internode$cleanMesh");
				$dataset->Hordeum_rachis                           = $this->request->getPost("Hordeum_rachis$cleanMesh");
				$dataset->Triticum_aestivum_rachis                 = $this->request->getPost("Triticum_aestivum_rachis$cleanMesh");
				$dataset->Triticum_aestivum_durum_rachis           = $this->request->getPost("Triticum_aestivum_durum_rachis$cleanMesh");
				$dataset->Triticum_aestivum_durum_rachis_internode = $this->request->getPost("Triticum_aestivum_durum_rachis_internode$cleanMesh");
				$dataset->Triticum_aestivum_durum_rachis_node      = $this->request->getPost("Triticum_aestivum_durum_rachis_node$cleanMesh");
				$dataset->Triticum_durum_rachis                    = $this->request->getPost("Triticum_durum_rachis$cleanMesh");
				$dataset->Triticum_mono_di_rachis                  = $this->request->getPost("Triticum_mono_di_rachis$cleanMesh");
				$dataset->Triticum_glume                           = $this->request->getPost("Triticum_glume$cleanMesh");
				$dataset->Triticum_internode                       = $this->request->getPost("Triticum_internode$cleanMesh");
				$dataset->Triticum_node                            = $this->request->getPost("Triticum_node$cleanMesh");
				$dataset->Triticum_rachis                          = $this->request->getPost("Triticum_rachis$cleanMesh");
				$dataset->Wild_or_Weed_rachis                      = $this->request->getPost("Wild_or_Weed_rachis$cleanMesh");
				
				$saves += $dataset->save();
			}
			
			if ($saves == 3) {
				$this->response->redirect("sample/show/$LabLF");
			}
			else {
				$this->response->redirect("RachisRemains/edit/$LabLF");	
			}
		}

	}
}

?>
