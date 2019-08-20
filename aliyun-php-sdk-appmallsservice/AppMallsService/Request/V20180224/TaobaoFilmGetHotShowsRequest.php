<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmGetHotShows
 *
 * @method string getCityCode()
 * @method string getParamsJson()
 */
class TaobaoFilmGetHotShowsRequest extends \RpcAcsRequest
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
            'TaobaoFilmGetHotShows'
        );
    }

    /**
     * @param string $cityCode
     *
     * @return $this
     */
    public function setCityCode($cityCode)
    {
        $this->requestParameters['CityCode'] = $cityCode;
        $this->queryParameters['CityCode'] = $cityCode;

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
