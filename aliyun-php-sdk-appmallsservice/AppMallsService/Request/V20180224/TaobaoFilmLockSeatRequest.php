<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmLockSeat
 *
 * @method string getScheduleId()
 * @method string getSeatIds()
 * @method string getSeatNames()
 * @method string getMobile()
 * @method string getExtUserId()
 * @method string getParamsJson()
 */
class TaobaoFilmLockSeatRequest extends \RpcAcsRequest
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
            'AppMallsService',
            '2018-02-24',
            'TaobaoFilmLockSeat'
        );
    }

    /**
     * @param string $scheduleId
     *
     * @return $this
     */
    public function setScheduleId($scheduleId)
    {
        $this->requestParameters['ScheduleId'] = $scheduleId;
        $this->queryParameters['ScheduleId'] = $scheduleId;

        return $this;
    }

    /**
     * @param string $seatIds
     *
     * @return $this
     */
    public function setSeatIds($seatIds)
    {
        $this->requestParameters['SeatIds'] = $seatIds;
        $this->queryParameters['SeatIds'] = $seatIds;

        return $this;
    }

    /**
     * @param string $seatNames
     *
     * @return $this
     */
    public function setSeatNames($seatNames)
    {
        $this->requestParameters['SeatNames'] = $seatNames;
        $this->queryParameters['SeatNames'] = $seatNames;

        return $this;
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->requestParameters['Mobile'] = $mobile;
        $this->queryParameters['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @param string $extUserId
     *
     * @return $this
     */
    public function setExtUserId($extUserId)
    {
        $this->requestParameters['ExtUserId'] = $extUserId;
        $this->queryParameters['ExtUserId'] = $extUserId;

        return $this;
    }

    /**
     * @param string $paramsJson
     *
     * @return $this
     */
    public function setParamsJson($paramsJson)
    {
        $this->requestParameters['ParamsJson'] = $paramsJson;
        $this->queryParameters['ParamsJson'] = $paramsJson;

        return $this;
    }
}
