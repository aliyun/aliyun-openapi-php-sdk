<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmGetCinemas
 *
 * @method string getPageIndex()
 * @method string getParamsJson()
 */
class TaobaoFilmGetCinemasRequest extends \RpcAcsRequest
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
            'TaobaoFilmGetCinemas'
        );
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

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
