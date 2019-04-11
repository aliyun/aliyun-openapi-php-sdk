<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AttachAppPolicyToIdentity
 *
 * @method string getIdentityName()
 * @method string getResourceOwnerId()
 * @method string getIdentityType()
 * @method string getResourceOwnerAccount()
 * @method string getAppId()
 * @method string getPolicyNames()
 * @method string getOwnerId()
 */
class AttachAppPolicyToIdentityRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'AttachAppPolicyToIdentity',
            'vod'
        );
    }

    /**
     * @param string $identityName
     *
     * @return $this
     */
    public function setIdentityName($identityName)
    {
        $this->requestParameters['IdentityName'] = $identityName;
        $this->queryParameters['IdentityName'] = $identityName;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $identityType
     *
     * @return $this
     */
    public function setIdentityType($identityType)
    {
        $this->requestParameters['IdentityType'] = $identityType;
        $this->queryParameters['IdentityType'] = $identityType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $policyNames
     *
     * @return $this
     */
    public function setPolicyNames($policyNames)
    {
        $this->requestParameters['PolicyNames'] = $policyNames;
        $this->queryParameters['PolicyNames'] = $policyNames;

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
