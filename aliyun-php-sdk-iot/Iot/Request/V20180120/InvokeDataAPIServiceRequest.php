<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InvokeDataAPIService
 *
 * @method array getParams()
 * @method string getIotInstanceId()
 * @method string getApiSrn()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
     * @param array $param
     *
     * @return $this
     */
	public function setParams(array $param)
	{
	    $this->requestParameters['Params'] = $param;
		foreach ($param as $depth1 => $depth1Value) {
			$this->queryParameters['Param.' . ($depth1 + 1) . '.ParamType'] = $depth1Value['ParamType'];
			foreach ($depth1Value['ListParamValue'] as $i => $iValue) {
				$this->queryParameters['Param.' . ($depth1 + 1) . '.ListParamValue.' . ($i + 1)] = $iValue;
			}
			$this->queryParameters['Param.' . ($depth1 + 1) . '.ListParamType'] = $depth1Value['ListParamType'];
			$this->queryParameters['Param.' . ($depth1 + 1) . '.ParamName'] = $depth1Value['ParamName'];
			$this->queryParameters['Param.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
		}

		return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
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
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
