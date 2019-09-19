<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListCompanyRegConsultations
 *
 * @method string getEndGmtCreate()
 * @method string getCity()
 * @method string getPageNum()
 * @method string getBizCode()
 * @method string getPageSize()
 * @method string getBizId()
 * @method string getStartGmtCreate()
 */
class ListCompanyRegConsultationsRequest extends \RpcAcsRequest
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
            'ListCompanyRegConsultations',
            'companyreg'
        );
    }

    /**
     * @param string $endGmtCreate
     *
     * @return $this
     */
    public function setEndGmtCreate($endGmtCreate)
    {
        $this->requestParameters['EndGmtCreate'] = $endGmtCreate;
        $this->queryParameters['EndGmtCreate'] = $endGmtCreate;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

        return $this;
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
     * @param string $startGmtCreate
     *
     * @return $this
     */
    public function setStartGmtCreate($startGmtCreate)
    {
        $this->requestParameters['StartGmtCreate'] = $startGmtCreate;
        $this->queryParameters['StartGmtCreate'] = $startGmtCreate;

        return $this;
    }
}
