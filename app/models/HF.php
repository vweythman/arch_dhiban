<?php

use Phalcon\Mvc\Model;

// Artifact Sample
class HF extends Model
{
	public function getSource()
	{
		return 'raw_hf_data';
	}
}
