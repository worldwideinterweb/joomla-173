<?php
/**
 * @version		$Id$
 * @package	Joomla.UnitTest
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
/**
 * Test class for JCacheOutput.
 * Generated by PHPUnit on 2009-10-08 at 21:42:40.
 *
 * @package	Joomla.UnitTest
 * @subpackage Cache
 *
 */
class JCacheControllerOutputTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var	JCacheOutput
	 * @access protected
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 * @access protected
	 */
	protected function setUp()
	{
		include_once JPATH_BASE.'/libraries/joomla/cache/cache.php';
		include_once JPATH_BASE.'/libraries/joomla/cache/controller.php';
		include_once JPATH_BASE.'/libraries/joomla/cache/controller/output.php';

		$this->object = JCache::getInstance('output', array());
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 * @access protected
	 */
	protected function tearDown()
	{
	}

	/**
	 * @return void
	 * @todo Implement testStart().
	 */
	public function testStart()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @return void
	 * @todo Implement testEnd().
	 */
	public function testEnd()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}
?>
