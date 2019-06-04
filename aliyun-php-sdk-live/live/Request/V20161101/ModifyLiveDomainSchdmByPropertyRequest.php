<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyLiveDomainSchdmByProperty
 *
 * @method string getProperty()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class ModifyLiveDomainSchdmByPropertyRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'ModifyLiveDomainSchdmByProperty',
            'live'
        );
    }

    /**
     * @param string $property
     *
     * @return $this
     */
    public function setProperty($property)
    {
        $this->requestParameters['Property'] = $property;
        $this->queryParameters['Property'] = $property;

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
