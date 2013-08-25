<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Ministrants entity class.
 *
 * Annotations define the entity mappings to database.
 *
 * @ORM\Entity
 * @ORM\Table(name="Page_Limited_Display")
 */
class PageLimited_Entity_PageZenDisplay extends Zikula_EntityAccess
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
     * The following are annotations which define the name field.
     *
     * @ORM\Column(type="string", length="100")
     */
    private $keyword;
    
    /**
     * The following are annotations which define the text field.
     *
     * @ORM\Column(type="text")
     */
    private $keywordreminder; 
    
    /**
     * The following are annotations which define the date-time field.
     *
     * @ORM\Column(type="datetime")
     */
    private $editdate;
    
     /**
     * The following are annotations which define the date-time field.
     *
     * @ORM\Column(type="datetime")
     */
     
    //private $publishingdate;
    
    /**
     * The following are annotations which define the user field.
     *
     * @ORM\Column(type="integer")
     */
     
     private $uid_edit;
     
    /**
     * The following are annotations which define the user field.
     *
     * @ORM\Column(type="integer")
     */
     //private $uid_publish;
     
     
	 /**
     * The following are annotations which define the text field.
     *
     * @ORM\Column(type="text")
     */
    private $text;  
    
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
    
    /*public function getpublishingdate()
    {
        return $this->publishingdate;
    }*/
	
	public function geteditdateFormatted()
    {
        return $this->editdate->format('d.m.Y G:i');
    }
    
	/*public function getpublishingdateFormatted()
    {
        return $this->publishingdate->format('d.m.Y G:i');
    }*/
    
    public function getuid_edit()
    {
        return $this->uid_edit;
    }
    
    /*public function getuid_publish()
    {
        return $this->uid_publish;
    }*/
    
    public function gettext()
    {
        return $this->text;
    }
    
    public function getkeyword()
    {
        return $this->keyword;
    }
    
    public function getkeywordreminder()
    {
        return $this->keywordreminder;
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
   
   /*public function setpublishingdate($publishingdate)
    {
        $this->publishingdate = new \DateTime($publishingdate);
    }*/
    
    public function setuid_edit($uid_edit)
    {
        $this->uid_edit = ($uid_edit);
    }
    
    /*public function setuid_publish($uid_publish)
    {
        $this->uid_publish = ($uid_publish);
    }*/
    
    public function settext($text)
    {
		$this->text = ($text);
    } 
    
    public function setkeyword($keyword)
    {
		$this->keyword = ($keyword);
    } 
    
    public function setkeywordreminder($keywordreminder)
    {
		$this->keywordreminder = ($keywordreminder);
    } 
}
