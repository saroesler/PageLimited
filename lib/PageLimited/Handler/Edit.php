<?php
/**
 * Copyright Zikula Foundation 2010 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license MIT
 * @package ZikulaExamples_ExampleDoctrine
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * Form handler for create and edit.
 */
class PageLimited_Handler_Edit extends Zikula_Form_AbstractHandler
{

    private $page;

    /**
     * Setup form.
     *
     * @param Zikula_Form_View $view Current Zikula_Form_View instance.
     *
     * @return boolean
     */
    public function initialize(Zikula_Form_View $view)
    {
        // Get the id.
        $pid = FormUtil::getPassedValue('pid', null, "GET", FILTER_SANITIZE_NUMBER_INT);
        if ($pid) {
            // load user with id
            $this->page = $this->entityManager->find('PageLimited_Entity_PageZenDisplay', $pid);

            if (!$this->page) {
                return LogUtil::registerError($this->__f('Page with id %s not found', $pid));
            }

            $view->assign('page',$this->page);
        } else {
            $this->page = new PageLimited_Entity_PageZenDisplay();
        }


        // assign current values to form fields
        return true;
    }

    /**
     * Handle form submission.
     *
     * @param Zikula_Form_View $view  Current Zikula_Form_View instance.
     * @param array            &$args Args.
     *
     * @return boolean
     */
    public function handleCommand(Zikula_Form_View $view, &$args)
    {
        $url = ModUtil::url('PageLimited', 'admin', 'main' );
        if ($args['commandName'] == 'cancel') {
            return $view->redirect($url);
        }


        // check for valid form
        if (!$view->isValid()) {
            return false;
        }

        // load form values
        $data = $view->getValues();
        
    	$uid = SessionUtil::getVar('uid');
		Loader::loadClass('UserUtil');

        // merge user and save everything
        $this->page->merge($data);
        $this->page->seteditdate(date("Y-m-d H:i:s"));
        $this->page->setuid_edit($uid);
       // $this->page->setedit_comment($uid);
        $this->entityManager->persist($this->page);
        $this->entityManager->flush();

        return $view->redirect($url);
    }
}
