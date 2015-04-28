<?php

use Phalcon\Mvc\Controller;

class SampleController extends Controller
{

	// show all
	public function indexAction()
	{
		$samples = Flots::find();
		$this->view->setVar("samples", $samples);
		$this->view->setVar("site", "Dhiban"); // currently hardcoded
	}

	// show one plant sample
	public function showAction($LabFlot)
	{
		$this->view->setVar("LabFlot", $LabFlot);
	}

	// show one artifact sample
	public function getHFAction($HFID)
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

}
