<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListCompanyRegOrders
 *
 * @method string getPageNum()
 * @method string getBizCode()
 * @method string getBizStatus()
 * @method string getCompanyName()
 * @method string getPageSize()
 * @method string getAliyunOrderId()
 * @method string getBizSubCode()
 */
class ListCompanyRegOrdersRequest extends \RpcAcsRequest
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
            'ListCompanyRegOrders',
            'companyreg'
        );
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

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
     * @param string $bizStatus
     *
     * @return $this
     */
    public function setBizStatus($bizStatus)
    {
        $this->requestParameters['BizStatus'] = $bizStatus;
        $this->queryParameters['BizStatus'] = $bizStatus;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->requestParameters['CompanyName'] = $companyName;
        $this->queryParameters['CompanyName'] = $companyName;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $aliyunOrderId
     *
     * @return $this
     */
    public function setAliyunOrderId($aliyunOrderId)
    {
        $this->requestParameters['AliyunOrderId'] = $aliyunOrderId;
        $this->queryParameters['AliyunOrderId'] = $aliyunOrderId;

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
