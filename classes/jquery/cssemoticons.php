<?php

class jquery_cssemoticons extends jquery_plugin
{
	/*
		<link href="stylesheets/jquery.cssemoticons.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="javascripts/jquery.js" type="text/javascript"></script>
		<script src="javascripts/jquery.cssemoticons.js" type="text/javascript"></script>
	*/

	static function appear($element, $params = array())
	{
		self::load('cssemoticons', 'jquery.css-emoticons', 'balancer/bors-3rd-css-emoticons-assets');
		jquery::appear($element, 'emoticonize', $params);
	}
}
