<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateIntranetDomain
 *
 * @method string getGroupId()
 * @method string getDeleteInternetDomain()
 * @method string getSecurityToken()
 */
class CreateIntranetDomainRequest extends \RpcAcsRequest
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
            'CreateIntranetDomain',
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
     * @param string $deleteInternetDomain
     *
     * @return $this
     */
    public function setDeleteInternetDomain($deleteInternetDomain)
    {
        $this->requestParameters['DeleteInternetDomain'] = $deleteInternetDomain;
        $this->queryParameters['DeleteInternetDomain'] = $deleteInternetDomain;

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
