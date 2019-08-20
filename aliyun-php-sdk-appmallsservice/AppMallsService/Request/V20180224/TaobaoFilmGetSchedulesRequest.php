<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmGetSchedules
 *
 * @method string getCinemaId()
 * @method string getParamsJson()
 */
class TaobaoFilmGetSchedulesRequest extends \RpcAcsRequest
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
            'TaobaoFilmGetSchedules'
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
