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
	public function showAction($LabLF)
	{
		$FlotData = Flots::find("LabLF = '$LabLF'");
		$this->view->setVar("LabLF", $LabLF);
		$this->view->setVar("FlotData", $FlotData);

		if (count($FlotData) > 0)
		{
			$Doms       = $FlotData[0]->Domesticates;
			$DomFrags   = $FlotData[0]->DomesticateFrags;
			$Fams       = $FlotData[0]->FamiliesRemains;
			$WeedsWilds = $FlotData[0]->WeedsWilds;
			$Unknowns   = $FlotData[0]->Unknowns;
			$Rachis     = $FlotData[0]->RachisRemains;
			$Others     = $FlotData[0]->OtherRemains;
		}
		else {
			$Doms = $DomFrags = $Fams = $WeedsWilds = $Unknowns = $Rachis = $Others = array();
		}

		$this->view->setVar("Doms", $Doms);
		$this->view->setVar("DomFrags", $DomFrags);
		$this->view->setVar("Fams", $Fams);
		$this->view->setVar("WeedsWilds", $WeedsWilds);
		$this->view->setVar("Unknowns", $Unknowns);
		$this->view->setVar("Rachis", $Rachis);
		$this->view->setVar("Others", $Others);

	}
}
