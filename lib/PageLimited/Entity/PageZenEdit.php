<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Ministrants entity class.
 *
 * Annotations define the entity mappings to database.
 *
 * @ORM\Entity
 * @ORM\Table(name="Page_Zensor_Edit")
 */
class PageZensor_Entity_PageZenEdit extends Zikula_EntityAccess
{
    /**
     * The following are annotations which define the id field.
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $pid;

    /**
     * The following are annotations which define the name field.
     *
     * @ORM\Column(type="string", length="100")
     */
    private $title;

    /**
     * The following are annotations which define the date-time field.
     *
     * @ORM\Column(type="datetime")
     */
    private $editdate;
    
    private $publishingdate;
    
    /**
     * The following are annotations which define the user field.
     *
     * @ORM\Column(type="integer")
     */
     
     private $uid_edit;
     
     private $uid_publish;
     
     
	 /**
     * The following are annotations which define the text field.
     *
     * @ORM\Column(type="text")
     */
    private $text;  
    
    /**
     * The following are annotations which define the flag field.
     *
     * @ORM\Column(type="integer")
     */
    private $edit_flag;    
    
     /**
     * The following are annotations which define the comment field.
     *
     * @ORM\Column(type="text")
     */
    private $edit_comment;  
    
    /**
     * The following are annotations which define the refusecomment field.
     *
     * @ORM\Column(type="text")
     */
    private $refuse_comment;  
    
    
    public function getpid()
    {
        return $this->pid;
    }
    
     public function gettitle()
    {
        return $this->title;
    }
    
    public function geteditdate()
    {
        return $this->editdate;
    }
    
	public function geteditdateFormatted()
    {
        return $this->editdate->format('d.m.Y  G:i');
    }
      
    public function getuid_edit()
    {
        return $this->uid_edit;
    }
    
    public function getuid_publish()
    {
        return $this->uid_publish;
    }
    
   public function gettext()
    {
        return $this->text;
    }
    
    public function getedit_flag()
    {
        return $this->edit_flag;
    }
    
   public function getedit_comment()
    {
        return $this->edit_comment;
    }
    
   public function getrefuse_comment()
    {
        return $this->refuse_comment;
    }
    
    /*
    *Set functions:
    */
    
    public function settitle($title)
    {
        $this->title = ($title);
    }
    
    public function seteditdate($editdate)
    {
        $this->editdate = new \DateTime($editdate);
    }
   
   public function setpublishingdate($publishingdate)
    {
        $this->publishingdate = new \DateTime($publishingdate);
    }
    
    public function setuid_edit($uid_edit)
    {
        $this->uid_edit = ($uid_edit);
    }
    
    public function setuid_publish($uid_publish)
    {
        $this->uid_publish = ($uid_publish);
    }

   public function settext($text)
    {
		$this->text = ($text);
    }    
	
	public function setedit_flag($edit_flag)
    {
       $this->edit_flag = ($edit_flag);
    }
    
    public function setedit_comment($comment)
    {
		$this->edit_comment = ($comment);
    }
    
    public function setrefuse_comment($comment)
    {
		$this->refuse_comment = ($comment);
    }
}
