<?php
namespace cms_skynet\sys\Models;

class ArticleCategories extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $artCateID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $artCateName;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $artCateDateCreated;

    /**
     * Method to set the value of field artCateID
     *
     * @param integer $artCateID
     * @return $this
     */
    public function setArtCateID($artCateID)
    {
        $this->artCateID = $artCateID;

        return $this;
    }

    /**
     * Method to set the value of field artCateName
     *
     * @param string $artCateName
     * @return $this
     */
    public function setArtCateName($artCateName)
    {
        $this->artCateName = $artCateName;

        return $this;
    }

    /**
     * Method to set the value of field artCateDateCreated
     *
     * @param string $artCateDateCreated
     * @return $this
     */
    public function setArtCateDateCreated($artCateDateCreated)
    {
        $this->artCateDateCreated = $artCateDateCreated;

        return $this;
    }

    /**
     * Returns the value of field artCateID
     *
     * @return integer
     */
    public function getArtCateID()
    {
        return $this->artCateID;
    }

    /**
     * Returns the value of field artCateName
     *
     * @return string
     */
    public function getArtCateName()
    {
        return $this->artCateName;
    }

    /**
     * Returns the value of field artCateDateCreated
     *
     * @return string
     */
    public function getArtCateDateCreated()
    {
        return $this->artCateDateCreated;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("article_categories");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'article_categories';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArticleCategories[]|ArticleCategories|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ArticleCategories|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
