<?php
/*
Plugin Name: WP quup Button
Plugin URI: http://quup.com
Description: Yazılarınızın quup' da kolayca paylaşılmasına olanak sağlar.
Author: quup.com
Author URI: http://quup.com/
Version: 1.0
*/

$plugin = plugin_basename(__FILE__); 

function add_quup_button($content)
	{
	$quup_button_display = get_option("quup_button_display");
	$quup_button_layout = get_option("quup_button_layout");
	$quup_userName = get_option("quup_button_account");
    $quup_count = get_option("quup_button_count");
    $contentcode = "";

	if(!empty($quup_userName))
	{
	    $quup_userName = ' data-mention="'.$quup_userName.'"';

        if($quup_button_layout=="true")
	    {
	        $quup_button_layout = ' data-vertical="'.$quup_button_layout.'"';
	    }

        $contentcode = '<a href="http://quup.com/" class="quup-share-button" data-url="'.get_permalink().'" '.$quup_button_layout.' data-count="'.$quup_count.'" '.$quup_userName.'>quup</a><script>(function () {var doc = document;var tagName = "script";var id = "quup-widget";var j, js = doc.getElementsByTagName(tagName)[0];if (!doc.getElementById(id)) {j = doc.createElement(tagName);j.id = id;j.src = "http://widget.quup.com/js/linkShareWidget.js";js.parentNode.insertBefore(j, js);}})();</script>';
	}
    	
    $quup_button_align = get_option("quup_button_align");
	$quup_button_margin = get_option("quup_button_margin");
	$quup_margin_top = $quup_button_margin['top'];
	$quup_margin_bottom = $quup_button_margin['bottom'];
	$quup_margin_left = $quup_button_margin['left'];
	$quup_margin_right = $quup_button_margin['right'];
	$margin = $quup_margin_top.'px '.$quup_margin_right.'px '.$quup_margin_bottom.'px '.$quup_margin_left.'px';
	if ($quup_button_display == 'both')
		{
		if ((is_single()) OR (is_page()))
			{
			
			if ( strpos( $quup_button_align,"topleft" ) !== FALSE)
				{
				$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
				$buttoncode .= $contentcode;
				$buttoncode .= '</div>'."\n";
				$content = $buttoncode.$content;
				}
			if ( strpos( $quup_button_align,"topright" ) !== FALSE)
				{
				$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
				$buttoncode .= $contentcode;
				$buttoncode .= '</div>'."\n";
				$content = $buttoncode.$content;
				}
			if ( strpos( $quup_button_align,"bottomright" ) !== FALSE)
				{
				$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
				$content .= $contentcode;
				$content .= '</div>'."\n";				
				}
			if ( strpos( $quup_button_align,"bottomleft" ) !== FALSE)
				{
				$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
				$content .= $contentcode;
				$content .= '</div>'."\n";				
				}
			return $content;
			}
		else
			{
			return $content;
			}	
		}
	elseif ($quup_button_display == 'posts')
		{
		if (is_single())
			{
			if ( strpos( $quup_button_align,"topleft" ) !== FALSE)
				{
				$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
				$buttoncode .= $contentcode;
				$buttoncode .= '</div>'."\n";
				$content = $buttoncode.$content;
				}
			if ( strpos( $quup_button_align,"topright" ) !== FALSE)
				{
				$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
				$buttoncode .= $contentcode;
				$buttoncode .= '</div>'."\n";
				$content = $buttoncode.$content;
				}
			if ( strpos( $quup_button_align,"bottomright" ) !== FALSE)
				{
				$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
				$content .= $contentcode;
				$content .= '</div>'."\n";				
				}
			if ( strpos( $quup_button_align,"bottomleft" ) !== FALSE)
				{
				$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
				$content .= $contentcode;
				$content .= '</div>'."\n";				
				}
			return $content;
			}
		else
			{
			return $content;
			}	
		}
	elseif ($quup_button_display == 'pages')
		{
		if (is_page())
			{
			//set the twittername which will be referenced in each tweet
			if ( strpos( $quup_button_align,"topleft" ) !== FALSE)
				{
				$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
				$buttoncode .= $contentcode;
				$buttoncode .= '</div>'."\n";
				$content = $buttoncode.$content;
				}
			if ( strpos( $quup_button_align,"topright" ) !== FALSE)
				{
				$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
				$buttoncode .= $contentcode;
				$buttoncode .= '</div>'."\n";
				$content = $buttoncode.$content;
				}
			if ( strpos( $quup_button_align,"bottomright" ) !== FALSE)
				{
				$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
				$content .= $contentcode;
				$content .= '</div>'."\n";				
				}
			if ( strpos( $quup_button_align,"bottomleft" ) !== FALSE)
				{
				$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
				$content .= $contentcode;
				$content .= '</div>'."\n";				
				}
			return $content;
			}
		else
			{
			return $content;
			}	
		}
	else
		{
		if ( strpos( $quup_button_align,"topleft" ) !== FALSE)
			{
			$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
			$buttoncode .= $contentcode;
			$buttoncode .= '</div>'."\n";
			$content = $buttoncode.$content;
			}
		if ( strpos( $quup_button_align,"topright" ) !== FALSE)
			{
			$buttoncode .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
			$buttoncode .= $contentcode;
			$buttoncode .= '</div>'."\n";
			$content = $buttoncode.$content;
			}
		if ( strpos( $quup_button_align,"bottomright" ) !== FALSE)
			{
			$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: right">';
			$content .= $contentcode;
			$content .= '</div>'."\n";			
			}
		if ( strpos( $quup_button_align,"bottomleft" ) !== FALSE)
			{
			$content .= '<div id="wp_quup_button" style="margin: '.$margin.'; float: left">';
			$content .= $contentcode;
			$content .= '</div>'."\n";			
			}
		return $content;
		}
	}

