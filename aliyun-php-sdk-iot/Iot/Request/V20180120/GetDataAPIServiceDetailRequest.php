<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetDataAPIServiceDetail
 *
 * @method string getApiSrn()
 */
class GetDataAPIServiceDetailRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'GetDataAPIServiceDetail',
            'iot'
        );
    }

    /**
     * @param string $apiSrn
     *
     * @return $this
     */
    public function setApiSrn($apiSrn)
    {
        $this->requestParameters['ApiSrn'] = $apiSrn;
        $this->queryParameters['ApiSrn'] = $apiSrn;

        return $this;
    }
}
