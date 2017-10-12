<?php

class Roles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $roleID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $roleName;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $roleDateCreated;

    /**
     * Method to set the value of field roleID
     *
     * @param integer $roleID
     * @return $this
     */
    public function setRoleID($roleID)
    {
        $this->roleID = $roleID;

        return $this;
    }

    /**
     * Method to set the value of field roleName
     *
     * @param string $roleName
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Method to set the value of field roleDateCreated
     *
     * @param string $roleDateCreated
     * @return $this
     */
    public function setRoleDateCreated($roleDateCreated)
    {
        $this->roleDateCreated = $roleDateCreated;

        return $this;
    }

    /**
     * Returns the value of field roleID
     *
     * @return integer
     */
    public function getRoleID()
    {
        return $this->roleID;
    }

    /**
     * Returns the value of field roleName
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Returns the value of field roleDateCreated
     *
     * @return string
     */
    public function getRoleDateCreated()
    {
        return $this->roleDateCreated;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("roles");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Roles[]|Roles|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Roles|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
