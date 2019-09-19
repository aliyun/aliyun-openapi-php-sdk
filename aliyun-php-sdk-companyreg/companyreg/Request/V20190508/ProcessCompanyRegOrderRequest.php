<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ProcessCompanyRegOrder
 *
 * @method string getActionType()
 * @method string getActionRequestId()
 * @method string getOperatorType()
 * @method string getActionInfo()
 * @method string getBizCode()
 * @method string getBizId()
 * @method string getBizSubCode()
 */
class ProcessCompanyRegOrderRequest extends \RpcAcsRequest
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
            'ProcessCompanyRegOrder',
            'companyreg'
        );
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->requestParameters['ActionType'] = $actionType;
        $this->queryParameters['ActionType'] = $actionType;

        return $this;
    }

    /**
     * @param string $actionRequestId
     *
     * @return $this
     */
    public function setActionRequestId($actionRequestId)
    {
        $this->requestParameters['ActionRequestId'] = $actionRequestId;
        $this->queryParameters['ActionRequestId'] = $actionRequestId;

        return $this;
    }

    /**
     * @param string $operatorType
     *
     * @return $this
     */
    public function setOperatorType($operatorType)
    {
        $this->requestParameters['OperatorType'] = $operatorType;
        $this->queryParameters['OperatorType'] = $operatorType;

        return $this;
    }

    /**
     * @param string $actionInfo
     *
     * @return $this
     */
    public function setActionInfo($actionInfo)
    {
        $this->requestParameters['ActionInfo'] = $actionInfo;
        $this->queryParameters['ActionInfo'] = $actionInfo;

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
