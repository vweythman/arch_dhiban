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
		$PebData = Peb::find("FlotNum = '$LabFlot'");
		$FlotData = Flots::find("LabFlot = '$LabFlot'");
		$this->view->setVar("LabFlot", $LabFlot);
		$this->view->setVar("PebData", $PebData);
		$this->view->setVar("FlotData", $FlotData);
		$this->view->setVar("DomesticatesTotals", array(0, 0));

	}
}
