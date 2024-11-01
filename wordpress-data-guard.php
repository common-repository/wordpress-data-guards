<?php /*
*************************************************************************

Plugin Name:  Wordpress Data Guard
Plugin URI:   http://www.originaltips.com/wordpress-data-guard
Description: <strong>Wordpress Data Guard</strong> protects your wordpress website from the unauthorized content copying. You can block the particular IP Addresses, right click usage, text-selection and keyboard shortcuts (which are used for data stealing) on your website, so that the individuals can't copy your data. You can also disable these restrctions only for the logged-in users. However to add more security to your website, you can purchase <a href="http://www.originaltips.com/wordpress-data-guard">Wordpress Data Guard Pro</a>. The Wordpress Data Guard Pro provides complete protection for your wordpress website content and images whether from human or from robot.
Version:      8
Author:       OriginalTips.com
Author URI:   http://www.originaltips.com/
@copyright	  Copyright (c) 2018, OriginalTips.com

*************************************************************************

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*************************************************************************/

$val_OTWDG_Blacklist_IP_address = get_option('OTWDG_Blacklist_IP_address');
if($val_OTWDG_Blacklist_IP_address != '') {$val_OTWDG_Blacklist_IP_addresses = (explode(',', $val_OTWDG_Blacklist_IP_address));
foreach($val_OTWDG_Blacklist_IP_addresses as $sip){
    $blacklisted_ips[] = trim($sip);
}}
$wp_url = get_bloginfo('wpurl');
$base_name = get_bloginfo('wpurl')."/wp-content/plugins/".basename(dirname(__FILE__));
echo $val_OTWDG_Reg_Loggedin = get_option('OTWDG_Reg_Loggedin');
$val_OTWDG_Reg_Loggedin == 'true';
function ORIGINALTIPS_OTWDG_Disable_RC($display_alert_bin, $OTWDG_Message='')
{ ?>
<!-- Wordpress Data Guard Lite -->
<meta http-equiv="imagetoolbar" content="no">
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(document).bind("contextmenu",function(e){
		return false;
	});
});
</script> 
<script type="text/javascript">
function disableText(e){
  return false;
}
function reEnable(){
  return true;
}
</script>
<script type="text/javascript">
var msgpopup="<?php echo $OTWDG_Message; ?>";
function ESW(){
	if(typeof alertVis !== 'undefined')
	{
		if(alertVis == "1")
			alert(message);
	}

	if(typeof closeWin !== 'undefined')
	{
		if(closeWin == "1")
			self.close();
	}
	return false;
}
function IE() {
     if (event.button == "2" || event.button == "3"){ESW();}
}
function NS(e) {
     if (document.layers || (document.getElementById && !document.all)){
          if (e.which == "2" || e.which == "3"){ ESW();}
     }
}
<?php if($display_alert_bin == 1) { ?> document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("alert(msgpopup);return false") <?php } if($display_alert_bin == 0) {
?> document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("return false")
<?php } ?> </script> <?php } 
function ORIGINALTIPS_OTWDG_Disable_TS()
{
?> <script type="text/javascript">
	// document.onselectstart = new Function ("return false");
function disableSelection(target){
if (typeof target.onselectstart!="undefined")
	target.onselectstart=function(){return false;}
else if (typeof target.style.MozUserSelect!="undefined")
	target.style.MozUserSelect="none";
else
	target.onmousedown=function(){return false}
target.style.cursor = "default";
}</script> <?php
} function ORIGINALTIPS_OTWDG_JQLOAD(){
wp_enqueue_script('jquery');
}function ORIGINALTIPS_PROT_MSG()
{
return '<div style="text-align: center">
<small>Website is Protected By Using The <a href="http://www.originaltips.com/wordpress-data-guard" target="_blank">Wordpress Data Guard</a> Plugin From <a href="http://www.originaltips.com/">OriginalTips.com</a></small></div>';
} function ORIGINALTIPS_OTWDG_FT1()
{
global $val_OTWDG_Reg_Loggedin;
echo ORIGINALTIPS_PROT_MSG();
} function ORIGINALTIPS_OTWDG_FT()
{
echo '<script type="text/javascript">
disableSelection(document.body)
</script>';
}
function ORIGINALTIPS_OTWDG_Disable_KS()
{
	echo '
	<script type="text/javascript">
	document.onselectstart = new Function ("return false");
	jQuery(document).ready(function(){
		jQuery(document).bind("cut copy paste",function(e){
			e.preventDefault();
		});
	});
	</script>';
} function ORIGINALTIPS_OTWDG_OPT()
{
    global $base_name, $wp_url;
    if($_POST['OTWDG_Options_Update']){
		update_option('OTWDG_TS_Val',$_POST['OTWDG_TS_Val']);
		update_option('OTWDG_KS_Val',$_POST['OTWDG_KS_Val']);
		update_option('OTWDG_RC_Val',$_POST['OTWDG_RC_Val']);
		update_option('OTWDG_DMORC_Val',$_POST['OTWDG_DMORC_Val']);
		update_option('OTWDG_RC_text',$_POST['OTWDG_RC_text']);
		update_option('OTWDG_Blacklist_IP_address',$_POST['OTWDG_Blacklist_IP_address']);
		update_option('OTWDG_ALIU_Val',$_POST['OTWDG_ALIU_Val']);
		update_option('OTWDG_FA_Val',$_POST['OTWDG_FA_Val']);
        echo '<h2>Now Your Site is Protected.</h2>';
	}
	$val_OTWDG_TS_Val = get_option('OTWDG_TS_Val');
	$val_OTWDG_KS_Val = get_option('OTWDG_KS_Val');
	$val_OTWDG_RC_Val = get_option('OTWDG_RC_Val');
	$val_OTWDG_DMORC_Val = get_option('OTWDG_DMORC_Val');
	$val_OTWDG_RC_text = get_option('OTWDG_RC_text');
	$val_OTWDG_Blacklist_IP_address = get_option('OTWDG_Blacklist_IP_address');
	$val_OTWDG_ALIU_Val = get_option('OTWDG_ALIU_Val');
	$val_OTWDG_FA_Val = get_option('OTWDG_FA_Val'); 
?>
	<div class="wrap">
	<h2>Wordpress Data Guard Lite - Options</h2>
<div style="display:block;float:right;padding:5px;"> 
<style>body {  margin:0;  margin:0;}.originaltips_val_admin_sidebar {  float:left;  font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;  font-size: 12px;  margin:10px;  width:222px;} .originaltips_val_admin_sidebar h3 {  font-size: 16px;  margin:0 0 10px;}.originaltips_val_admin_sidebar ul {  margin:0;  padding:0;}.originaltips_val_admin_sidebar_section {  background-color:#f6f6f6;  border:1px solid #ccc;  float:left;  margin:0 0 20px 0;  padding:0 10px;  width:200px;}.originaltips_val_admin_sidebar li{  font-size:11px;  line-height:16px;  list-style:disc;  margin:5px 0 5px 20px;}#slider ul, #slider li{        margin:0;        padding:0;        list-style:none;        }#slider, #slider li{        width:200px;        height:135px;        overflow:hidden;        }span#prevBtn{}span#nextBtn{}</style> <div class="originaltips_val_admin_sidebar"><div class="originaltips_val_admin_sidebar_section">  <center><p><a title="Wordpress Data Guard Professional" style="text-decoration:none;" href="http://www.originaltips.com/wordpress-data-guard" target="_blank" onMouseOver="window.status={http://www.originaltips.com/wordpress-data-guard};return true;" onMouseOut="window.status={ };return true;">  <img src="<?php echo $base_name; ?>/buy_wordpress_data_guard_pro.png" alt="Wordpress Data Guard Pro" border="0"/><br /><br /><font>Check the Difference between Lite and Professional Version.</font></a>    </center> </div><small><div class="originaltips_val_admin_sidebar_section"><center><h3>Support</h3>  For any query regarding the plugin, kindly mail us at <a href="mailto:support@originaltips.com">support@originaltips.com</a>.</center></div></div> </div></div></small><h4 style="text-align: left; color:red">Apply more security to your wordpress website, by installing <a href="http://www.originaltips.com/wordpress-data-guard" style="color:red" target="_blank">Wordpress Data Guard Professional</a>.</h4></p><form method="post" id="OTWDG_OPT"><fieldset class="options"> <table class="form-table"><tr valign="top"><td width="50%">Text-Selection : </td><td width="10%"><label><input name="OTWDG_TS_Val" type="radio" value="0" <?php if($val_OTWDG_TS_Val == 0) echo('checked'); ?> /> Restrict</td></label><td width="30%"><label><input name="OTWDG_TS_Val" type="radio" value="1" <?php if($val_OTWDG_TS_Val == 1) echo('checked'); ?> /> Allow</td></tr><tr valign="top"><td>Keyboard Shortcuts (which are used for Data Stealing) : </td><td><label><input name="OTWDG_KS_Val" type="radio" value="0" <?php if($val_OTWDG_KS_Val == 0) echo('checked'); ?> /> Restrict </label></td><td><label><input name="OTWDG_KS_Val" type="radio" value="1" <?php if($val_OTWDG_KS_Val == 1) echo('checked'); ?> /> Allow</label></td></tr><tr valign="top"><td>Right Click : </td><td><label><input name="OTWDG_RC_Val" type="radio" value="0" <?php if($val_OTWDG_RC_Val == 0) echo('checked'); ?> /> Restrict </label></td><td><label><input name="OTWDG_RC_Val" type="radio" value="1" <?php if($val_OTWDG_RC_Val == 1) echo('checked'); ?> /> Allow</label></td></tr><tr valign="top"><td>Display Message on Right Click : </td><td><label><input name="OTWDG_DMORC_Val" type="radio" value="1" <?php if($val_OTWDG_DMORC_Val == 1) echo('checked'); ?> /> Yes </label></td><td><label><input name="OTWDG_DMORC_Val" type="radio" value="0" <?php if($val_OTWDG_DMORC_Val == 0) echo('checked'); ?> /> No </label></td><tr><td><b>(If Yes, then Enter Warning Message)</b><input name="OTWDG_RC_text" type="text" id="OTWDG_RC_text" value="<?php echo get_option('OTWDG_RC_text') ;?>" size="50"/></td><td>&nbsp;</td></tr><tr valign="top"><td>Allow Logged-In users to perfom Right Click and Text-Selection : <br /> </td><td><label><input name="OTWDG_ALIU_Val" type="radio" value="0" <?php if($val_OTWDG_ALIU_Val == 0) echo('checked'); ?> /> Allow </label></td><td><label><input name="OTWDG_ALIU_Val" type="radio" value="1" <?php if($val_OTWDG_ALIU_Val == 1) echo('checked'); ?> /> No, Restrict Everyone</label></td></tr><tr valign="top"><td>Proudly tell the whole world that you are using WordPress Data Guard : </td><td><label><input name="OTWDG_FA_Val" type="radio" value="1" <?php if($val_OTWDG_FA_Val == 1) echo('checked'); ?> /> Yes </label></td><td><label><input name="OTWDG_FA_Val" type="radio" value="0" <?php if($val_OTWDG_FA_Val == 0) echo('checked'); ?> /> No</label></td></tr><tr><td><label><b>Blacklisted IP Addresses: </b> (Comma Separated)<br /></label><br /><small>Note: Please cross-check, you are not blocking your own IP Address @ <a target="_blank" href="http://www.originaltips.com/tools/ip-address-checker.php">http://www.originaltips.com/tools/ip-address-checker.php</a>.</small></td><td colspan="2"><textarea name="OTWDG_Blacklist_IP_address" id="OTWDG_Blacklist_IP_address" rows="2" cols="35"><?php echo get_option('OTWDG_Blacklist_IP_address') ;?></textarea>
</td></tr>

<tr>
    <td colspan="3" align="center">
    <br />
    <input type="submit" class="button-primary" name="OTWDG_Options_Update" value="Save Changes" />
    &nbsp;
    <input type="button" class="button-secondary" name="OTWDG_Options_Cancel" value="Cancel" onclick="window.location.href='<?php echo $wp_url.'/wp-admin/options-general.php?page='.basename(__FILE__); ?>'" />
    </td>
</tr>


</table><br /><h4 style="text-align: right">Plugin by <a href="http://www.originaltips.com/" target="_blank">OriginalTips.com</a></h4></table>
</fieldset></form><?php
} //Required
function Wordpress_Data_Guard()
{ 
	global $base_name;
  	echo "<script type=\"text/javascript\" src=\"$base_name/wpdg.js\"></script>"; 
  	$val_OTWDG_TS_Val = get_option('OTWDG_TS_Val');
  	$val_OTWDG_KS_Val = get_option('OTWDG_KS_Val');
	$val_OTWDG_RC_Val = get_option('OTWDG_RC_Val');
	$val_OTWDG_RC_text = get_option('OTWDG_RC_text');
	$val_OTWDG_Blacklist_IP_address = get_option('OTWDG_Blacklist_IP_address');
	$val_OTWDG_DMORC_Val = get_option('OTWDG_DMORC_Val');
	$val_OTWDG_ALIU_Val = get_option('OTWDG_ALIU_Val');
	$val_OTWDG_FA_Val = get_option('OTWDG_FA_Val');
	$val_OTWDG_Reg_Loggedin == 'true';
	$preview = strpos(strtoupper(getenv("REQUEST_URI")), '?preview=true');	
	if ($preview === false) {
		if($val_OTWDG_TS_Val == 0)
		{
			if(($val_OTWDG_ALIU_Val == 0) && ((is_user_logged_in()))) {} else {ORIGINALTIPS_OTWDG_Disable_TS();}
		}
		if($val_OTWDG_KS_Val == 0)
		{
			if(($val_OTWDG_ALIU_Val == 0) && ((is_user_logged_in()))) {} else {ORIGINALTIPS_OTWDG_Disable_KS();}
		}
		if(($val_OTWDG_RC_Val == 0) && ($val_OTWDG_DMORC_Val == 0))
		{
			if(($val_OTWDG_ALIU_Val == 0) && ((is_user_logged_in()))) {} else {ORIGINALTIPS_OTWDG_Disable_RC(0);}
		}
		elseif(($val_OTWDG_RC_Val == 0) && ($val_OTWDG_DMORC_Val == 1))
		{
			if(($val_OTWDG_ALIU_Val == 0) && ((is_user_logged_in())))
			{ }
			else
			{
				ORIGINALTIPS_OTWDG_Disable_RC(1, $val_OTWDG_RC_text);
			}
		}
	}
} function WordpressDataGuard_footer()
{
	$val_OTWDG_TS_Val = get_option('OTWDG_TS_Val');	
	$val_OTWDG_ALIU_Val = get_option('OTWDG_ALIU_Val');
	if($val_OTWDG_TS_Val == 0) { if(($val_OTWDG_ALIU_Val == 0) && ((is_user_logged_in()))) {} else {ORIGINALTIPS_OTWDG_FT();} }
} function WordpressDataGuard_FA()
{
	$val_OTWDG_FA_Val = get_option('OTWDG_FA_Val');
	if($val_OTWDG_FA_Val == 1) { ORIGINALTIPS_OTWDG_FT1(); }
} function WordpressDataGuard_Admin()
{
	if (function_exists('add_options_page')) {
		add_options_page('Wordpress Data Guard', 'Wordpress Data Guard', 'level_10', basename(__FILE__),'ORIGINALTIPS_OTWDG_OPT');
	}
} if(isset($blacklisted_ips)) { if((!is_array($blacklisted_ips) && (trim($blacklisted_ips) == $_SERVER['REMOTE_ADDR'])) || (is_array($blacklisted_ips) && in_array("$_SERVER[REMOTE_ADDR]",$blacklisted_ips))){  
    die("<br /><br /><br /><br /><br /><center>Your IP Address is blocked. Please contact the Website Administrator.</center><!--" .  ORIGINALTIPS_PROT_MSG() . " -->"); 
}}

//For Wordpress Data Guard
add_action('wp_enqueue_scripts','ORIGINALTIPS_OTWDG_JQLOAD');
add_action('admin_menu','WordpressDataGuard_Admin',1);
add_action('wp_head','Wordpress_Data_Guard');
add_action('wp_footer','WordpressDataGuard_FA');
add_action('wp_footer','WordpressDataGuard_footer');

?>