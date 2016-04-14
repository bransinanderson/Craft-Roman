<?php
namespace Craft;

class RomanPlugin extends BasePlugin
{
	/*	CONFIG
	============================================================== */

	function getName()
	{
		return Craft::t('Roman');
	}

	function getVersion()
	{
		return '1.1';
	}

	function getDeveloper()
	{
		return 'Bransin Anderson';
	}

	function getDeveloperUrl()
	{
		return 'http://bransinanderson.com';
	}
	
	public function hasCpSection()
	{
		return false;
	}
	
}