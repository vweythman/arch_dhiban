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
			$LabFlots = $firstHF->Flots;
		} else {
			$LabFlots = Flots::find("HF = $HFID");
		}
		
		$this->view->setVar("HFID", $HFID);
		$this->view->setVar("HFs", $HFData);
		$this->view->setVar("LabFlots", $LabFlots);
	}

	// POST
	public function saveAction()
	{
		if ($this->request->isPost()) {
			$hf = new HF();
			$hf->HF       = $this->request->getPost("HF");
			$hf->Square   = $this->request->getPost("Square");
			$hf->Locus    = $this->request->getPost("Locus");
			$hf->SG       = $this->request->getPost("SG");
			$hf->Volume   = $this->request->getPost("Volume");
			$hf->Field    = $this->request->getPost("Field");
			$hf->Bagnum   = $this->request->getPost("Bagnum");
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

			/*
			if ($hf->save()) {

			}
			*/
		}

		$this->response->redirect("HF/show/$hf->HF");

	}
}

?>
