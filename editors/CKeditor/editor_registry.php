<?php
/**
 * CKeditor 	adapter for ICMS
 *
 * @copyright	The ImpressCMS Project http://www.impresscms.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package		core
 * @since		2.0 alpha 5
 * @version		SVN 4709 2008-09-06 21:07:58Z skenow
 */
global $icmsConfig;

$current_path = __FILE__;
if (DIRECTORY_SEPARATOR != "/") $current_path = str_replace(strpos($current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$root_path = dirname($current_path);

$icmsConfig['language'] = preg_replace("/[^a-z0-9_\-]/i", "", $icmsConfig['language']);
if (!@include_once $root_path . "/language/" . $icmsConfig['language'] . ".php") {
	include_once $root_path . "/language/english.php";
}

return $config = array(
		"name"	=>	"CKeditor",
		"class"	=>	"icmsFormCKEditor",
		"file"	=>	$root_path . "/formCkeditor.php",
		"title"	=>	_ICMS_EDITOR_CKEDITOR,
		"order"	=>	3
	);
