<?php

use Phalcon\Mvc\Controller;

class SampleController extends Controller
{

	// show all
	public function indexAction()
	{
		// currently hardcoded
		$this->view->setVar("site","Dhiban");
	}

	// show one plant sample
	public function showAction($LabFlot)
	{
		$this->view->setVar("LabFlot", $LabFlot);
	}

	// show one artifact sample
	public function getHFAction($HFID)
	{
		$this->view->setVar("HFID", $HFID);
	}

}
