<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCdnDomainSchdmByProperty
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getProperty()
 */
class ModifyCdnDomainSchdmByPropertyRequest extends \RpcAcsRequest
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
            'ModifyCdnDomainSchdmByProperty'
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
}
