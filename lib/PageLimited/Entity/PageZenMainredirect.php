<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Ministrants entity class.
 *
 * Annotations define the entity mappings to database.
 *
 * @ORM\Entity
 * @ORM\Table(name="Page_Limited_Main_redirect")
 */
class PageLimited_Entity_PageZenMainredirect extends Zikula_EntityAccess
{

    /**
     * The following are annotations which define the id field.
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * The following are annotations which define the name field.
     *
     * @ORM\Column(type="integer")
     */
    private $pid;

   
    
    public function getpid()
    {
        return $this->pid;
    }
    
    public function getid()
    {
        return $this->id;
    }
    
     
    /*
    *Set functions:
    */
    
    public function setpid($pid)
    {
        $this->pid = ($pid);
    }
    
    
}
