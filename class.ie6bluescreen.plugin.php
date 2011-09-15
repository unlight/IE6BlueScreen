<?php if (!defined('APPLICATION')) exit();

$PluginInfo['IE6BlueScreen'] = array(
	'Name' => 'IE6BlueScreen',
	'Description' => "Show's a bluescreen instead the page for IE6 browsers.",
	'Version' => '1.00',
	'Date' => 'Autumn 2011',
	'Author' => 'Unknown',
	'AuthorEmail' => 'noreply@example.com',
	'AuthorUrl' => 'http://www.example.com'
);

class IE6BluescreenPlugin implements Gdn_IPlugin {
	
	public function Base_Render_Before(&$Sender) {
		if ($Sender->DeliveryType() == DELIVERY_TYPE_ALL) {
			$Agent = ArrayValue('HTTP_USER_AGENT', $_SERVER, '');
			preg_match_all('/MSIE (\d+)/', $Agent, $Match);
			if (isset($Match[1]) && is_array($Match[1])) {
				$Version = max($Match[1]);
				if ($Version == 6) $Sender->AddJsFile('plugins/IE6BlueScreen/IE6Bluescreen/jquery.ie6bluescreen.min.js');
			}
		}
	}
	
	public function Setup() {
	}
}