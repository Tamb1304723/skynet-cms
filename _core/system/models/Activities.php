<?php

class Activities extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $actID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $actCategoryID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $actAccountID;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $actDateCreated;

    /**
     * Method to set the value of field actID
     *
     * @param integer $actID
     * @return $this
     */
    public function setActID($actID)
    {
        $this->actID = $actID;

        return $this;
    }

    /**
     * Method to set the value of field actCategoryID
     *
     * @param integer $actCategoryID
     * @return $this
     */
    public function setActCategoryID($actCategoryID)
    {
        $this->actCategoryID = $actCategoryID;

        return $this;
    }

    /**
     * Method to set the value of field actAccountID
     *
     * @param integer $actAccountID
     * @return $this
     */
    public function setActAccountID($actAccountID)
    {
        $this->actAccountID = $actAccountID;

        return $this;
    }

    /**
     * Method to set the value of field actDateCreated
     *
     * @param string $actDateCreated
     * @return $this
     */
    public function setActDateCreated($actDateCreated)
    {
        $this->actDateCreated = $actDateCreated;

        return $this;
    }

    /**
     * Returns the value of field actID
     *
     * @return integer
     */
    public function getActID()
    {
        return $this->actID;
    }

    /**
     * Returns the value of field actCategoryID
     *
     * @return integer
     */
    public function getActCategoryID()
    {
        return $this->actCategoryID;
    }

    /**
     * Returns the value of field actAccountID
     *
     * @return integer
     */
    public function getActAccountID()
    {
        return $this->actAccountID;
    }

    /**
     * Returns the value of field actDateCreated
     *
     * @return string
     */
    public function getActDateCreated()
    {
        return $this->actDateCreated;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("activities");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'activities';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Activities[]|Activities|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Activities|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
