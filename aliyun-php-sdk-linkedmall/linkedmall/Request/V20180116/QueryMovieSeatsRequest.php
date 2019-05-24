<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryMovieSeats
 *
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getScheduleId()
 */
class QueryMovieSeatsRequest extends \RpcAcsRequest
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
            'QueryMovieSeats',
            'linkedmall'
        );
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
