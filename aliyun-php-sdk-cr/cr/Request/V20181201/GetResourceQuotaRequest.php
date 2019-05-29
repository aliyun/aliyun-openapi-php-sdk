<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetResourceQuota
 *
 * @method string getScopeId()
 * @method string getResourceName()
 */
class GetResourceQuotaRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'GetResourceQuota',
            'cr'
        );
    }

    /**
     * @param string $scopeId
     *
     * @return $this
     */
    public function setScopeId($scopeId)
    {
        $this->requestParameters['ScopeId'] = $scopeId;
        $this->queryParameters['ScopeId'] = $scopeId;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->requestParameters['ResourceName'] = $resourceName;
        $this->queryParameters['ResourceName'] = $resourceName;

        return $this;
    }
}