function quup_button_adminpage()
	{
	if (!current_user_can('manage_options'))
		{
    	wp_die( __('You do not have sufficient permissions to access this page.') );
		}
	
	$quup_button_align = get_option("quup_button_align");
    if($quup_button_align == '') { $quup_button_align = 'bottomleft'; }
	
    $quup_button_layout = get_option("quup_button_layout");
    if($quup_button_layout == '') { $quup_button_layout = 'horizontal'; }

    $quup_button_count = get_option("quup_button_count");
    if($quup_button_count == '') { $quup_button_count = 'true'; }

	$quup_button_account = get_option("quup_button_account");
	$quup_button_margin = get_option("quup_button_margin");
	$quup_button_display = get_option("quup_button_display");
	$quup_margin_top = $quup_button_margin['top'];
	$quup_margin_bottom = $quup_button_margin['bottom'];
	$quup_margin_left = $quup_button_margin['left'];
	$quup_margin_right = $quup_button_margin['right'];
	print '<div class="wrap">';
	print '<h2>WP quup Button ayarları</h2>';
	print '<form name="quup_button_option_form" method="post">';
	print '<p>quup butonu nerede görünsün?<br />';
	print '<select name="quup_button_display" id="quup_button_display">';
	print '<option value="posts"'; if ($quup_button_display == "posts") { print ' selected'; } print '>Sadece Gönderilerde</option>';
	print '<option value="pages"'; if ($quup_button_display == "pages") { print ' selected'; } print '>Sadece Sayfalarda</option>';
	print '<option value="both"'; if ($quup_button_display == "both") { print ' selected'; } print '>Gönderiler ve Sayfalarda</option>';	
	print '<option value="everywhere"'; if ($quup_button_display == "everywhere") { print ' selected'; } print '>Her yerde</option>';	
	print '</select>';	    
	print '</p>';
	
    print '<p>Button layout:<br />';
	print '<select name="quup_button_layout" id="quup_button_layout">';
	print '<option value="true"'; if ($quup_button_layout == "true") { print ' selected'; } print '>Dikey Sayaç</option>';
	print '<option value="false"'; if ($quup_button_layout == "false") { print ' selected'; } print '>Yatay Sayaç</option>';
	print '</select>';	    

    
    print '<p>Button count:<br />';
	print '<select name="quup_button_count" id="quup_button_count">';
	print '<option value="true"'; if ($quup_button_count == "true") { print ' selected'; } print '>Sayacı Göster</option>';
	print '<option value="false"'; if ($quup_button_count == "false") { print ' selected'; } print '>Sayacı Gizle</option>';	
	print '</select>';

	print '</p>';
	print '<p>Button placement:<br />';
	print '<select name="quup_button_align" id="quup_button_align">';
	print '<option value="topleft"'; if ($quup_button_align == "topleft") { print ' selected'; } print '>Üst sol</option>';
	print '<option value="topright"'; if ($quup_button_align == "topright") { print ' selected'; } print '>Üst sağ</option>';
	print '<option value="bottomleft"'; if ($quup_button_align == "bottomleft") { print ' selected'; } print '>Alt sol</option>';				
	print '<option value="bottomright"'; if ($quup_button_align == "bottomright") { print ' selected'; } print '>Alt sağ</option>';
	//print '<option value="topleft-bottomleft"'; if ($quup_button_align == "topleft-bottomleft") { print ' selected'; } print '>Twice: Top left & bottom left</option>';
	//print '<option value="topleft-bottomright"'; if ($quup_button_align == "topleft-bottomright") { print ' selected'; } print '>Twice: Top left & bottom right</option>';
	//print '<option value="topright-bottomleft"'; if ($quup_button_align == "topright-bottomleft") { print ' selected'; } print '>Twice: Top right & bottom left</option>';
	//print '<option value="topright-bottomright"'; if ($quup_button_align == "topright-bottomright") { print ' selected'; } print '>Twice: Top right & bottom right</option>';
	print '</select>';	    
	print '</p>';
	print '<p>Margins:<br/>';
	print '<table>';
	print '<tr><td>Üst:</td><td><input type="text" size="4" name="quup_margin_top" id="quup_margin_top" value="'.$quup_margin_top.'"></td><td>px</td></tr>';
	print '<tr><td>Alt:</td><td><input type="text" size="4" name="quup_margin_bottom" id="quup_margin_bottom" value="'.$quup_margin_bottom.'"></td><td>px</td></tr>';
	print '<tr><td>Sol:</td><td><input type="text" size="4" name="quup_margin_left" id="quup_margin_left" value="'.$quup_margin_left.'"></td><td>px</td></tr>';
	print '<tr><td>Sağ:</td><td><input type="text" size="4" name="quup_margin_right" id="quup_margin_right" value="'.$quup_margin_right.'"></td><td>px</td></tr>';
	print '</table>';
	print '</p>';
	print '<p>quup kullanıcı adınız:<br/>';
    print '<input type="text" name="quup_button_account" id="quup_button_account" value="'.$quup_button_account.'"></p>';
	print '<p><input type="submit" class="button button-primary" value="Kaydet"></p>';
    print '<input type="hidden" name="quup_button_submit" value="true" />';
	print '</form>';
	if (!empty($_POST['quup_button_align']))
		{
		print '<p>Ayarlar kaydedildi!</p>';
		}
	print '</div>';
	}

