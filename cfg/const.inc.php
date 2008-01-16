<?php
/**
 * TestLink Open Source Project - http://testlink.sourceforge.net/ 
 * This script is distributed under the GNU General Public License 2 or later. 
 *
 * Filename $RCSfile: const.inc.php,v $
 *
 * @version $Revision: 1.59 $
 * @modified $Date: 2008/01/16 22:46:29 $ by $Author: havlat $
 * @author Martin Havlát
 *
 * SCOPE:
 * Global Constants used throughout TestLink 
 * Script is included via config.inc.php
 * There should be changed for your environment
 * 
 *-------------------------------------------------------------------
 * Revisions: 
 *           20071014 - franciscom -  $g_company_name,$g_company_logo,
 *                                    $g_copyright,$g_confidential
 *
 *           20070905 - franciscom - version updated
 *           20070902 - franciscom - localisation jp_JP
 *                                   $g_reports_cfg
 *
 *           20070822 - franciscom - localisation ru_RU
 *           20070818 - franciscom - $g_default_roleid
 *           20070705 - franciscom - config of $g_req_status.
 *           20070624 - franciscom - $g_title_sep*
 *           20070607 - franciscom 
 *           to solve BUGID: 887
 *           GET_ACTIVE_BUILD, GET_INACTIVE_BUILD
 *           GET_OPEN_BUILD,GET_CLOSED_BUILD
 *
 *           20070523 - franciscom
 *           MENU_ITEM_OPEN, MENU_ITEM_CLOSE
 *
 *           20070519 - franciscom
 *           $g_locales_html_select_date_field_order
 *
 *-------------------------------------------------------------------
**/

// ----------------------------------------------------------------------------
/** [GLOBAL] */

// ----------------------------------------------------------------------------
/** [GUI] */

/* Release MUST BE changed at the release day */
define('TL_VERSION', '1.8.0 DEVELOPMENT'); 
define('TL_BACKGROUND_DEFAULT', "#9BD"); // default color

// planAddTC_m1-tpl
define('TL_STYLE_FOR_ADDED_TC', "background-color:yellow;");


define('TL_COOKIE_KEEPTIME', (time()+60*60*24*30)); // 30 days

// Configurable templates this can help if you want to use a non standard template.
// i.e. you want to develop a new one without loosing the original template.
// 
$g_tpl = array(
	'tcView' 		=> "tcView.tpl",
	'tcSearchView' 	=> "tcSearchView.tpl",
	'tcEdit' 		=> "tcEdit.tpl",
	'tcNew' 		=> "tcNew.tpl",
	'execSetResults' => "execSetResults.tpl",
	'tcView' 		=> "tcView.tpl",
	'tcSearchView' 	=> "tcView.tpl",
	'usersview' 	=> "usersView.tpl"
);



// -------------------------------------------------------------------
/** [LDAP authentication errors */
// 
// Based on mantis issue tracking system code
// ERROR_LDAP_*
define( 'ERROR_LDAP_AUTH_FAILED',				1400 );
define( 'ERROR_LDAP_SERVER_CONNECT_FAILED',		1401 );
define( 'ERROR_LDAP_UPDATE_FAILED',				1402 );
define( 'ERROR_LDAP_USER_NOT_FOUND',			1403 );
define( 'ERROR_LDAP_BIND_FAILED',				1404 );



// Leave them empty if you would not to use.
$g_company_name = 'Testlink Development Team [configure using $g_company_name]';
$g_company_logo = '<img alt="TestLink logo" title="configure using $g_company_logo" ' .
                  'src="%BASE_HREF%' . 'gui/themes/theme_m1/images/company_logo.png" />';

$g_copyright='copyright - Testlink Development Team [configure using $g_copyright]';
$g_confidential='this document is not confidential [configure using $g_confidential]';



// ----------------------------------------------------------------------------
/** [LOCALIZATION] */

// String that will used as prefix, to generate an string when a label to be localized
// is passed to lang_get() to be translated, by the label is not present in the strings
// file.
// The resulting string will be:  TL_LOCALIZE_TAG . label
// Example:
//         want to translate "Hello" -> LOCALIZE: Hello
//
define('TL_LOCALIZE_TAG',"LOCALIZE: ");

