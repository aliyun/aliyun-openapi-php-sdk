<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDomainServerCertificate
 *
 * @method string getServerCertificate()
 * @method string getPrivateKey()
 * @method string getServerCertificateStatus()
 * @method string getSecurityToken()
 * @method string getCertType()
 * @method string getForceSet()
 * @method string getCertName()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 */
class SetDomainServerCertificateRequest extends \RpcAcsRequest
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
            'Cdn',
            '2018-05-10',
            'SetDomainServerCertificate'
        );
    }

    /**
     * @param string $serverCertificate
     *
     * @return $this
     */
    public function setServerCertificate($serverCertificate)
    {
        $this->requestParameters['ServerCertificate'] = $serverCertificate;
        $this->queryParameters['ServerCertificate'] = $serverCertificate;

        return $this;
    }

    /**
     * @param string $privateKey
     *
     * @return $this
     */
    public function setPrivateKey($privateKey)
    {
        $this->requestParameters['PrivateKey'] = $privateKey;
        $this->queryParameters['PrivateKey'] = $privateKey;

        return $this;
    }

    /**
     * @param string $serverCertificateStatus
     *
     * @return $this
     */
    public function setServerCertificateStatus($serverCertificateStatus)
    {
        $this->requestParameters['ServerCertificateStatus'] = $serverCertificateStatus;
        $this->queryParameters['ServerCertificateStatus'] = $serverCertificateStatus;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $certType
     *
     * @return $this
     */
    public function setCertType($certType)
    {
        $this->requestParameters['CertType'] = $certType;
        $this->queryParameters['CertType'] = $certType;

        return $this;
    }

    /**
     * @param string $forceSet
     *
     * @return $this
     */
    public function setForceSet($forceSet)
    {
        $this->requestParameters['ForceSet'] = $forceSet;
        $this->queryParameters['ForceSet'] = $forceSet;

        return $this;
    }

    /**
     * @param string $certName
     *
     * @return $this
     */
    public function setCertName($certName)
    {
        $this->requestParameters['CertName'] = $certName;
        $this->queryParameters['CertName'] = $certName;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }
}
