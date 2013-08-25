<?php
/**
 * This is the User controller class providing navigation and interaction functionality.
 */
class PageLimited_Controller_User extends Zikula_AbstractController
{
    /**
     * @brief Main function.
     * @return string
     * 
     * @authorSascha Rösler
     */
    public function main()
    {
         $page = $this->entityManager->find('PageLimited_Entity_PageZenMainredirect', 1);
         if($page)
         	$pid=$page->getpid();
         else
         	$pid=1;
         $this->redirect(ModUtil::url($this->name, 'user', 'display',array('pid'=>$pid)));
    }
    
    public function login()
    {
    	$pid = FormUtil::getPassedValue('pid', NULL, 'GET');
    	if($pid==NULL)
    	{
    		echo "Please pass a valid ID ";
    		die();
    	}
    	$page = $this->entityManager->find('PageLimited_Entity_PageZenDisplay', $pid);
    	$title=$page->gettitle();
    	$reminder=$page->getkeywordreminder();
    	return $this->view
		->assign('title',$title)
		->assign('pid',$pid)
		->assign('reminder',$reminder)
		->fetch('User/login_page.tpl');
    }
    public function display()
    {
    	$keyword = FormUtil::getPassedValue('inkey', null, 'POST');
    	$pid = FormUtil::getPassedValue('pid', NULL, 'POST');
    	if($pid!=0)
    	{
    		$page = $this->entityManager->find('PageLimited_Entity_PageZenDisplay', $pid);
    		$permission="PageLimited::".$pid;
    		if(md5($keyword)==$page->getkeyword())
				return $this->view
				->assign('permission',$permission)
				->assign('page',$page)
				->fetch('User/display_page.tpl');
			else
				$this->redirect(ModUtil::url($this->name, 'user', 'login',array('pid'=>$pid)));
    	}
    	$pid = FormUtil::getPassedValue('pid', NULL, 'GET');
    	$this->redirect(ModUtil::url($this->name, 'user', 'login',array('pid'=>$pid)));
    	return true;
    }
}
