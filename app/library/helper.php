<?php
	/* 
	* WORKING_URL
	* ensures that url exists
	* @ is necessary or php will generate a warning for something that the function is already checking for
	*
	*/
	function workingURL($url) {
		$headers = @get_headers($url);
		$status  = intval(substr($headers[0], 9, 3));
		return $status > 0 && $status < 400;
	}

	/*
	* WIKI_THIS
	* link to the wikipedia page of named thing or return nothing if link does not work
	* optionally enter the wiki language code for the language specific version
	*  
	*/
	function wikiThis($name, $langcode = 'en') {
		$url = "http://$langcode.wikipedia.org/wiki/$name";
		return workingURL($url) ? "<a href='$url'>$name</a>" : "";
	}

?>
