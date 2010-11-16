<?php

// Do not edit this file.  Edit FarmSettings.php instead.

$wgShowIPinHeader = false;
$wgGroupPermissions['*']['createaccount'] = false;

$wgVerifyMimeType = false;
$wgEnableUploads = true;
$wgUseTeX = file_exists ("/usr/bin/texvc");

$wgFileExtensions = array_merge ($wgFileExtensions, array('tar', 'gz', 'png', 'gif', 'jpg', 'jpeg', 'ogg', 'zip', 'ai', 'xls', 'doc', 'docx', 'py', 'pl', 'sh', 'tiff', 'bmp', 'txt', 'csv', 'pdf', 'ppt', 'key', 'mov', 'mpg', 'mpeg', 'avi', 'wmv', 'xvid', 'svg', 'svgz', 'json', 'ma', 'mb', 'xml', 'm'));
$wgVerifyMimeType = false;
$wgFileBlacklist = preg_grep ('^(php|php3|php4|php5|phps|phtml|shtml|jhtml|pl|py|cgi)$', $wgFileBlacklist, PREG_GREP_INVERT);

require_once( "/etc/mediawiki-extensions/extensions.php" );

$wgDisableCounters = true;
$wgMiserMode = true;
$wgCompressRevisions = true;
$wgRevisionCacheExpiry = 3*86400;
$wgParserCacheExpireTime = 14*86400;
