<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRoom
 *
 * @method string getTemplateIds()
 * @method string getAnchorId()
 * @method string getUseAppTranscode()
 * @method string getOwnerId()
 * @method string getRoomId()
 * @method string getAppId()
 */
class CreateRoomRequest extends \RpcAcsRequest
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
            'CreateRoom',
            'live'
        );
    }

    /**
     * @param string $templateIds
     *
     * @return $this
     */
    public function setTemplateIds($templateIds)
    {
        $this->requestParameters['TemplateIds'] = $templateIds;
        $this->queryParameters['TemplateIds'] = $templateIds;

        return $this;
    }

    /**
     * @param string $anchorId
     *
     * @return $this
     */
    public function setAnchorId($anchorId)
    {
        $this->requestParameters['AnchorId'] = $anchorId;
        $this->queryParameters['AnchorId'] = $anchorId;

        return $this;
    }

    /**
     * @param string $useAppTranscode
     *
     * @return $this
     */
    public function setUseAppTranscode($useAppTranscode)
    {
        $this->requestParameters['UseAppTranscode'] = $useAppTranscode;
        $this->queryParameters['UseAppTranscode'] = $useAppTranscode;

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
