<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeApi
 *
 * @method string getGroupId()
 * @method string getSecurityToken()
 * @method string getApiId()
 */
class DescribeApiRequest extends \RpcAcsRequest
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
            'DescribeApi',
            'apigateway'
        );
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
     * @param string $apiId
     *
     * @return $this
     */
    public function setApiId($apiId)
    {
        $this->requestParameters['ApiId'] = $apiId;
        $this->queryParameters['ApiId'] = $apiId;

        return $this;
    }
}
