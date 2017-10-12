<?php

class Accounts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $accID;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $accUserName;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $accEmail;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $accPassword;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $accRole;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $accDateCreated;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $accDateUpdated;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    protected $accActive;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $accRememberToken;

    /**
     * Method to set the value of field accID
     *
     * @param integer $accID
     * @return $this
     */
    public function setAccID($accID)
    {
        $this->accID = $accID;

        return $this;
    }

    /**
     * Method to set the value of field accUserName
     *
     * @param string $accUserName
     * @return $this
     */
    public function setAccUserName($accUserName)
    {
        $this->accUserName = $accUserName;

        return $this;
    }

    /**
     * Method to set the value of field accEmail
     *
     * @param string $accEmail
     * @return $this
     */
    public function setAccEmail($accEmail)
    {
        $this->accEmail = $accEmail;

        return $this;
    }

    /**
     * Method to set the value of field accPassword
     *
     * @param string $accPassword
     * @return $this
     */
    public function setAccPassword($accPassword)
    {
        $this->accPassword = $accPassword;

        return $this;
    }

    /**
     * Method to set the value of field accRole
     *
     * @param string $accRole
     * @return $this
     */
    public function setAccRole($accRole)
    {
        $this->accRole = $accRole;

        return $this;
    }

    /**
     * Method to set the value of field accDateCreated
     *
     * @param string $accDateCreated
     * @return $this
     */
    public function setAccDateCreated($accDateCreated)
    {
        $this->accDateCreated = $accDateCreated;

        return $this;
    }

    /**
     * Method to set the value of field accDateUpdated
     *
     * @param string $accDateUpdated
     * @return $this
     */
    public function setAccDateUpdated($accDateUpdated)
    {
        $this->accDateUpdated = $accDateUpdated;

        return $this;
    }

    /**
     * Method to set the value of field accActive
     *
     * @param integer $accActive
     * @return $this
     */
    public function setAccActive($accActive)
    {
        $this->accActive = $accActive;

        return $this;
    }

    /**
     * Method to set the value of field accRememberToken
     *
     * @param string $accRememberToken
     * @return $this
     */
    public function setAccRememberToken($accRememberToken)
    {
        $this->accRememberToken = $accRememberToken;

        return $this;
    }

    /**
     * Returns the value of field accID
     *
     * @return integer
     */
    public function getAccID()
    {
        return $this->accID;
    }

    /**
     * Returns the value of field accUserName
     *
     * @return string
     */
    public function getAccUserName()
    {
        return $this->accUserName;
    }

    /**
     * Returns the value of field accEmail
     *
     * @return string
     */
    public function getAccEmail()
    {
        return $this->accEmail;
    }

    /**
     * Returns the value of field accPassword
     *
     * @return string
     */
    public function getAccPassword()
    {
        return $this->accPassword;
    }

    /**
     * Returns the value of field accRole
     *
     * @return string
     */
    public function getAccRole()
    {
        return $this->accRole;
    }

    /**
     * Returns the value of field accDateCreated
     *
     * @return string
     */
    public function getAccDateCreated()
    {
        return $this->accDateCreated;
    }

    /**
     * Returns the value of field accDateUpdated
     *
     * @return string
     */
    public function getAccDateUpdated()
    {
        return $this->accDateUpdated;
    }

    /**
     * Returns the value of field accActive
     *
     * @return integer
     */
    public function getAccActive()
    {
        return $this->accActive;
    }

    /**
     * Returns the value of field accRememberToken
     *
     * @return string
     */
    public function getAccRememberToken()
    {
        return $this->accRememberToken;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon_db");
        $this->setSource("accounts");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'accounts';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Accounts[]|Accounts|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Accounts|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
