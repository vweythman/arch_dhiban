<?php

use Phalcon\Mvc\Controller;
use Phalcon\HTTP\RequestInterface;

class HFController extends Controller
{
	public function indexAction()
	{
		$this->response->redirect("sample/");
	}

	public function showAction($HFID)
	{
		$HFData = HF::find("HF = '$HFID'");

		if (count($HFData) > 0) {	
			$firstHF  = $HFData[0];
			$LabLFs = $firstHF->Flots;
		} else {
			$LabLFs = Flots::find("HF = $HFID");
		}
		
		$this->view->setVar("HFID", $HFID);
		$this->view->setVar("HFs", $HFData);
		$this->view->setVar("LabLFs", $LabLFs);
	}

	public function editAction($HFID)
	{
		$HFData = HF::find("HF = '$HFID'");
		$this->view->setVar("HFID", $HFID);
		$this->view->setVar("data", $HFData);
	}

	// POST

	public function updateAction()
	{
		$changeables = array("Material", "Type", "Part", "Spec", "Density", "CountTotal", "WeightDens", "WeightTotal", "CT_25", "WT_25", "CT_12_5", "WT_12_5", "CT_8", "WT_8", "CT_4", "WT_4");

		if ($this->request->isPost()) {
			$HFID = $this->request->getPost("HF");
			$HFData = HF::find("HF = '$HFID'");
			echo $HFID;

			foreach ($HFData as $HF) {
				$start  = "HF_$HF->id";
				echo "<p>$start</p>";
				foreach ($changeables as $value) {
					$name = $start."_$value";
					$nVal = $this->request->getPost($name);
					$HF->$value = $nVal;
				}
				$HF->save();
			}
			$this->response->redirect("HF/show/$HFID");
		}
	}

	public function saveAction()
	{
		if ($this->request->isPost()) {
			$hf = new HF();
			$hf->HF       = $this->request->getPost("HF");	
			$hf->Material = $this->request->getPost("Material");
			
			$hf->Type = $this->request->getPost("Type");
			$hf->Part = $this->request->getPost("Part");
			$hf->Spec = $this->request->getPost("Spec");

			$hf->Density     = $this->request->getPost("Density");
			$hf->CountTotal  = $this->request->getPost("CountTotal");
			$hf->WeightDens  = $this->request->getPost("WeightDens");
			$hf->WeightTotal = $this->request->getPost("WeightTotal");

			$hf->CT_25   = $this->request->getPost("CT_25");
			$hf->WT_25   = $this->request->getPost("WT_25");
			$hf->CT_12_5 = $this->request->getPost("CT_12_5");
			$hf->WT_12_5 = $this->request->getPost("WT_12_5");

			$hf->CT_8 = $this->request->getPost("CT_8");
			$hf->WT_8 = $this->request->getPost("WT_8");
			
			$hf->CT_4 = $this->request->getPost("CT_4");
			$hf->WT_4 = $this->request->getPost("WT_4");
			
			$hf->save();
			$this->response->redirect("HF/show/$hf->HF");
		}

		$this->response->redirect("sample");
	}
}

?>
