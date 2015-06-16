<?php
/*
* Format the date
*/
function formatDate($date)
{
    return date('F j, Y, g:i a', strtotime($date));
}

/*
*   To shorten txt from database
*/
  function shortenText($text, $chars = 500){
	$text = $text." ";
	$text = substr($text, 0, $chars);
	$text = substr($text, 0, strrpos($text,' '));
	$text = $text."...";
	return $text;
  }






