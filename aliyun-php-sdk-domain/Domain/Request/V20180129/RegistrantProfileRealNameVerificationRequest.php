<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RegistrantProfileRealNameVerification
 *
 * @method string getIdentityCredentialType()
 * @method string getUserClientIp()
 * @method string getRegistrantProfileID()
 * @method string getIdentityCredential()
 * @method string getLang()
 * @method string getIdentityCredentialNo()
 */
class RegistrantProfileRealNameVerificationRequest extends \RpcAcsRequest
{

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
            'Domain',
            '2018-01-29',
            'RegistrantProfileRealNameVerification'
        );
    }

    /**
     * @param string $identityCredentialType
     *
     * @return $this
     */
    public function setIdentityCredentialType($identityCredentialType)
    {
        $this->requestParameters['IdentityCredentialType'] = $identityCredentialType;
        $this->queryParameters['IdentityCredentialType'] = $identityCredentialType;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $registrantProfileID
     *
     * @return $this
     */
    public function setRegistrantProfileID($registrantProfileID)
    {
        $this->requestParameters['RegistrantProfileID'] = $registrantProfileID;
        $this->queryParameters['RegistrantProfileID'] = $registrantProfileID;

        return $this;
    }

    /**
     * @param string $identityCredential
     *
     * @return $this
     */
    public function setIdentityCredential($identityCredential)
    {
        $this->requestParameters['IdentityCredential'] = $identityCredential;
        $this->queryParameters['IdentityCredential'] = $identityCredential;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $identityCredentialNo
     *
     * @return $this
     */
    public function setIdentityCredentialNo($identityCredentialNo)
    {
        $this->requestParameters['IdentityCredentialNo'] = $identityCredentialNo;
        $this->queryParameters['IdentityCredentialNo'] = $identityCredentialNo;

        return $this;
    }
}
