<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	header('location:'.e_BASE.'index.php');
	exit;
}



class google_analytics_admin extends e_admin_dispatcher
{

	protected $modes = array(	
		'main'		=> array(
			'controller' 	=> 'google_analytics_main_ui',
			'path' 			=> null,
			'ui' 			=> 'google_analytics_admin_form_ui',
			'uipath' 		=> null
		)	
	);	
	
	
	protected $adminMenu = array(
			
	
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Google Analytics';
}

class google_analytics_main_ui extends e_admin_ui
{
		
		protected $pluginTitle		= 'Google Analytics';
		protected $pluginName		= 'google_analytics';
	
		
		protected $prefs = array( 
			'gacode'	   			=> array('title'=> LAN_PLUGIN_GA_GACODE, 'type'=>'text', 'help' => ''),
			'gadomain'	   		=> array('title'=> LAN_PLUGIN_GA_GADOMAIN, 'type'=>'text', 'help' => ''),		
			'displayfeatures'	   => array('title'=> LAN_PLUGIN_GA_DEMOGRA, 'type'=>'boolean', 'help' => '', 'data' => 'integer'),		
			'linkid'	  				=> array('title'=> LAN_PLUGIN_GA_LINKID, 'type'=>'boolean', 'help' => '', 'data' => 'integer'),		
			'gaverify'				=> array('title'=> LAN_PLUGIN_GA_GAVERIFY, 'type'=>'text', 'help' => '')
		);




}





		
new google_analytics_admin();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>