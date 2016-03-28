<?php
/**
*
* @package phpBB Extension - Smartfeed
* @copyright (c) 2016 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SMARTFEED_ADDITIONAL_CRITERIA'						=> 'Additional criteria',
	'SMARTFEED_ALL_FORUMS'								=> 'All',
	'SMARTFEED_APACHE_AUTHENTICATION_WARNING_ADMIN'		=> 'Smartfeed cannot be used with Apache authentication until the administrator tailors the forum&apos;s .htaccess file. The administrator should adjust the .htaccess file and change the Smartfeed settings in the Administration Control Panel.',
	'SMARTFEED_APACHE_AUTHENTICATION_WARNING_REG'		=> 'Smartfeed cannot be used on this board. Contact the Forum Administrator for more information.',
	'SMARTFEED_ATOM_10'									=> 'Atom 1.0',
	'SMARTFEED_BAD_BOOKMARKS_VALUE'						=> 'The bookmarks (b) parameter, if used, may only have a value of 1. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_BAD_MARK_PRIVATE_MESSAGES_READ_ERROR'	=> 'If present, the mark private messages read (k) parameter must have a value of 1. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_BAD_PASSWORD_ERROR'						=> 'Authentication failure. &quot;e&quot; parameter &quot;%s&quot; is invalid with &quot;u&quot; parameter of &quot;%s&quot;. This error may be caused by changing your phpBB password, or due to an upgrade in this Smartfeed software. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_BAD_PMS_VALUE'							=> 'If present, the show private messages (m) parameter must have a value of 1. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_BOARD_DISABLED'							=> 'This board is currently offline. Consequently, the newsfeed functionality has been disabled. When the board goes back online, you will be able to retrieve newsfeeds again.',
	'SMARTFEED_DELIMITER'								=> ' :: ', // Used to break up forum names, topic name and post subjects that all appear together in the feed, such as in the item title
	'SMARTFEED_ERROR'									=> 'Smartfeed error',
	'SMARTFEED_EXPLANATION'								=> 'With Smartfeed you can create your own personalized newsfeed from posts on this board and read them with the newsreader of your choice. Smartfeed can support authentication for registered members, allowing them to view posts in forums that others may not be able to read.',
	'SMARTFEED_F_READ_ERROR'							=> 'Forum read privilege (f_read) not declared in the acl_options table. This table is likely inconsistent or corrupted.',
	'SMARTFEED_FEED'									=> 'Smartfeed newsfeed',
	'SMARTFEED_FEED_STYLING'							=> 'Newsfeed styling',
	'SMARTFEED_FEED_STYLING_EXPLAIN'					=> 'Please note that the amount of feed styling actually applied depends on the capabilities of your news reader. Most news readers will not apply all HTML styles. Place your cursor over the style text to learn more.',
	'SMARTFEED_FEED_TYPE_ERROR'							=> 'Smartfeed does not accept the feed type parameter value of y=%s. Acceptable values are 0 (Atom), 1 (RSS 1.0) and 2 (RSS 2.0).',
	'SMARTFEED_FILTER_CRITERIA'							=> 'Post filters',
	'SMARTFEED_FILTER_FOES'								=> 'Remove posts from my foes',
	'SMARTFEED_FILTER_FOES_ERROR'						=> 'The filter foes (ff) parameter value is invalid. If present it should only have a value of 1. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_FIRST_POST_ONLY'							=> 'Types of posts in feed',
	'SMARTFEED_FIRST_POST_ONLY_ERROR'					=> 'The first post only (fp) parameter value is invalid. If present it should only have a value of 0 or 1. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_FEED_TYPE'								=> 'Newsfeed format',
	'SMARTFEED_FORMAT_AND_ACCESS'						=> 'Format &amp; access control',
	'SMARTFEED_FORUM_SELECTION'							=> 'Forum selection',
	'SMARTFEED_GENERATE_BUTTON'							=> 'Generate the URL',
	'SMARTFEED_GENERATE_BUTTON_EXPLAIN'					=> 'To copy it, click on the URL. All text will be automatically selected. Then copy and paste it in your news reader.',
	'SMARTFEED_GENERATE_URL_TEXT'						=> 'Generate',
	'SMARTFEED_GLOBAL_ANNOUNCEMENT'						=> 'GLOBAL ANNOUNCEMENT',
	'SMARTFEED_IP_AUTH'									=> 'IP Authentication',
	'SMARTFEED_IP_AUTH_ERROR'							=> 'The Internet Protocol (IP) address of the client making the Smartfeed request is not authorized to access the feed because it did not pass the proper credential. Please rerun Smartfeed on the forum to generate a correct feed URL.', 
	'SMARTFEED_IP_AUTHENTICATION'						=> 'IP Authentication',
	'SMARTFEED_IP_AUTHENTICATION_EXPLAIN'				=> 'Your current Internet Protocol (IP) address is %s. If you select yes, the URL generated will make the feed work only for this IP range.',
	'SMARTFEED_IP_RANGE_ERROR'							=> 'Your IP of %s is invalid.',
	'SMARTFEED_IP_RANGE_SET'							=> 'Set IP authentication for this range',
	'SMARTFEED_LAST_1_HOURS'							=> 'In Last Hour',
	'SMARTFEED_LAST_12_HOURS'							=> 'In Last 12 Hours',
	'SMARTFEED_LAST_15_MINUTES'							=> 'In Last 15 Minutes',
	'SMARTFEED_LAST_3_HOURS'							=> 'In Last 3 Hours',
	'SMARTFEED_LAST_30_MINUTES'							=> 'In Last 30 Minutes',
	'SMARTFEED_LAST_6_HOURS'							=> 'In Last 6 Hours',
	'SMARTFEED_LAST_DAY'								=> 'In Last 24 Hours',
	'SMARTFEED_LAST_MONTH'								=> 'In Last 30 Days',
	'SMARTFEED_LAST_QUARTER'							=> 'In Last 90 Days',
	'SMARTFEED_LAST_TWO_WEEKS'							=> 'In Last 14 Days',
	'SMARTFEED_LAST_WEEK'								=> 'In Last 7 Days',
	'SMARTFEED_LASTVISIT_ERROR'							=> 'The last visit (l) parameter value specified is invalid. If present it must have a value of 1 only. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_LASTVISIT_RESET'							=> 'Reset my last visit date on news feed access',
	'SMARTFEED_LIMIT'									=> 'Time limit',
	'SMARTFEED_LIMIT_EXPLAIN'							=> 'Include posts over this time range up to the present in the newsfeed.',
	'SMARTFEED_LIMIT_FORMAT_ERROR'						=> 'The time limit (t) parameter is not an allowed value. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_LIMIT_SET_EXPLAIN'						=> 'Irrespective of the time periods shown, this board has a set limit of %d days beyond which no posts can be retrieved. This is necessary to ensure that fetching feeds does not slow down overall access to this forum.',
	'SMARTFEED_MARK_READ'								=> 'Mark private messages as read when they appear in the feed',
	'SMARTFEED_MAX_ITEMS'								=> 'Maximum number of posts in the feed',
	'SMARTFEED_MAX_ITEMS_ERROR'							=> 'If specified, the maximum items (x) parameter value must be a whole number greater than 0. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_MAX_ITEMS_EXPLAIN'						=> 'The maximum number of posts in a feed allowed by the board&apos;s administrator is %d. You may set this value to any number less than or equal to the board limit, but greater than or equal to %d.',
	'SMARTFEED_MAX_ITEMS_EXPLAIN_BLANK'					=> 'If zero, any number of items can be in the feed.',
	'SMARTFEED_MAX_WORD_SIZE'							=> 'Maximum words to display in a post or private message',
	'SMARTFEED_MAX_WORD_SIZE_ERROR'						=> 'The maximum words in a post (w) parameter value is invalid. If used it must be a whole number. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_MAX_WORD_SIZE_EXPLAIN'					=> 'If zero, a post or private message can be of any size in the feed up to the board limit, if any. Notice: if not zero, then to ensure consistent rendering, if a post or private message must be truncated, the HTML will be removed. A maximum number of %d wordsis allowed.',
	'SMARTFEED_MAX_WORD_SIZE_EXPLAIN_BLANK'				=> 'If zero, a post or private message can be of any size in the feed up to the board limit, if any. Notice: if not zero, then to ensure consistent rendering, if a post or private message must be truncated, the HTML will be removed.',
	'SMARTFEED_MAX_WORDS_NOTIFIER'						=> ' ...',
	'SMARTFEED_MIN_WORD_SIZE_ERROR'						=> 'The minimum word size (i) parameter value is invalid. It should must be a whole number. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_MIN_WORDS'								=> 'Minimum words required in post for the post to appear in feed',
	'SMARTFEED_MIN_WORDS_EXPLAIN'						=> 'If zero, there are no minimum number of words required.',
	'SMARTFEED_NEW_PMS_NOTIFICATIONS_ONLY'				=> 'You have new private messages on the forum. Please log in to the forum to read them.',
	'SMARTFEED_NEW_PMS_NOTIFICATIONS_SHORT'				=> 'You have new private messages',
	'SMARTFEED_NEW_POST_NOTIFICATIONS_ONLY'				=> 'There are new posts in this topic. Please login to the forum to read them.',
	'SMARTFEED_NO_ACCESSIBLE_FORUMS'					=> 'You have no permission to access any forums on this site. If you are registered on this site, you may need the administrator to give you privileges to read forums or reinstate you as an active member.',
	'SMARTFEED_NO_BOOKMARKS'							=> 'You have no bookmarked topics but you requested to show bookmarked topics only. Consequently, there are no posts in the feed. If you wish to use bookmarks with Smartfeed, please visit the forum and bookmark one or more topics.',
	'SMARTFEED_NO_FORUMS_ACCESSIBLE' 					=> 'Sorry, due to Smartfeed forum exclusions and your forum access privileges, you cannot access any forums',
	'SMARTFEED_NO_MCRYPT_MODULE'						=> 'Smartfeed cannot support user authentication because the forum does not support the PHP mcrypt module. Please rerun Smartfeed on the forum while logged out to acquire a valid URI for Smartfeed.',
	'SMARTFEED_NO_E_ARGUMENT'							=> 'To authenticate a member, the &quot;e&quot; parameter must be used with the &quot;u&quot; parameter. The &quot;u&quot; parameter is present but the &quot;e&quot; parameter is not. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_NO_ERRORS' 								=> 'No errors.',
	'SMARTFEED_NO_FORUMS_AVAILABLE' 					=> 'Sorry, due to your user status you cannot access any forums',
	'SMARTFEED_NO_FORUMS_SELECTED'						=> 'You have not selected any forums, so no URL can be generated. Please select at least one forum.',
	'SMARTFEED_NO_LIMIT'								=> 'None',
	'SMARTFEED_NO_MCRYPT_SUPPORT'						=> '<strong>Note: this site can provide feeds for public forums only</strong>',
	'SMARTFEED_NO_U_ARGUMENT'							=> 'To authenticate a member, the &quot;u&quot; parameter must be used with the &quot;e&quot; parameter. The &quot;e&quot; parameter is present but the &quot;u&quot; parameter is not. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_NOT_LOGGED_IN'							=> '<strong>Because you are not logged in or your member status does not allow it, you can only subscribe to the list of public forums shown below. Please <a href="./../../ucp.%s?mode=login" class="postlink">log in</a> or <a href="./../../ucp.%s?mode=register" class="postlink">register</a> if you want to also subscribe to nonpublic forums or to access features for registered members only.</strong>',
	'SMARTFEED_PAGE'									=> 'Smartfeed',
	'SMARTFEED_POST_IMAGE_TEXT'							=> '<br />(Click on the image to see it full size.)',
	'SMARTFEED_POST_SIGNATURE_DELIMITER'				=> '<br />____________________<br />', // Place here whatever code (make sure it is valid HTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'SMARTFEED_POSTS_TYPE_ANY'							=> 'All posts',
	'SMARTFEED_POSTS_TYPE_FIRST'						=> 'First posts of topics only',
	'SMARTFEED_POWERED_BY'								=> 'phpbbservices.com',
	'SMARTFEED_PRIVATE_MESSAGES_IN_FEED'				=> 'Add my unread private messages',
	'SMARTFEED_REMOVE_MINE_ERROR'						=> 'The remove my posts (r) parameter value is invalid. If present it should only have a value of 1. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_REMOVE_YOURS'							=> 'Remove my posts',
	'SMARTFEED_REPLY'									=> 'Reply',
	'SMARTFEED_REPLY_BY'								=> 'Reply by',
	'SMARTFEED_RSS_10'									=> 'RSS 1.0 (RDF)',
	'SMARTFEED_RSS_20'									=> 'RSS 2.0',
	'SMARTFEED_SELECT_FORUMS'							=> 'Include posts for these forums',
	'SMARTFEED_SELECT_FORUMS_EXPLAIN'					=> 'Bolded forum names, if any, are forums that the administrator requires to be shown in any newsfeed. You cannot unselect these forums. Forum names that have strikethrough text are not allowed in a newsfeed and cannot be selected. If looged in then all forum selection is disabled when you select bookmarked topics only.',
	'SMARTFEED_SINCE_LAST_VISIT_TEXT'					=> 'Since My Last Visit',
	'SMARTFEED_SIZE_ERROR'								=> 'You must enter a whole number, less than or equal to %d and greater than or equal to %d',
	'SMARTFEED_SIZE_ERROR_MIN'							=> 'You must enter a whole number, zero or greater in this field.',
	'SMARTFEED_SORT_BY'									=> 'Post sort order',
	'SMARTFEED_SORT_BY_ERROR'							=> 'Smartfeed cannot accept the sort by (s) parameter value. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_SORT_BY_EXPLAIN'							=> 'Default order is the order used by phpBB if you don&apos;t change it in the User Control Panel. By default, posts in the feed are shown in category order (ascending), then forum order (ascending) within categories, then last topic post time (descending) within a forum and then post time (ascending) within a topic.',
	'SMARTFEED_SORT_FORUM_TOPIC'						=> 'Default order',
	'SMARTFEED_SORT_FORUM_TOPIC_DESC'					=> 'Default order, with latest posts first',
	'SMARTFEED_SORT_POST_DATE'							=> 'From oldest to newest',
	'SMARTFEED_SORT_POST_DATE_DESC'						=> 'From newest to oldest',
	'SMARTFEED_SORT_USER_ORDER'							=> 'Use my board display preferences',
	'SMARTFEED_STAR_MESSAGE'							=> ' or *.',
	'SMARTFEED_STYLE_BASIC'								=> 'Basic',
	'SMARTFEED_STYLE_BASIC_EXPLAIN'						=> 'Basic will remove formatting and BBCode but will apply signatures if allowed.',
	'SMARTFEED_STYLE_COMPACT'							=> 'Compact',
	'SMARTFEED_STYLE_COMPACT_EXPLAIN'					=> 'Compact will remove formatting, BBCode, signatures and collapse paragraphs.',
	'SMARTFEED_STYLE_ERROR'								=> 'The style parameter is not one of the allowed values, or is absent. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_STYLE_HTML'								=> 'HTML',
	'SMARTFEED_STYLE_HTML_EXPLAIN'						=> 'HTML will provide formatting, BBCode and signatures (if allowed). Posts will look similar to how they appear in the forum. HTML feeds may not validate.',
	'SMARTFEED_STYLE_HTML_SAFE'							=> '<a href="http://validator.w3.org/feed/docs/warning/SecurityRiskAttr.html" class="postlink" onclick="window.open(this.href);return false;">Safe HTML</a>',
	'SMARTFEED_STYLE_HTML_SAFE_EXPLAIN'					=> 'Safe HTML will strip tags considered unsafe for newsreaders, according to the W3C.',
	'SMARTFEED_TEST'									=> 'Test',
	'SMARTFEED_TEST_BUTTON'								=> 'Test the feed',
	'SMARTFEED_TEST_BUTTON_EXPLAIN'						=> 'Run the URL in a new page of your browser. The newsfeed may look better in a newsreader.',
	'SMARTFEED_TITLE'									=> 'Smartfeed',
	'SMARTFEED_URL'										=> 'Generate &amp; test',
	'SMARTFEED_USE_BOOKMARKS'							=> 'Bookmarked topics only',
	'SMARTFEED_USER_ID_DOES_NOT_EXIST'					=> 'User ID identified by the &quot;u&quot; parameter does not exist or is not allowed to access a feed. Please rerun Smartfeed on the forum to generate a correct feed URL.',
	'SMARTFEED_VALID_ATOM_1'							=> 'Smartfeed generates validated ATOM 1.0 feeds, as tested by the W3C Feed Validation Service.',
	'SMARTFEED_VALID_RSS_1'								=> 'Smartfeed generates validated RSS 1.0 feeds, as tested by the W3C Feed Validation Service.',
	'SMARTFEED_VALID_RSS_2'								=> 'Smartfeed generates validated RSS 2.0 feeds, as tested by the W3C Feed Validation Service.',
));