function quup_button_handler()
	{
   	if(isset($_POST['quup_button_submit'])) 
		{
		$new_margins = array('top' => $_POST['quup_margin_top'], 'right' => $_POST['quup_margin_right'], 'bottom' => $_POST['quup_margin_bottom'], 'left' => $_POST['quup_margin_left']);
		update_option("quup_button_margin", $new_margins);
		update_option("quup_button_display", $_POST['quup_button_display']);
        update_option("quup_button_align", $_POST['quup_button_align']);
		update_option("quup_button_layout", $_POST['quup_button_layout']);
        update_option("quup_button_count", $_POST['quup_button_count']);
		$twitteraccount = ltrim($_POST['quup_button_account'],'@');
		update_option("quup_button_account", $twitteraccount);
		}
	$quup_button_version = get_option("quup_button_version");
	if (empty($quup_button_version))
		{
		add_option('quup_button_version', '1.4', '', 'yes'); // 'no' = not autoload
		}
	else
		{
		update_option('quup_button_version', '1.4');
		}
	$quup_button_margin = get_option("quup_button_margin");
	if (empty($quup_button_margin))
		{
		$default_margins = array('top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0');
		add_option('quup_button_margin', $default_margins, '', 'yes');
		add_option('quup_button_display', 'both', '', 'yes');
		}
	}

function enable_quup_adminpage() 
	{
	add_options_page('WP quup Button settings', 'WP quup Button', 'manage_options', basename(__FILE__), 'quup_button_adminpage');
	}

// Add settings link on plugin page
function quup_button_settings_link($links) 
	{ 
	$settings_link = '<a href="options-general.php?page=quup-button.php.php">'.__('Settings').'</a>';
	array_unshift($links, $settings_link); 
	return $links; 
	}
	
function set_quup_button_options() 
	{
	$default_margins = array('top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0');
	add_option('quup_button_align', 'bottomleft', '', 'yes'); // 'no' = not autoload
	add_option('quup_button_layout', 'horizontal', '', 'yes'); // 'no' = not autoload
    add_option('quup_button_count', 'true', '', 'yes'); // 'no' = not autoload
	add_option('quup_button_account', '', '', 'yes'); // 'no' = not autoload
	add_option('quup_button_version', '1.4', '', 'yes'); // 'no' = not autoload
	add_option('quup_button_margin', $default_margins, '', 'yes');
	add_option('quup_button_display', 'both', '', 'yes');
	}
		
function remove_quup_button_options() 
	{
	delete_option('quup_button_align');
	delete_option('quup_button_layout');
    delete_option('quup_button_count');
	delete_option('quup_button_account');
	delete_option('quup_button_version');
	delete_option('quup_button_margin');
	delete_option('quup_button_display');
	}

register_activation_hook(__FILE__,'set_quup_button_options');
register_deactivation_hook(__FILE__,'remove_quup_button_options');
add_action('init', 'quup_button_handler');
add_action('admin_menu', 'enable_quup_adminpage');
add_filter('the_content','add_quup_button');
add_filter("plugin_action_links_$plugin", 'quup_button_settings_link' );
?>