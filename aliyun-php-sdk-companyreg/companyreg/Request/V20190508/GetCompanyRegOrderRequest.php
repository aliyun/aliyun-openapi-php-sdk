<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCompanyRegOrder
 *
 * @method string getActionTypes()
 * @method string getBizCode()
 * @method string getBizId()
 * @method string getMaxOperationSize()
 * @method string getBizSubCode()
 */
class GetCompanyRegOrderRequest extends \RpcAcsRequest
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
            'companyreg',
            '2019-05-08',
            'GetCompanyRegOrder',
            'companyreg'
        );
    }

    /**
     * @param string $actionTypes
     *
     * @return $this
     */
    public function setActionTypes($actionTypes)
    {
        $this->requestParameters['ActionTypes'] = $actionTypes;
        $this->queryParameters['ActionTypes'] = $actionTypes;

        return $this;
    }

    /**
     * @param string $bizCode
     *
     * @return $this
     */
    public function setBizCode($bizCode)
    {
        $this->requestParameters['BizCode'] = $bizCode;
        $this->queryParameters['BizCode'] = $bizCode;

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
     * @param string $maxOperationSize
     *
     * @return $this
     */
    public function setMaxOperationSize($maxOperationSize)
    {
        $this->requestParameters['MaxOperationSize'] = $maxOperationSize;
        $this->queryParameters['MaxOperationSize'] = $maxOperationSize;

        return $this;
    }

    /**
     * @param string $bizSubCode
     *
     * @return $this
     */
    public function setBizSubCode($bizSubCode)
    {
        $this->requestParameters['BizSubCode'] = $bizSubCode;
        $this->queryParameters['BizSubCode'] = $bizSubCode;

        return $this;
    }
}
