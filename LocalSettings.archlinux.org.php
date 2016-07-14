<?php
# This file was automatically generated by the MediaWiki 1.19.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

##
## General settings
##

$wgSitename      = "ArchWiki";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "https://wiki.archlinux.org";

$wgLocaltimezone = 'UTC';

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath	    = "";
# $wgArticlePath      = "$wgScript/$1";
$wgUsePathInfo = true;
$wgScriptExtension  = ".php";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/archlinux/archlogo.png";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "http://www.gnu.org/copyleft/fdl.html";
$wgRightsText = "GNU Free Documentation License 1.3 or later";
$wgRightsIcon = "{$wgStylePath}/common/images/gnu-fdl.png";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
# TODO: -1 is the default
$wgResourceLoaderMaxQueryLength = -1;

$wgGitRepositoryViewers['.+projects\.archlinux\.org/vhosts/wiki\.archlinux\.org\.git(.*)'] = 'https://projects.archlinux.org/vhosts/wiki.archlinux.org.git/commit/?id=%H';

$wgJobRunRate = 0;


##
## Database settings
##

$wgDBtype           = "mysql";
$wgDBserver         = "localhost";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;


##
## Email settings
##

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "webmaster@archlinux.org";
$wgPasswordSender   = "webmaster@archlinux.org";

$wgEnotifUserTalk      = true; # UPO
$wgEnotifWatchlist     = true; # UPO
$wgEmailAuthentication = true;

# avoid bouncing of user-to-user emails (FS#26737)
$wgUserEmailUseReplyTo = true;


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

## Shared memory settings
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "$IP/../cache/data";
$wgShowIPinHeader = false;
$wgDisableCounters = true;
$wgEnableSidebarCache = true;
$wgUseFileCache = true;
$wgFileCacheDirectory = "$IP/../cache/html";
$wgUseGzip = true;
$wgUseETag = true;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
//require_once "$IP/skins/ArchLinux/ArchLinux.php";
wfLoadSkin( 'ArchLinux' );
$wgDefaultSkin = 'archlinux';
$wgDefaultUserOptions['skin'] = 'archlinux';
$wgArchHome = 'https://www.archlinux.org/';
$wgArchNavBar = array(
			'Home' => 'https://www.archlinux.org/',
			'Packages' => 'https://www.archlinux.org/packages/',
			'Forums' => 'https://bbs.archlinux.org/',
			'Wiki' => 'https://wiki.archlinux.org/',
			'Bugs' => 'https://bugs.archlinux.org/',
			'AUR' => 'https://aur.archlinux.org/',
			'Download' => 'https://www.archlinux.org/download/'
		);
$wgArchNavBarSelectedDefault = 'Wiki';
$wgFooterIcons = array();

# The following permissions were set based on your choice in the installer
$wgEmailConfirmToEdit = true;
$wgAllowUserCssPrefs = false;
$wgDisableAnonTalk = true;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['sysop']['deleterevision']  = true;
$wgGroupPermissions['user']['upload']          = false;
$wgGroupPermissions['user']['reupload']        = false;
$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['autoconfirmed']['upload'] = false;
$wgGroupPermissions['maintainer']['autopatrol'] = true;
$wgGroupPermissions['maintainer']['patrol'] = true;
$wgGroupPermissions['maintainer']['noratelimit'] = true;
$wgGroupPermissions['maintainer']['suppressredirect'] = true;
$wgGroupPermissions['maintainer']['rollback'] = true;
$wgGroupPermissions['maintainer']['browsearchive'] = true;
$wgGroupPermissions['maintainer']['apihighlimits'] = true;
$wgGroupPermissions['maintainer']['unwatchedpages'] = true;
$wgGroupPermissions['maintainer']['deletedhistory'] = true;
$wgGroupPermissions['maintainer']['deletedtext'] = true;

# disable user account creation via API
$wgAPIModules['createaccount'] = 'ApiDisabled';
# remove 'writeapi' right from users
$wgGroupPermissions['*']['writeapi'] = false;
$wgGroupPermissions['user']['writeapi'] = false;
# add 'writeapi' to autoconfirmed users, maintainers and admins
$wgGroupPermissions['autoconfirmed']['writeapi'] = true;
$wgGroupPermissions['maintainer']['writeapi'] = true;
$wgGroupPermissions['sysop']['writeapi'] = true;
# stricter conditions for 'autoconfirmed' promotion
$wgAutoConfirmAge = 86400*3; // three days
# require at least 20 normal edits before granting the 'writeapi' right
$wgAutoConfirmCount = 20;

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:

# $wgShowSQLErrors = true;
# $wgReadOnly = 'Database migration in progress. We`ll be back in a few minutes.';

require_once( "$IP/extensions/Nuke/Nuke.php" );

wfLoadExtension( 'CheckUser' );
require_once "$IP/extensions/AbuseFilter/AbuseFilter.php";

# AbuseFilter extension
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

# CheckUser extension
$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['sysop']['checkuser-log'] = true;


# temporary disable registration; reverted 2016-6-26 bluewind
#$wgGroupPermissions['*']['createaccount'] = false;
