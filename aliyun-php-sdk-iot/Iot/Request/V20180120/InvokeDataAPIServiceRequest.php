<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InvokeDataAPIService
 *
 * @method string getApiSrn()
 * @method array getParams()
 */
class InvokeDataAPIServiceRequest extends \RpcAcsRequest
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
            'InvokeDataAPIService',
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

    /**
     * @param array $param
     *
     * @return $this
     */
    public function setParams(array $param)
    {
        $this->requestParameters['Params'] = $param;
        foreach ($param as $depth1 => $depth1Value) {
            $this->queryParameters['Param.' . ($depth1 + 1) . '.ListParamType'] = $depth1Value['ListParamType'];
            foreach ($depth1Value['ListParamValue'] as $i => $iValue) {
                $this->queryParameters['Param.' . ($depth1 + 1) . '.ListParamValue.' . ($i + 1)] = $iValue;
            }
            $this->queryParameters['Param.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
            $this->queryParameters['Param.' . ($depth1 + 1) . '.ParamName'] = $depth1Value['ParamName'];
        }

        return $this;
    }
}
