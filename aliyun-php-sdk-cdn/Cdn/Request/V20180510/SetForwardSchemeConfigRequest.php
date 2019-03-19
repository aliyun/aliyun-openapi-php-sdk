<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetForwardSchemeConfig
 *
 * @method string getSchemeOriginPort()
 * @method string getEnable()
 * @method string getSchemeOrigin()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 */
class SetForwardSchemeConfigRequest extends \RpcAcsRequest
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
            'SetForwardSchemeConfig'
        );
    }

    /**
     * @param string $schemeOriginPort
     *
     * @return $this
     */
    public function setSchemeOriginPort($schemeOriginPort)
    {
        $this->requestParameters['SchemeOriginPort'] = $schemeOriginPort;
        $this->queryParameters['SchemeOriginPort'] = $schemeOriginPort;

        return $this;
    }

    /**
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->requestParameters['Enable'] = $enable;
        $this->queryParameters['Enable'] = $enable;

        return $this;
    }

    /**
     * @param string $schemeOrigin
     *
     * @return $this
     */
    public function setSchemeOrigin($schemeOrigin)
    {
        $this->requestParameters['SchemeOrigin'] = $schemeOrigin;
        $this->queryParameters['SchemeOrigin'] = $schemeOrigin;

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
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        $this->requestParameters['ConfigId'] = $configId;
        $this->queryParameters['ConfigId'] = $configId;

        return $this;
    }
}
