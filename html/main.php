<?php
include_once(dirname(__FILE__).'/includes/utils.inc.php');

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>

<HEAD>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv='content-type' content='text/html;charset=UTF-8'>
<LINK REL='stylesheet' TYPE='text/css' HREF='stylesheets/common.css'>
</HEAD>

<BODY id="splashpage">


<div id="mainbrandsplash">
<div id="mainlogo">
<a href="http://www.nagios.org/" target="_blank"><img src="images/logofullsize.png" border="0" alt="Nagios" title="Nagios"></a>
</div>
</div>

<div id="currentversioninfo">
<div class="version">V3.2.0</div>
<div class="releasedate">2009年8月12日</div>
<div class="whatsnew"><a href="docs/whatsnew.html">Nagios 3新功能</a></div>
<div class="checkforupdates"><a href="http://www.nagios.org/checkforupdates/?version=3.2.0&product=nagioscore" target="_blank">检测升级</a></div>
<div class="whatsnew"><a href="docs/whatsnew.html">阅读新版本内容</a></div>
</div>


<div id="updateversioninfo">
<?php
	$updateinfo=get_update_information();
	//print_r($updateinfo);
	//$updateinfo['update_checks_enabled']=false;
	//$updateinfo['update_available']=true;
	if($updateinfo['update_checks_enabled']==false){
?>
		<div class="updatechecksdisabled">
		<div class="warningmessage">警告：未启用自动升级检测！</div>
		<div class="submessage">不启用升级检测可能存在风险。请手动访问<a href="http://www.nagios.org/" target="_blank">nagios.org</a>或是在Nagios配置文件里启用升级检测。</a></div>
		</div>
<?php
		}
	else if($updateinfo['update_available']==true){
?>
		<div class="updateavailable">
		<div class="updatemessage">有可用的新版本Nagios！</div>
		<div class="submessage">访问<a href="http://www.nagios.org/" target="_blank">nagios.org</a>以获取 Nagios <?php echo $updateinfo['update_version'];?>.</div>
		</div>
<?php
		}
?>
</div>


<div id="mainfooter">
<div id="maincopy">版权所有 &copy; 1999-2009 Ethan Galstad.<br>Portions copyright by Nagios community members  - see the THANKS file for more information.</div>
<div CLASS="disclaimer">
Nagios Core is licensed under the GNU General Public License and is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING THE WARRANTY OF DESIGN, MERCHANTABILITY, AND FITNESS FOR A PARTICULAR PURPOSE.  Nagios, Nagios Core and the Nagios logo are trademarks, servicemarks, registered trademarks or registered servicemarks owned by Nagios Enterprises, LLC.  Usage of the Nagios marks are governed by our <A href="http://www.nagios.org/legal/trademarkpolicy/">trademark policy</a>.
</div>
<div class="logos">
<a href="http://www.nagios.com/" target="_blank"><img src="images/NagiosEnterprises-whitebg-112x46.png" width="112" height="46" border="0" style="padding: 0 20px 0 0;" title="Nagios Enterprises"></a>  

<a href="http://www.nagios.org/" target="_blank"><img src="images/weblogo1.png" width="102" height="47" border="0" style="padding: 0 40px 0 40px;" title="Nagios.org"></a>

<a href="http://sourceforge.net/projects/nagios"><img src="images/sflogo.png" width="88" height="31" border="0" alt="SourceForge.net Logo" /></a>
</div>
</div> 


</BODY>
</HTML>
