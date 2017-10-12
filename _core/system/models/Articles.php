<?php
namespace cms_skynet\sys\Models;

use Phalcon\Mvc\Model;
class Articles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $artID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $artTitle;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $artCover;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $artDateCreated;

    /**
     * Method to set the value of field artID
     *
     * @param integer $artID
     * @return $this
     */
    public function setArtID($artID)
    {
        $this->artID = $artID;

        return $this;
    }

    /**
     * Method to set the value of field artTitle
     *
     * @param string $artTitle
     * @return $this
     */
    public function setArtTitle($artTitle)
    {
        $this->artTitle = $artTitle;

        return $this;
    }

    /**
     * Method to set the value of field artCover
     *
     * @param string $artCover
     * @return $this
     */
    public function setArtCover($artCover)
    {
        $this->artCover = $artCover;

        return $this;
    }

    /**
     * Method to set the value of field artDateCreated
     *
     * @param string $artDateCreated
     * @return $this
     */
    public function setArtDateCreated($artDateCreated)
    {
        $this->artDateCreated = $artDateCreated;

        return $this;
    }

    /**
     * Returns the value of field artID
     *
     * @return integer
     */
    public function getArtID()
    {
        return $this->artID;
    }

    /**
     * Returns the value of field artTitle
     *
     * @return string
     */
    public function getArtTitle()
    {
        return $this->artTitle;
    }

    /**
     * Returns the value of field artCover
     *
     * @return string
     */
    public function getArtCover()
    {
        return $this->artCover;
    }

    /**
     * Returns the value of field artDateCreated
     *
     * @return string
     */
    public function getArtDateCreated()
    {
        return $this->artDateCreated;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("articles");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'articles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Articles[]|Articles|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Articles|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
