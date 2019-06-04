<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRoomList
 *
 * @method string getStartTime()
 * @method string getAnchorId()
 * @method string getPageNum()
 * @method string getRoomStatus()
 * @method string getPageSize()
 * @method string getOrder()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getRoomId()
 * @method string getAppId()
 */
class DescribeRoomListRequest extends \RpcAcsRequest
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
            'DescribeRoomList',
            'live'
        );
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

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
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $roomStatus
     *
     * @return $this
     */
    public function setRoomStatus($roomStatus)
    {
        $this->requestParameters['RoomStatus'] = $roomStatus;
        $this->queryParameters['RoomStatus'] = $roomStatus;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->requestParameters['Order'] = $order;
        $this->queryParameters['Order'] = $order;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

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
