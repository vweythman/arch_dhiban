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
		$sum   = "sum$value";

		echo "<tr>";
		echo "<th>$title</th>";
		echo "<td>".$data[0]->$value."</td>";
		echo "<td>".$data[1]->$value."</td>";
		echo "<td>".$data[2]->$value."</td>";
		echo "<td>".$data[2]::$$sum."</td>";
	}
	/*
	* MESH_TABLE_HEADER
	* print the mesh header
	*/
	function meshTableHeader($data)
	{
		echo "<thead>";
		echo "<tr>";
		echo "<th></th>";
		echo "<th colspan='3'>Mesh</th>";
		echo "<th></th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>&nbsp;</th>";
		echo "<th>".$data[0]->Mesh."</th>";
		echo "<th>".$data[1]->Mesh."</th>";
		echo "<th>".$data[2]->Mesh."</th>";
		echo "<th>Total</th>";
		echo "</tr>";
		echo "</thead>";

	}

?>
