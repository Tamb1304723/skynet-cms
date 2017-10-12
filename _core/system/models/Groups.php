<?php

class Groups extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $groupID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $groupName;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $groupDateCreated;

    /**
     * Method to set the value of field groupID
     *
     * @param integer $groupID
     * @return $this
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Method to set the value of field groupName
     *
     * @param string $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Method to set the value of field groupDateCreated
     *
     * @param string $groupDateCreated
     * @return $this
     */
    public function setGroupDateCreated($groupDateCreated)
    {
        $this->groupDateCreated = $groupDateCreated;

        return $this;
    }

    /**
     * Returns the value of field groupID
     *
     * @return integer
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Returns the value of field groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Returns the value of field groupDateCreated
     *
     * @return string
     */
    public function getGroupDateCreated()
    {
        return $this->groupDateCreated;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("groups");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'groups';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Groups[]|Groups|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Groups|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
