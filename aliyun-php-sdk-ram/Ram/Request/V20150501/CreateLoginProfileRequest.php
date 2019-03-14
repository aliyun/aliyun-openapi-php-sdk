<?php

namespace Ram\Request\V20150501;

/**
 * Request of CreateLoginProfile
 *
 * @method string getPassword()
 * @method string getPasswordResetRequired()
 * @method string getMFABindRequired()
 * @method string getUserName()
 */
class CreateLoginProfileRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ram',
            '2015-05-01',
            'CreateLoginProfile',
            'ram'
        );
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $passwordResetRequired
     *
     * @return $this
     */
    public function setPasswordResetRequired($passwordResetRequired)
    {
        $this->requestParameters['PasswordResetRequired'] = $passwordResetRequired;
        $this->queryParameters['PasswordResetRequired'] = $passwordResetRequired;

        return $this;
    }

    /**
     * @param string $mFABindRequired
     *
     * @return $this
     */
    public function setMFABindRequired($mFABindRequired)
    {
        $this->requestParameters['MFABindRequired'] = $mFABindRequired;
        $this->queryParameters['MFABindRequired'] = $mFABindRequired;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
