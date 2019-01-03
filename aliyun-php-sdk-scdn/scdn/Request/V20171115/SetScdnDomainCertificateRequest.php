<?php

namespace scdn\Request\V20171115;

/**
 * Request of SetScdnDomainCertificate
 *
 * @method string getForceSet()
 * @method string getSecurityToken()
 * @method string getCertType()
 * @method string getSSLPub()
 * @method string getCertName()
 * @method string getSSLProtocol()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getSSLPri()
 */
class SetScdnDomainCertificateRequest extends \RpcAcsRequest
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
            'scdn',
            '2017-11-15',
            'SetScdnDomainCertificate',
            'scdn'
        );
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
     * @param string $sSLPub
     *
     * @return $this
     */
    public function setSSLPub($sSLPub)
    {
        $this->requestParameters['SSLPub'] = $sSLPub;
        $this->queryParameters['SSLPub'] = $sSLPub;

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
     * @param string $sSLProtocol
     *
     * @return $this
     */
    public function setSSLProtocol($sSLProtocol)
    {
        $this->requestParameters['SSLProtocol'] = $sSLProtocol;
        $this->queryParameters['SSLProtocol'] = $sSLProtocol;

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

    /**
     * @param string $sSLPri
     *
     * @return $this
     */
    public function setSSLPri($sSLPri)
    {
        $this->requestParameters['SSLPri'] = $sSLPri;
        $this->queryParameters['SSLPri'] = $sSLPri;

        return $this;
    }
}
