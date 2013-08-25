<?php
/**
 * This is the User controller class providing navigation and interaction functionality.
 */
class PageLimited_Api_Admin extends Zikula_AbstractApi
{
	/**
	 * @brief Get available admin panel links
	 *
	 * @return array array of admin links
	 */
	public function getlinks()
	{
		$links = array();
		$links[] = array(
			'url'=> ModUtil::url('PageLimited', 'admin', 'main'),
			'text'  => $this->__('Main'),
			'title' => $this->__('Main'),
			'class' => 'z-icon-es-config',
		);
		
		
		if (SecurityUtil::checkPermission('PageLimited::', '::', ACCESS_ADMIN)) {
			$links[] = array(
				'url'=> ModUtil::url('PageLimited', 'admin', 'pagemanager'),
				'text'  => $this->__('Page Manager'),
				'title' => $this->__('Add and delete pages'),
				'class' => 'z-icon-es-display',
			);
		}
		
		$links[] = array(
				'url'=> ModUtil::url('PageLimited', 'admin', 'html_school_main'),
				'text'  => $this->__('Little HTLM- School'),
				'title' => $this->__('Learn HTML, to edit pages professionally'),
				'class' => 'z-icon-es-help',
			);
			
		$links[] = array(
				'url'=> ModUtil::url('PageLimited', 'admin', 'help'),
				'text'  => $this->__('Help'),
				'title' => $this->__('Help'),
				'class' => 'z-icon-es-help',
			);
			
		return $links;
	}	
}
