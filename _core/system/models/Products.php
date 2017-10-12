<?php

class Products extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $proID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $proName;

    /**
     * Method to set the value of field proID
     *
     * @param integer $proID
     * @return $this
     */
    public function setProID($proID)
    {
        $this->proID = $proID;

        return $this;
    }

    /**
     * Method to set the value of field proName
     *
     * @param string $proName
     * @return $this
     */
    public function setProName($proName)
    {
        $this->proName = $proName;

        return $this;
    }

    /**
     * Returns the value of field proID
     *
     * @return integer
     */
    public function getProID()
    {
        return $this->proID;
    }

    /**
     * Returns the value of field proName
     *
     * @return string
     */
    public function getProName()
    {
        return $this->proName;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("products");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'products';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Products[]|Products|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Products|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
