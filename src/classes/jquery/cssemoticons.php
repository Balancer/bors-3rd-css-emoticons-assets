<?php

class jquery_cssemoticons
{
	/*
		<link href="stylesheets/jquery.cssemoticons.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="javascripts/jquery.js" type="text/javascript"></script>
		<script src="javascripts/jquery.cssemoticons.js" type="text/javascript"></script>
	*/

	static function load()
	{
		jquery::plugin_css('cssemoticons');
		jquery::plugin('cssemoticons');
	}

	static function appear($element, $params = array())
	{
		self::load();
		jquery::appear($element, 'emoticonize', $params);
	}
}
