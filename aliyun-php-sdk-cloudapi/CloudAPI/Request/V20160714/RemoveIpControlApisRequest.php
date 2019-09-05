<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RemoveIpControlApis
 *
 * @method string getStageName()
 * @method string getGroupId()
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getApiIds()
 */
class RemoveIpControlApisRequest extends \RpcAcsRequest
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
            'RemoveIpControlApis',
            'apigateway'
        );
    }

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function setStageName($stageName)
    {
        $this->requestParameters['StageName'] = $stageName;
        $this->queryParameters['StageName'] = $stageName;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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

    /**
     * @param string $apiIds
     *
     * @return $this
     */
    public function setApiIds($apiIds)
    {
        $this->requestParameters['ApiIds'] = $apiIds;
        $this->queryParameters['ApiIds'] = $apiIds;

        return $this;
    }
}
