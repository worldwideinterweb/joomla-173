<?php
/**
 * @author JoomlaShine.com Team
 * @copyright JoomlaShine.com
 * @link joomlashine.com
 * @package JSN ImageShow - Image Source Flickr
 * @version $Id$
 * @license GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
 */
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.plugin.plugin' );
include_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_imageshow'.DS.'imagesources'.DS.'plugin_helpers'.DS.'sourceexternal.php');
class plgJSNImageshowSourceFlickr extends plgJSNImageshowSourceExternal
{
	var $_imageSourceName 	= 'flickr';

	function onLoadJSNImageSource($name)
	{
		if ($name != $this->_prefix.$this->_imageSourceName) {
			return false;
		}
		parent::onLoadJSNImageSource($name);
	}

	function _setPluginPath() {
		$this->_pluginPath = dirname(__FILE__);
	}

	function listSourceflickrTables()
	{
		$tables = array('#__imageshow_external_source_flickr');
		return $tables;
	}
}