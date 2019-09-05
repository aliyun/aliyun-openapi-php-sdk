<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeActionData
 *
 * @method string getTsEnd()
 * @method string getStoreId()
 * @method string getPageLimit()
 * @method string getPageNo()
 * @method string getTsStart()
 */
class DescribeActionDataRequest extends \RpcAcsRequest
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
            'cusanalytic_sc_online',
            '2019-05-24',
            'DescribeActionData'
        );
    }

    /**
     * @param string $tsEnd
     *
     * @return $this
     */
    public function setTsEnd($tsEnd)
    {
        $this->requestParameters['TsEnd'] = $tsEnd;
        $this->queryParameters['TsEnd'] = $tsEnd;

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->requestParameters['StoreId'] = $storeId;
        $this->queryParameters['StoreId'] = $storeId;

        return $this;
    }

    /**
     * @param string $pageLimit
     *
     * @return $this
     */
    public function setPageLimit($pageLimit)
    {
        $this->requestParameters['PageLimit'] = $pageLimit;
        $this->queryParameters['PageLimit'] = $pageLimit;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->requestParameters['PageNo'] = $pageNo;
        $this->queryParameters['PageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $tsStart
     *
     * @return $this
     */
    public function setTsStart($tsStart)
    {
        $this->requestParameters['TsStart'] = $tsStart;
        $this->queryParameters['TsStart'] = $tsStart;

        return $this;
    }
}
