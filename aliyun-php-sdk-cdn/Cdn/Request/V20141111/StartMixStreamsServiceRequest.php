<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartMixStreamsService
 *
 * @method string getMixStreamName()
 * @method string getMixAppName()
 * @method string getMainStreamName()
 * @method string getMixType()
 * @method string getSecurityToken()
 * @method string getMainDomainName()
 * @method string getMixTemplate()
 * @method string getMixDomainName()
 * @method string getOwnerId()
 * @method string getMainAppName()
 */
class StartMixStreamsServiceRequest extends \RpcAcsRequest
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
            '2014-11-11',
            'StartMixStreamsService'
        );
    }

    /**
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function setMixStreamName($mixStreamName)
    {
        $this->requestParameters['MixStreamName'] = $mixStreamName;
        $this->queryParameters['MixStreamName'] = $mixStreamName;

        return $this;
    }

    /**
     * @param string $mixAppName
     *
     * @return $this
     */
    public function setMixAppName($mixAppName)
    {
        $this->requestParameters['MixAppName'] = $mixAppName;
        $this->queryParameters['MixAppName'] = $mixAppName;

        return $this;
    }

    /**
     * @param string $mainStreamName
     *
     * @return $this
     */
    public function setMainStreamName($mainStreamName)
    {
        $this->requestParameters['MainStreamName'] = $mainStreamName;
        $this->queryParameters['MainStreamName'] = $mainStreamName;

        return $this;
    }

    /**
     * @param string $mixType
     *
     * @return $this
     */
    public function setMixType($mixType)
    {
        $this->requestParameters['MixType'] = $mixType;
        $this->queryParameters['MixType'] = $mixType;

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
     * @param string $mainDomainName
     *
     * @return $this
     */
    public function setMainDomainName($mainDomainName)
    {
        $this->requestParameters['MainDomainName'] = $mainDomainName;
        $this->queryParameters['MainDomainName'] = $mainDomainName;

        return $this;
    }

    /**
     * @param string $mixTemplate
     *
     * @return $this
     */
    public function setMixTemplate($mixTemplate)
    {
        $this->requestParameters['MixTemplate'] = $mixTemplate;
        $this->queryParameters['MixTemplate'] = $mixTemplate;

        return $this;
    }

    /**
     * @param string $mixDomainName
     *
     * @return $this
     */
    public function setMixDomainName($mixDomainName)
    {
        $this->requestParameters['MixDomainName'] = $mixDomainName;
        $this->queryParameters['MixDomainName'] = $mixDomainName;

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
     * @param string $mainAppName
     *
     * @return $this
     */
    public function setMainAppName($mainAppName)
    {
        $this->requestParameters['MainAppName'] = $mainAppName;
        $this->queryParameters['MainAppName'] = $mainAppName;

        return $this;
    }
}
