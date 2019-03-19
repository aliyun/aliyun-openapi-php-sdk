<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDomainGreenManagerConfig
 *
 * @method string getEnable()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class SetDomainGreenManagerConfigRequest extends \RpcAcsRequest
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
            'SetDomainGreenManagerConfig'
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
}
