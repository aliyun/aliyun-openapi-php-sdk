<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ReserveMovieSeat
 *
 * @method string getSeatIds()
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getMobile()
 * @method string getSeatNames()
 * @method string getScheduleId()
 */
class ReserveMovieSeatRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'ReserveMovieSeat',
            'linkedmall'
        );
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
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        $this->requestParameters['BizUid'] = $bizUid;
        $this->queryParameters['BizUid'] = $bizUid;

        return $this;
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        $this->requestParameters['ExtJson'] = $extJson;
        $this->queryParameters['ExtJson'] = $extJson;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

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
}
