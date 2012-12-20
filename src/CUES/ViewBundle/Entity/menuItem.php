<?php
namespace CUES\ViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="menuItem")
*/
class menuItem
{
/**
* @ORM\Column(type="string")
*/
protected $url;

/**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
protected $ordering;


/**
* @ORM\Column(type="string")
*/
protected $Text;

/**
 * @ORM\Column(type="boolean")
 */
protected $header;

/**
 * @ORM\Column(type="boolean")
 */
protected $active;



    /**
     * Set order
     *
     * @param integer $order
     * @return menuItem
     */
    public function setOrder($order)
    {
        $this->order = $order;
    
        return $this;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return menuItem
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Text
     *
     * @param string $text
     * @return menuItem
     */
    public function setText($text)
    {
        $this->Text = $text;
    
        return $this;
    }

    /**
     * Get Text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Set header
     *
     * @param boolean $header
     * @return menuItem
     */
    public function setHeader($header)
    {
        $this->header = $header;
    
        return $this;
    }

    /**
     * Get header
     *
     * @return boolean 
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return menuItem
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return menuItem
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    
        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
}