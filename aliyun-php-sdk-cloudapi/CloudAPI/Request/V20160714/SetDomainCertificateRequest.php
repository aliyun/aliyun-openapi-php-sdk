<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDomainCertificate
 *
 * @method string getCertificatePrivateKey()
 * @method string getGroupId()
 * @method string getDomainName()
 * @method string getCertificateBody()
 * @method string getSecurityToken()
 * @method string getCertificateName()
 */
class SetDomainCertificateRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'SetDomainCertificate',
            'apigateway'
        );
    }

    /**
     * @param string $certificatePrivateKey
     *
     * @return $this
     */
    public function setCertificatePrivateKey($certificatePrivateKey)
    {
        $this->requestParameters['CertificatePrivateKey'] = $certificatePrivateKey;
        $this->queryParameters['CertificatePrivateKey'] = $certificatePrivateKey;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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
     * @param string $certificateBody
     *
     * @return $this
     */
    public function setCertificateBody($certificateBody)
    {
        $this->requestParameters['CertificateBody'] = $certificateBody;
        $this->queryParameters['CertificateBody'] = $certificateBody;

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
     * @param string $certificateName
     *
     * @return $this
     */
    public function setCertificateName($certificateName)
    {
        $this->requestParameters['CertificateName'] = $certificateName;
        $this->queryParameters['CertificateName'] = $certificateName;

        return $this;
    }
}
