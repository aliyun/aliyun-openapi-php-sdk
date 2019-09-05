<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RemoveIpControlPolicyItem
 *
 * @method string getPolicyItemIds()
 * @method string getIpControlId()
 * @method string getSecurityToken()
 */
class RemoveIpControlPolicyItemRequest extends \RpcAcsRequest
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
            'RemoveIpControlPolicyItem',
            'apigateway'
        );
    }

    /**
     * @param string $policyItemIds
     *
     * @return $this
     */
    public function setPolicyItemIds($policyItemIds)
    {
        $this->requestParameters['PolicyItemIds'] = $policyItemIds;
        $this->queryParameters['PolicyItemIds'] = $policyItemIds;

        return $this;
    }

    /**
     * @param string $ipControlId
     *
     * @return $this
     */
    public function setIpControlId($ipControlId)
    {
        $this->requestParameters['IpControlId'] = $ipControlId;
        $this->queryParameters['IpControlId'] = $ipControlId;

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
}
