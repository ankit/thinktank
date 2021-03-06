<?php 
require_once ('config.tests.inc.php');
require_once ("init.tests.php");

require_once (dirname(__FILE__).'/simpletest/autorun.php');
require_once (dirname(__FILE__).'/simpletest/mock_objects.php');

require_once ('config_test.php');
require_once ('database_test.php');
require_once ('followdao_test.php');
require_once ('frontend_test.php');
require_once ('log_test.php');
require_once ('linkdao_test.php');
require_once ('mysqldao_test.php');
require_once ('plugindao_test.php');
require_once ('ownerinstancedao_test.php');
require_once ('postdao_test.php');
require_once ('twitterapiaccessoroauth_test.php');
require_once ('twittercrawler_test.php');
require_once ('twitteroauth_test.php');
require_once ('userdao_test.php');
require_once ('facebookcrawler_test.php');
require_once ('flickrapi_test.php');
//TODO Figure out why this test passes individually but not in the group
//require_once ('flickrplugin_test.php');
require_once ('expandurlsplugin_test.php');

$test = & new GroupTest('All tests');

$test->addTestCase( new TestOfConfig());
$test->addTestCase( new TestOfLogging());
$test->addTestCase( new TestOfDatabase());
$test->addTestCase( new TestOfTwitterOAuth());
$test->addTestCase( new TestOfMySQLDAO());
$test->addTestCase( new TestOfUserDAO());
$test->addTestCase( new TestOfFollowDAO());
$test->addTestCase( new TestOfLinkDAO());
$test->addTestCase( new TestOfThinkTankFrontEnd());
$test->addTestCase( new TestOfTwitterAPIAccessorOAuth());
$test->addTestCase( new TestOfPluginDAO());
$test->addTestCase( new TestOfPostDAO());
$test->addTestCase( new TestOfTwitterCrawler());
$test->addTestCase( new TestOfFacebookCrawler());
$test->addTestCase( new TestOfFlickrAPIAccessor());
//$test->addTestCase( new TestOfFlickrPlugin());
$test->addTestCase( new TestOfExpandURLsPlugin());
$test->addTestCase( new TestOfOwnerInstanceDAO());

//$test->run(new HtmlReporter());
$test->run( new TextReporter());

?>
