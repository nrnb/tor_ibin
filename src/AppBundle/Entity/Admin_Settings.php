<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="`admin_settings`")
 */
class Admin_Settings
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="`title`", type="string", length=200, nullable=true)
     */
    protected $title;

    /**
     *
     * @ORM\Column(name="`short_title`", type="string", length=200, nullable=true)
     */
    protected $short_title;
    
    /**
     * @ORM\Column(name="`home_page`", type="string", length=10000, nullable=true)
     */
    protected $home_page;

    /**
     * @ORM\Column(name="`about`", type="string", length=10000, nullable=true)
     */
    protected $about;

    /**
     * @ORM\Column(name="`color_scheme`", type="string", length=10, nullable=true)
     */
    protected $color_scheme;

    
    /**
     * @ORM\Column(name="`example_1`", type="string", length=20, nullable=true)
     */
    protected $example_1;
    
    /**
     * @ORM\Column(name="`example_2`", type="string", length=20, nullable=true)
     */
    protected $example_2;
    
    /**
     * @ORM\Column(name="`example_3`", type="string", length=20, nullable=true)
     */
    protected $example_3;
    
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Admin_Settings
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set homePage
     *
     * @param string $homePage
     *
     * @return Admin_Settings
     */
    public function setHomePage($homePage)
    {
        $this->home_page = $homePage;

        return $this;
    }

    /**
     * Get homePage
     *
     * @return string
     */
    public function getHomePage()
    {
        return $this->home_page;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return Admin_Settings
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set colorScheme
     *
     * @param string $colorScheme
     *
     * @return Admin_Settings
     */
    public function setColorScheme($colorScheme)
    {
        $this->color_scheme = $colorScheme;

        return $this;
    }

    /**
     * Get colorScheme
     *
     * @return string
     */
    public function getColorScheme()
    {
        return $this->color_scheme;
    }

    /**
     * Set shortTitle
     *
     * @param string $shortTitle
     *
     * @return Admin_Settings
     */
    public function setShortTitle($shortTitle)
    {
        $this->short_title = $shortTitle;

        return $this;
    }

    /**
     * Get shortTitle
     *
     * @return string
     */
    public function getShortTitle()
    {
        return $this->short_title;
    }

    /**
     * Set example1
     *
     * @param string $example1
     *
     * @return Admin_Settings
     */
    public function setExample1($example1)
    {
        $this->example_1 = $example1;

        return $this;
    }

    /**
     * Get example1
     *
     * @return string
     */
    public function getExample1()
    {
        return $this->example_1;
    }

    /**
     * Set example2
     *
     * @param string $example2
     *
     * @return Admin_Settings
     */
    public function setExample2($example2)
    {
        $this->example_2 = $example2;

        return $this;
    }

    /**
     * Get example2
     *
     * @return string
     */
    public function getExample2()
    {
        return $this->example_2;
    }

    /**
     * Set example3
     *
     * @param string $example3
     *
     * @return Admin_Settings
     */
    public function setExample3($example3)
    {
        $this->example_3 = $example3;

        return $this;
    }

    /**
     * Get example3
     *
     * @return string
     */
    public function getExample3()
    {
        return $this->example_3;
    }
}
