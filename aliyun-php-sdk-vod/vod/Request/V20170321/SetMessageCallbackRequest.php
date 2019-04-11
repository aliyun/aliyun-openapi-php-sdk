<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetMessageCallback
 *
 * @method string getAuthKey()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEventTypeList()
 * @method string getMnsQueueName()
 * @method string getResourceRealOwnerId()
 * @method string getOwnerId()
 * @method string getCallbackType()
 * @method string getCallbackSwitch()
 * @method string getMnsEndpoint()
 * @method string getAppId()
 * @method string getAuthSwitch()
 * @method string getCallbackURL()
 */
class SetMessageCallbackRequest extends \RpcAcsRequest
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
            'SetMessageCallback',
            'vod'
        );
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        $this->requestParameters['AuthKey'] = $authKey;
        $this->queryParameters['AuthKey'] = $authKey;

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $eventTypeList
     *
     * @return $this
     */
    public function setEventTypeList($eventTypeList)
    {
        $this->requestParameters['EventTypeList'] = $eventTypeList;
        $this->queryParameters['EventTypeList'] = $eventTypeList;

        return $this;
    }

    /**
     * @param string $mnsQueueName
     *
     * @return $this
     */
    public function setMnsQueueName($mnsQueueName)
    {
        $this->requestParameters['MnsQueueName'] = $mnsQueueName;
        $this->queryParameters['MnsQueueName'] = $mnsQueueName;

        return $this;
    }

    /**
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function setResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->requestParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->queryParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;

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
     * @param string $callbackType
     *
     * @return $this
     */
    public function setCallbackType($callbackType)
    {
        $this->requestParameters['CallbackType'] = $callbackType;
        $this->queryParameters['CallbackType'] = $callbackType;

        return $this;
    }

    /**
     * @param string $callbackSwitch
     *
     * @return $this
     */
    public function setCallbackSwitch($callbackSwitch)
    {
        $this->requestParameters['CallbackSwitch'] = $callbackSwitch;
        $this->queryParameters['CallbackSwitch'] = $callbackSwitch;

        return $this;
    }

    /**
     * @param string $mnsEndpoint
     *
     * @return $this
     */
    public function setMnsEndpoint($mnsEndpoint)
    {
        $this->requestParameters['MnsEndpoint'] = $mnsEndpoint;
        $this->queryParameters['MnsEndpoint'] = $mnsEndpoint;

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
     * @param string $authSwitch
     *
     * @return $this
     */
    public function setAuthSwitch($authSwitch)
    {
        $this->requestParameters['AuthSwitch'] = $authSwitch;
        $this->queryParameters['AuthSwitch'] = $authSwitch;

        return $this;
    }

    /**
     * @param string $callbackURL
     *
     * @return $this
     */
    public function setCallbackURL($callbackURL)
    {
        $this->requestParameters['CallbackURL'] = $callbackURL;
        $this->queryParameters['CallbackURL'] = $callbackURL;

        return $this;
    }
}
