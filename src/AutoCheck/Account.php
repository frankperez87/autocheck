<?php

namespace AutoCheck;

/**
 * Class Account
 * @package AutoCheck
 */
class Account
{

    /**
     * @var
     */
    protected $customerId;
    /**
     * @var
     */
    protected $password;
    /**
     * @var
     */
    protected $secondaryCustomerId;
    /**
     * @var string
     */
    protected $language = '';

    /**
     * @param $cid
     * @param $pwd
     * @param $sid
     */
    public function __construct($cid, $pwd, $sid)
    {
        $this->customerId = $cid;
        $this->password = $pwd;
        $this->secondaryCustomerId = $sid;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSecondaryCustomerId()
    {
        return $this->secondaryCustomerId;
    }

    /**
     * @param $lang
     */
    public function setLanguage($lang)
    {
        $this->language = $lang;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
