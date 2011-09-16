<?php if (!defined('APPLICATION')) exit();

$PluginInfo['IE6BlueScreen'] = array(
	'Name' => 'IE6 Blue Screen',
	'Description' => "Show's a bluescreen instead the page for IE6 browsers.",
	'Version' => '1.02',
	'Date' => 'Autumn 2011',
	'Author' => 'IE6BlueScreen',
	'AuthorUrl' => 'https://github.com/unlight/IE6BlueScreen'
);

class IE6BluescreenPlugin implements Gdn_IPlugin {
	
	public function Base_Render_Before(&$Sender) {
		if ($Sender->DeliveryType() == DELIVERY_TYPE_ALL) {
			$Agent = ArrayValue('HTTP_USER_AGENT', $_SERVER, '');
			preg_match_all('/MSIE (\d+)/', $Agent, $Match);
			if (isset($Match[1]) && is_array($Match[1]) && count($Match[1]) > 0) {
				$Version = max($Match[1]);
				if ($Version == 6) $Sender->AddJsFile('plugins/IE6BlueScreen/IE6Bluescreen/jquery.ie6bluescreen.min.js');
			}
		}
	}
	
	public function Setup() {
	}
}