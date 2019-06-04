<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SendRoomUserNotification
 *
 * @method string getData()
 * @method string getToAppUid()
 * @method string getAppUid()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getRoomId()
 * @method string getAppId()
 */
class SendRoomUserNotificationRequest extends \RpcAcsRequest
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
            'SendRoomUserNotification',
            'live'
        );
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->requestParameters['Data'] = $data;
        $this->queryParameters['Data'] = $data;

        return $this;
    }

    /**
     * @param string $toAppUid
     *
     * @return $this
     */
    public function setToAppUid($toAppUid)
    {
        $this->requestParameters['ToAppUid'] = $toAppUid;
        $this->queryParameters['ToAppUid'] = $toAppUid;

        return $this;
    }

    /**
     * @param string $appUid
     *
     * @return $this
     */
    public function setAppUid($appUid)
    {
        $this->requestParameters['AppUid'] = $appUid;
        $this->queryParameters['AppUid'] = $appUid;

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
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $roomId
     *
     * @return $this
     */
    public function setRoomId($roomId)
    {
        $this->requestParameters['RoomId'] = $roomId;
        $this->queryParameters['RoomId'] = $roomId;

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
}
