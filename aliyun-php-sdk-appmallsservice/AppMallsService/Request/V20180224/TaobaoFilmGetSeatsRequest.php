<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmGetSeats
 *
 * @method string getScheduleId()
 * @method string getParamsJson()
 */
class TaobaoFilmGetSeatsRequest extends \RpcAcsRequest
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
            'TaobaoFilmGetSeats'
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
