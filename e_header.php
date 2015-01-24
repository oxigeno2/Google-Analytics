<?php

if (!defined('e107_INIT')) { exit; }

if(plugInstalled('google_analytics'))
{
if(USER_AREA)
{
$gap = e107::getPlugPref('google_analytics');

if($gap['displayfeatures'] == 1) {
$displayfeatures = "ga('require','displayfeatures');";
}
if($gap['linkid'] == 1) {
$linkid = "ga('require', 'linkid', 'linkid.js');";
}

echo '<meta name="google-site-verification" content="'.varset($gap['gaverify']).'"/>
<!-- Google Analytics Plugin by RedOxigen Sooftware -->
';

e107::js('inline',"

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '".varset($gap['gacode'])."', '".varset($gap['gadomain'])."');
  ".$displayfeatures."
  ".$linkid."
  ga('send', 'pageview');


");
	
unset($gap);
}
}

?>