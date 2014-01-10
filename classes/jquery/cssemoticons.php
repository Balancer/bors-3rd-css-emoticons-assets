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
		jquery::load();

		$loader = \AssetsManager\Loader::getInstance();
		$package = $loader->getPackage('balancer/bors-3rd-css-emoticons-assets');
		$preset = $loader->getPreset('jquery.cssemoticons');
		foreach($preset->getOrganizedStatements() as $type => $statements)
		{
			foreach ($statements as $statement)
			{
				$path = str_replace('../www/vendor', '/_bors-assets', $statement->__toString());
				switch($type)
				{
					case 'css':
						bors_use($path);
						break;
					case 'jsfiles_footer':
						jquery::plugin($path);
						break;
					default:
						bors_throw('Unknown type '.$type);
				}
			}
		}

//		jquery::plugin_css('cssemoticons');
//		jquery::plugin('cssemoticons');
//		$html = 
	}

	static function appear($element, $params = array())
	{
		self::load();
		jquery::appear($element, 'emoticonize', $params);
	}
}
