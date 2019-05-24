<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryMovieSchedules
 *
 * @method string getCinemaId()
 * @method string getExtJson()
 * @method string getBizId()
 */
class QueryMovieSchedulesRequest extends \RpcAcsRequest
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
            'QueryMovieSchedules',
            'linkedmall'
        );
    }

    /**
     * @param string $cinemaId
     *
     * @return $this
     */
    public function setCinemaId($cinemaId)
    {
        $this->requestParameters['CinemaId'] = $cinemaId;
        $this->queryParameters['CinemaId'] = $cinemaId;

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
}