// These are the supported locales.
// This array will be used to create combo box at user interface.
// Please mantain the alphabetical order when adding new locales.
// Attention:
//           The locale selected by default in the combo box when
//           creating a new user WILL BE fixed by the value of the default locale,
//           NOT by the order of the elements in this array.
//
$g_locales = array(	
	'zh_CN' => 'Chinese Simplified',
	'en_GB' => 'English (UK)',
	'en_US' => 'English (US)',
	'fr_FR' => 'Fran&ccedil;ais',
	'de_DE' => 'German',
	'it_IT' => 'Italian',
	'pl_PL' => 'Polski',
	'pt_BR' => 'Portuguese (Brazil)',
	'es_AR' => 'Spanish (Argentine)',
	'es_ES' => 'Spanish',
	'ru_RU' => 'Russian',
	'jp_JP' => 'Japanese'
);

// see strftime() in PHP manual
// Very IMPORTANT: 
// setting according local is done in testlinkInitPage() using set_dt_formats()
// Default values
$g_date_format ="%d/%m/%Y";
$g_timestamp_format = "%d/%m/%Y %H:%M:%S";

$g_locales_date_format = array(
	'en_GB' => "%d/%m/%Y",
	'en_US' => "%m/%d/%Y",
	'it_IT' => "%d/%m/%Y",
	'es_AR' => "%d/%m/%Y",
	'es_ES' => "%d/%m/%Y",
	'de_DE' => "%d.%m.%Y",
	'pl_PL' => "%d.%m.%Y",
	'fr_FR' => "%d/%m/%Y",
	'pt_BR' => "%d/%m/%Y",
	'ru_RU' => "%d/%m/%Y",
	'zh_CN' => "%Y��%m��%d��",
	'jp_JP' => "%Y/%m/%d"
); 

$g_locales_timestamp_format = array(
	'en_GB' => "%d/%m/%Y %H:%M:%S",
	'en_US' => "%m/%d/%Y %H:%M:%S",
	'it_IT' => "%d/%m/%Y %H:%M:%S",
	'es_AR' => "%d/%m/%Y %H:%M:%S",
	'es_ES' => "%d/%m/%Y %H:%M:%S",
	'de_DE' => "%d.%m.%Y %H:%M:%S",
	'pl_PL' => "%d.%m.%Y %H:%M:%S",
	'fr_FR' => "%d/%m/%Y %H:%M:%S",
	'pt_BR' => "%d/%m/%Y %H:%M:%S",
	'ru_RU' => "%d/%m/%Y %H:%M:%S",
	'zh_CN' => "%Y��%m��%d�� %Hʱ%M��%S��",
	'jp_JP' => "%Y/%m/%d %H:%M:%S"
); 

// for smarty html_select_date custom function
$g_locales_html_select_date_field_order = array(
	'en_GB' => "dmY",
	'en_US' => "mdY",
	'it_IT' => "dmY",
	'es_AR' => "dmY",
	'es_ES' => "dmY",
	'de_DE' => "dmY",
	'pl_PL' => "dmY",
	'fr_FR' => "dmY",
	'pt_BR' => "dmY",
	'ru_RU' => "dmY",
	'zh_CN' => "Ymd",
	'jp_JP' => "Ymd"
); 



// -------------------------------------------------------------------
/** ATTACHMENTS */

/* some attachment related defines, no need to modify them */
define("TL_REPOSITORY_TYPE_DB",1);
define("TL_REPOSITORY_TYPE_FS",2);

define("TL_REPOSITORY_COMPRESSIONTYPE_NONE",1);
define("TL_REPOSITORY_COMPRESSIONTYPE_GZIP",2);


// Two models to manage attachment interface in the execution screen
// $att_model_m1 ->  shows upload button and title 
//
$att_model_m1->show_upload_btn = true;
$att_model_m1->show_title = true;
$att_model_m1->num_cols = 4;
$att_model_m1->show_upload_column = false;

// $att_model_m2 ->  hides upload button and title
// 
$att_model_m2->show_upload_btn = false;
$att_model_m2->show_title = false;
$att_model_m2->num_cols = 5;
$att_model_m2->show_upload_column = true;


