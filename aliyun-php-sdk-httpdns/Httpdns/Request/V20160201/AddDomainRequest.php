<?php

namespace Httpdns\Request\V20160201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddDomain
 *
 * @method string getAccountId()
 * @method string getDomainName()
 */
class AddDomainRequest extends \RpcAcsRequest
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
            'Httpdns',
            '2016-02-01',
            'AddDomain',
            'httpdns'
        );
    }

    /**
     * @param string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->requestParameters['AccountId'] = $accountId;
        $this->queryParameters['AccountId'] = $accountId;

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
}
