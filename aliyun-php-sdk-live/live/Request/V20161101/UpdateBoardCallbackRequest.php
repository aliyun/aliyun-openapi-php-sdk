<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateBoardCallback
 *
 * @method string getAuthKey()
 * @method string getCallbackEnable()
 * @method string getCallbackEvents()
 * @method string getOwnerId()
 * @method string getCallbackUri()
 * @method string getAppId()
 * @method string getAuthSwitch()
 */
class UpdateBoardCallbackRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'UpdateBoardCallback',
            'live'
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
     * @param string $callbackEnable
     *
     * @return $this
     */
    public function setCallbackEnable($callbackEnable)
    {
        $this->requestParameters['CallbackEnable'] = $callbackEnable;
        $this->queryParameters['CallbackEnable'] = $callbackEnable;

        return $this;
    }

    /**
     * @param string $callbackEvents
     *
     * @return $this
     */
    public function setCallbackEvents($callbackEvents)
    {
        $this->requestParameters['CallbackEvents'] = $callbackEvents;
        $this->queryParameters['CallbackEvents'] = $callbackEvents;

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
     * @param string $callbackUri
     *
     * @return $this
     */
    public function setCallbackUri($callbackUri)
    {
        $this->requestParameters['CallbackUri'] = $callbackUri;
        $this->queryParameters['CallbackUri'] = $callbackUri;

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
}
