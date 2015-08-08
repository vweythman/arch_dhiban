<?php
	/* 
	* WORKING_URL
	* ensures that url exists
	* @ is necessary or php will generate a warning for something that the function is already checking for
	*
	*/
	function workingURL($url)
	{
		$headers = @get_headers($url);
		$status  = intval(substr($headers[0], 9, 3));
		return $status > 0 && $status < 400;
	}

	function wikiable($name, $langcode = 'en')
	{
		$url = "http://$langcode.wikipedia.org/wiki/$name";
		return workingURL($url);
	}

	/*
	* WIKI_THIS
	* link to the wikipedia page of named thing or return nothing if link does not work
	* optionally enter the wiki language code for the language specific version
	*  
	*/
	function wikiThis($value, $langcode = 'en')
	{
		$name = preg_replace('/_/', " ", $value);
		$url  = "http://$langcode.wikipedia.org/wiki/$value";
		$link = "<a href='$url'>$name</a>";
		return $link;
	}

	/*
	* ALL_MESH
	* print the mesh values
	*/
	function allMesh($data, $value)
	{
		$title = wikiThis($value);
		$sumtitle   = "sum$value";

		echo "<tr>";
		echo "<th>$title</th>";
		if (count($data) > 0)
		{
			foreach ($data as $dataPoint) {
				echo "<td>".$dataPoint->$value."</td>";
			}
			echo "<td>".$dataPoint::$$sumtitle."</td>";
		}
		else {
			echo "<td>0</td>";
			echo "<td>0</td>";
			echo "<td>0</td>";
			echo "<td>0</td>";
		}
	}

	/*
	* MESH_TABLE_HEADER
	* print the mesh header
	*/
	function meshTableHeader($data)
	{
		$points = (count($data) != 3) ? array(0.5, 1, 2) : array($data[0]->Mesh, $data[1]->Mesh, $data[2]->Mesh);

		echo "<thead>";

			echo "<tr> <th></th> <th colspan='3'>Mesh</th> <th></th> </tr>";

			echo "<tr>";
				echo "<th>&nbsp;</th>";
				foreach ($points as $point) { 
					echo "<th>$point</th>";
				}
				
				echo "<th>Total</th>";
			echo "</tr>";
		
		echo "</thead>";
	}

	function meshTableFooter($LabLF, $type)
	{
		echo "<tfoot>";
		echo "<th></th>";
		echo "<td colspan='3'>";
		echo Phalcon\Tag::linkTo("$type/edit/$LabLF", "Edit");
		echo "</td>";
		echo "<th></th>";
		echo "</tfoot>";
	}

	function meshForm($data, $value)
	{
		echo "<tr>";
		echo "<th>$value</th>";
		if (count($data) > 0)
		{
			foreach ($data as $dataPoint) {
				$cleanedMesh = pointToDash($dataPoint->Mesh);
				$name = "$value$cleanedMesh";
	 			Phalcon\Tag::setDefault($name, $dataPoint->$value);
				echo "<td>".Phalcon\Tag::textField($name)."</td>";
			}
		}
		else {
			echo "<td>0</td>";
			echo "<td>0</td>";
			echo "<td>0</td>";
			echo "<td>0</td>";
		}
	}

	// replace a point with a dash
	function pointToDash($ori)
	{
		return preg_replace("/\./", "_", $ori);
	}

?>