// -------------------------------------------------------------------
/** [MISC] */

/** [Test Case Status] */

// $g_tc_status
// $g_tc_status_css
// $g_tc_status_verbose_labels
// $g_tc_status_for_ui
//
//
// These are the possible Test Case statuses.
//
// Localisation Note:
// IMPORTANT:
//           Do not do localisation here, i.e do not change "passed"
//           with the corresponding word in you national language.
//           These strings ARE NOT USED at User interface level.
//
//           Labels showed to users will be created using lang_get()
//           function, getting key from:
//                                      $g_tc_status_verbose_labels
//           example:
//                   lang_get($g_tc_status_verbose_labels["passed"]);
//
//           If you add new statuses, please use custom_strings.txt to add your
//           localized strings
//
$g_tc_status = array (
	"failed"        => 'f',
	"blocked"       => 'b',
	"passed"        => 'p',
	"not_run"       => 'n',
	"not_available" => 'x',
	"unknown"       => 'u',
	"all"           => 'all'
); 

// Please if you add an status you need to add a corresponding CSS Class
// in the CSS files (see the gui directory)
$g_tc_status_css = array_flip($g_tc_status);


// Used to get localized string to show to users
// key: status
// value: id to use with lang_get() to get the string, from strings.txt
//        or custom_strings.txt
//
$g_tc_status_verbose_labels = array(
  "all"      => "test_status_all_status",
	"not_run"  => "test_status_not_run",
	"passed"   => "test_status_passed",
	"failed"   => "test_status_failed",
	"blocked"  => "test_status_blocked",
	"not_available" => "test_status_not_available",
	"unknown"       => "test_status_unknown"
);


// Used to generate radio and buttons at user interface level.
// Order is important, because this will be display order on User Interface
//
// key   => verbose status as defined in $g_tc_status
// value => string id defined in the strings.txt file, 
//          used to localize the strings.
//
// $g_tc_status_for_ui = array(
// 	"not_run" => "test_status_not_run",
// 	"passed"  => "test_status_passed",
// 	"failed"  => "test_status_failed",
// 	"blocked" => "test_status_blocked"
// );

$g_tc_status_for_ui = array(
	"passed"  => "test_status_passed",
	"failed"  => "test_status_failed",
	"blocked" => "test_status_blocked"
);

// radio button selected by default
$g_tc_status_for_ui_default="blocked";

// -------------------------------------------------------------------------------

/** [Reports] */


// Status to use on reports.
// Attention: 
// 1. report generation must be changed to manage new statuses
// 2. Display order = order in array
//
$g_reports_cfg->tc_status = array(
    "passed"  => "test_status_passed",
    "failed"  => "test_status_failed",
    "blocked" => "test_status_blocked",
    "not_run" => "test_status_not_run"
);

$g_reports_cfg->formats = array('HTML', 'MS Excel', 'MS Word','PDF','Email');

// Offset in seconds, to substract from current date to create start date on
// reports that have start / end dates
$g_reports_cfg->start_date_offset=(7*24*60*60); // one week

/** 
 * @VAR $g_reports_list['report_identifier'] 
 * definition of default set of reports
 * title - title string identifier
 * url - http path (without testPlanId and format)
 * enabled - availability
 * 	1. all (everytime),
 * 	2. bts (if bug tracker is connected only), 
 * 	3. req (if project has available requirements only)
 */
