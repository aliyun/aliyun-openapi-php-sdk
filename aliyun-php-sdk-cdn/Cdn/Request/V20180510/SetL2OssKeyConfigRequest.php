<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetL2OssKeyConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 * @method string getPrivateOssAuth()
 */
class SetL2OssKeyConfigRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2018-05-10',
            'SetL2OssKeyConfig'
        );
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

    /**
     * @param string $privateOssAuth
     *
     * @return $this
     */
    public function setPrivateOssAuth($privateOssAuth)
    {
        $this->requestParameters['PrivateOssAuth'] = $privateOssAuth;
        $this->queryParameters['PrivateOssAuth'] = $privateOssAuth;

        return $this;
    }
}
