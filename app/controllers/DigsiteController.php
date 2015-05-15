<?php

use Phalcon\Mvc\Controller;

class DigsiteController extends Controller
{
	// show all
	// hardcoded for Dhiban currently
	public function indexAction()
	{

	}

	public function addAction()
	{
		
	}

	// show one artifact sample
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
}

?>
