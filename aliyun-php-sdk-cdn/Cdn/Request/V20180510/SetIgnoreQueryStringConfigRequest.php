<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetIgnoreQueryStringConfig
 *
 * @method string getEnable()
 * @method string getKeepOssArgs()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getHashKeyArgs()
 * @method string getConfigId()
 */
class SetIgnoreQueryStringConfigRequest extends \RpcAcsRequest
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
            'SetIgnoreQueryStringConfig'
        );
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
     * @param string $keepOssArgs
     *
     * @return $this
     */
    public function setKeepOssArgs($keepOssArgs)
    {
        $this->requestParameters['KeepOssArgs'] = $keepOssArgs;
        $this->queryParameters['KeepOssArgs'] = $keepOssArgs;

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
     * @param string $hashKeyArgs
     *
     * @return $this
     */
    public function setHashKeyArgs($hashKeyArgs)
    {
        $this->requestParameters['HashKeyArgs'] = $hashKeyArgs;
        $this->queryParameters['HashKeyArgs'] = $hashKeyArgs;

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
