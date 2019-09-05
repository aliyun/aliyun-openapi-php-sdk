<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetAppsAuthorities
 *
 * @method string getAuthVaildTime()
 * @method string getStageName()
 * @method string getGroupId()
 * @method string getDescription()
 * @method string getAuthValidTime()
 * @method string getAppIds()
 * @method string getSecurityToken()
 * @method string getApiId()
 */
class SetAppsAuthoritiesRequest extends \RpcAcsRequest
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
            'SetAppsAuthorities',
            'apigateway'
        );
    }

    /**
     * @param string $authVaildTime
     *
     * @return $this
     */
    public function setAuthVaildTime($authVaildTime)
    {
        $this->requestParameters['AuthVaildTime'] = $authVaildTime;
        $this->queryParameters['AuthVaildTime'] = $authVaildTime;

        return $this;
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $authValidTime
     *
     * @return $this
     */
    public function setAuthValidTime($authValidTime)
    {
        $this->requestParameters['AuthValidTime'] = $authValidTime;
        $this->queryParameters['AuthValidTime'] = $authValidTime;

        return $this;
    }

    /**
     * @param string $appIds
     *
     * @return $this
     */
    public function setAppIds($appIds)
    {
        $this->requestParameters['AppIds'] = $appIds;
        $this->queryParameters['AppIds'] = $appIds;

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
