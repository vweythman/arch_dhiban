<?php

use Phalcon\Mvc\Controller;

class C14Controller extends Controller
{
	// show all
	// hardcoded for Dhiban currently
	public function indexAction()
	{
		$C14s = C14::find();
		$this->view->setVar("C14s", $C14s);

	}

	public function showAction($DHBC14Num)
	{
		$C14 = C14::findFirst("DHBC14Num = '$DHBC14Num'");
		if ($C14 == null)
		{
			$this->response->redirect("C14");
		}

		$this->view->setVar("C14", $C14);
	}
}

?>