$g_reports_list['test_plan'] = array( 
	'title' => 'test_plan',
	'url' => 'lib/results/printDocOptions.php?type=testplan',
	'enabled' => 'all',
	'format' => 'HTML,MS Word'
);
$g_reports_list['metrics_tp_general'] = array( 
	'title' => 'link_report_general_tp_metrics',
	'url' => 'lib/results/resultsGeneral.php',
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['metrics_tp_builds'] = array( 
	'title' => 'link_report_overall_build',
	'url' => 'lib/results/resultsAllBuilds.php',
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['results_custom_query'] = array( 
	'title' => 'link_report_metrics_more_builds',
	'url' => 'lib/results/resultsMoreBuilds.php',
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['list_tc_failed'] = array( 
	'title' => 'link_report_failed',
	'url' => 'lib/results/resultsByStatus.php?type='.$g_tc_status['failed'],
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['list_tc_blocked'] = array( 
	'title' => 'link_report_blocked_tcs',
	'url' => 'lib/results/resultsByStatus.php?type='.$g_tc_status['blocked'],
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['list_tc_norun'] = array( 
	'title' => 'link_report_not_run',
	'url' => 'lib/results/resultsByStatus.php?type='.$g_tc_status['not_run'],
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['results_matrix'] = array( 
	'title' => 'link_report_test',
	'url' => 'lib/results/resultsTC.php',
	'enabled' => 'all',
	'format' => 'HTML,MS Excel,Email'
);
$g_reports_list['charts_basic'] = array( 
	'title' => 'link_charts',
	'url' => 'lib/results/charts.php',
	'enabled' => 'all',
	'format' => 'HTML'
);
$g_reports_list['results_requirements'] = array( 
	'title' => 'link_report_reqs_coverage',
	'url' => 'lib/results/resultsReqs.php',
	'enabled' => 'req',
	'format' => 'HTML'
);
$g_reports_list['list_problems'] = array( 
	'title' => 'link_report_total_bugs',
	'url' => 'lib/results/resultsBugs.php',
	'enabled' => 'bts',
	'format' => 'HTML'
);


// -------------------------------------------------------------------------------


/** [Roles] */
define("TL_ROLES_TESTER",7);
define("TL_ROLES_GUEST",5);
define("TL_ROLES_NONE",3);
define("TL_ROLES_NO_RIGHTS",3);

define("TL_ROLES_UNDEFINED",0);
define("TL_ROLES_INHERITED",0);

// Roles with id > to this role can be deleted from user interface
define("TL_LAST_SYSTEM_ROLE",9);


// you can change the default role used for new users:
// - created from the login page.
// - created using user management features
//
// use custom_config.inc.php instead of doing changes here
$g_default_roleid=TL_ROLES_GUEST;

// when a role is deleted, a new role must be assigned to all users
// having role to be deleted
// A right choice seems to be using $g_default_roleid.
// You can change this adding a config line in custom_config.inc.php
$g_role_replace_for_deleted_roles=$g_default_roleid;


// used to mark up inactive objects (test projects, etc)
define("TL_INACTIVE_MARKUP","* ");

// used on user management page to give different colour 
// to different roles.
// If you don't want use colouring then configure in this way
// $g_role_colour = array ( );
//
$g_role_colour = array ( 
	"admin"         => 'white',
	"tester"        => 'wheat',
	'leader'        => 'acqua',
	'senior tester' => '#FFA',
	'guest'         => 'pink',
	'test designer' => 'cyan',
	'<no rights>'   => 'salmon',
	'<inherited>'   => 'seashell' 
);


/** magic numbers: three levels for priority */
$gtl_const_3levels = array(
	1 => 'low', 
	2 => 'medium', 
	3 => 'high'
);

// use when componing an title using several strings
$g_title_sep=' : ';
$g_title_sep_type2=' >> ';
$g_title_sep_type3=' - ';
$g_title_sep_type4=' :: ';


// used when created a test suite path, concatenating test suite names
$g_testsuite_sep='/';


// [Main page]
// define('MENU_ITEM_OPEN','<div class="module-grey"><div><div><div>');
// define('MENU_ITEM_CLOSE','</div></div></div></div>');

// using niftycorners
define('MENU_ITEM_OPEN','<div class="menu_bubble">');
define('MENU_ITEM_CLOSE','</div><br />');



// moved from requirements.inc.php
define('TL_REQ_STATUS_VALID', 'V');
define('TL_REQ_STATUS_NOT_TESTABLE', 'N');

// 20071117 - franciscom
// need ask Martin what are possible types
// MHT: the later solution could include status: draft, valid(final,reviewed and approved), obsolete, todo, future
//	so REQ review process could be apllied. The current solution is simple, but enough from testing point of view
define('TL_REQ_TYPE_1', 'V');
define('TL_REQ_TYPE_2', 'N');


$g_req_status=array(TL_REQ_STATUS_VALID => 'req_state_valid', 
					          TL_REQ_STATUS_NOT_TESTABLE => 'req_state_not_testable');


// 20071101 - franciscom
define( 'PARTIAL_URL_TL_FILE_FORMATS_DOCUMENT',	'docs/tl-file-formats.pdf');


// 
// [FUNCTION MAGIC NUMBERS] [DON'T BOTHER ABOUT]

// From Mantis
define( 'ON',	1 );
define( 'OFF',	0 );

// used in several functions instead of MAGIC NUMBERS - Don't change 
define('ALL_PRODUCTS',0);
define('TP_ALL_STATUS',null);
define('FILTER_BY_PRODUCT',1);
define('FILTER_BY_TESTPROJECT',FILTER_BY_PRODUCT);
define('TP_STATUS_ACTIVE',1);
define('NON_TESTABLE_REQ','n');
define('VALID_REQ','v');

define('DSN',FALSE);  // for method connect() of database.class
define('ANY_BUILD',null);
define('GET_NO_EXEC',1);


define('ACTIVE',1);
define('INACTIVE',0);
define('OPEN',1);
define('CLOSED',0);

// planTCNavigator.php
define('FILTER_BY_BUILD_OFF',0);
define('FILTER_BY_OWNER_OFF',0);
define('FILTER_BY_TC_STATUS_OFF',null);
define('FILTER_BY_KEYWORD_OFF',null);
define('FILTER_BY_ASSIGNED_TO_OFF',0);
define('SEARCH_BY_CUSTOM_FIELDS_OFF',null);
define('COLOR_BY_TC_STATUS_OFF',0);
define('CREATE_TC_STATUS_COUNTERS_OFF',0);



// moved from testSetRemove.php
define('WRITE_BUTTON_ONLY_IF_LINKED',1);

// moved from tc_exec_assignment.php
define('FILTER_BY_TC_OFF',null); 
define('ALL_USERS_FILTER',null); 
define('ADD_BLANK_OPTION',true); 



define('DO_LANG_GET',1);
define('DONT_DO_LANG_GET',0);

// 
define('FILTER_BY_SHOW_ON_EXECUTION',1);

define('GET_ALSO_NOT_EXECUTED',null);
define('GET_ONLY_EXECUTED','executed');

// generateTestSpecTree()
define('FOR_PRINTING',1);
define('NOT_FOR_PRINTING',0);

define('HIDE_TESTCASES',1);
define('SHOW_TESTCASES',0);
define('FILTER_INACTIVE_TESTCASES',1);
define('DO_NOT_FILTER_INACTIVE_TESTCASES',0);

define('ACTION_TESTCASE_DISABLE',0);
define('IGNORE_INACTIVE_TESTCASES',1);

define('DO_ON_TESTCASE_CLICK',1);
define('NO_ADDITIONAL_ARGS','');
define('NO_KEYWORD_ID_TO_FILTER',0);


define('RECURSIVE_MODE',TRUE);
define('NO_NODE_TYPE_TO_FILTER',null);
define('ANY_OWNER',null);

define('ALL_BUILDS','a');
define('ALL_TEST_SUITES','all');

define('GET_ACTIVE_BUILD',1);
define('GET_INACTIVE_BUILD',0);
define('GET_OPEN_BUILD',1);
define('GET_CLOSED_BUILD',0);


// bug_interface->buildViewBugLink()
define('GET_BUG_SUMMARY',true);

// gen_spec_view()
define('DO_PRUNE',1);

// executeTestCase()
define('AUTOMATION_RESULT_KO', -1);
define('AUTOMATION_NOTES_KO', -1);

// testcase.class.php
define('TESTCASE_EXECUTION_TYPE_MANUAL', 1);
define('TESTCASE_EXECUTION_TYPE_AUTO', 2);

define('OK',1);
define('ERROR',0);

define('AUTOMATIC_ID',0);
define('ENABLED',1);
define('NO_FILTER_SHOW_ON_EXEC',null);
define('DONT_REFRESH','no');
define('DEFAULT_TC_ORDER',0);
// -------------------------------------------------------------------
?>