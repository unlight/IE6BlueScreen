<?php if (!defined('APPLICATION')) exit();

$PluginInfo['IE6Bluescreen'] = array(
	'Name' => 'IE6Bluescreen',
	'Description' => "Show's a bluescreen instead the page for IE6 browsers.",
	'Version' => '1.0',
	'Date' => 'Autumn 2011',
	'Author' => 'Unknown',
	'AuthorEmail' => 'noreply@example.com',
	'AuthorUrl' => 'http://www.example.com'
);

class IE6BluescreenPlugin implements Gdn_IPlugin {
	
	public function Setup() {
	}
}