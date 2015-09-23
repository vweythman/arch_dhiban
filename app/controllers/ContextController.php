<?php

use Phalcon\Mvc\Controller;

class ContextController extends Controller
{
	// show all
	// hardcoded for Dhiban currently
	public function indexAction()
	{
		$samples  = Flots::find(
			array('order' => 'Context ASC')
		);
		$contexts = array();
		foreach ($samples as $sample) {
			$context = $sample->Context == "" ? "None" : $sample->Context;
			$contexts[$context][$sample->Unit][] = $sample;
		}

		$this->view->setVar("contexts", $contexts);
	}
}

?>
