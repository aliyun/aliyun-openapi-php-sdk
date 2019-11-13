<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryEvaluateList
 *
 * @method string getEndSearchTime()
 * @method string getOutBizId()
 * @method string getSortType()
 * @method string getType()
 * @method string getPageNum()
 * @method string getPageSize()
 * @method string getEndAmount()
 * @method string getBillCycle()
 * @method array getBizTypeLists()
 * @method string getOwnerId()
 * @method string getStartSearchTime()
 * @method string getEndBizTime()
 * @method string getStartAmount()
 * @method string getStartBizTime()
 */
class QueryEvaluateListRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'QueryEvaluateList',
            'BssOpenApi'
        );
    }

    /**
     * @param string $endSearchTime
     *
     * @return $this
     */
    public function setEndSearchTime($endSearchTime)
    {
        $this->requestParameters['EndSearchTime'] = $endSearchTime;
        $this->queryParameters['EndSearchTime'] = $endSearchTime;

        return $this;
    }

    /**
     * @param string $outBizId
     *
     * @return $this
     */
    public function setOutBizId($outBizId)
    {
        $this->requestParameters['OutBizId'] = $outBizId;
        $this->queryParameters['OutBizId'] = $outBizId;

        return $this;
    }

    /**
     * @param string $sortType
     *
     * @return $this
     */
    public function setSortType($sortType)
    {
        $this->requestParameters['SortType'] = $sortType;
        $this->queryParameters['SortType'] = $sortType;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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
     * @param string $endAmount
     *
     * @return $this
     */
    public function setEndAmount($endAmount)
    {
        $this->requestParameters['EndAmount'] = $endAmount;
        $this->queryParameters['EndAmount'] = $endAmount;

        return $this;
    }

    /**
     * @param string $billCycle
     *
     * @return $this
     */
    public function setBillCycle($billCycle)
    {
        $this->requestParameters['BillCycle'] = $billCycle;
        $this->queryParameters['BillCycle'] = $billCycle;

        return $this;
    }

    /**
     * @param array $bizTypeList
     *
     * @return $this
     */
	public function setBizTypeLists(array $bizTypeList)
	{
	    $this->requestParameters['BizTypeLists'] = $bizTypeList;
		foreach ($bizTypeList as $i => $iValue) {
			$this->queryParameters['BizTypeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $startSearchTime
     *
     * @return $this
     */
    public function setStartSearchTime($startSearchTime)
    {
        $this->requestParameters['StartSearchTime'] = $startSearchTime;
        $this->queryParameters['StartSearchTime'] = $startSearchTime;

        return $this;
    }

    /**
     * @param string $endBizTime
     *
     * @return $this
     */
    public function setEndBizTime($endBizTime)
    {
        $this->requestParameters['EndBizTime'] = $endBizTime;
        $this->queryParameters['EndBizTime'] = $endBizTime;

        return $this;
    }

    /**
     * @param string $startAmount
     *
     * @return $this
     */
    public function setStartAmount($startAmount)
    {
        $this->requestParameters['StartAmount'] = $startAmount;
        $this->queryParameters['StartAmount'] = $startAmount;

        return $this;
    }

    /**
     * @param string $startBizTime
     *
     * @return $this
     */
    public function setStartBizTime($startBizTime)
    {
        $this->requestParameters['StartBizTime'] = $startBizTime;
        $this->queryParameters['StartBizTime'] = $startBizTime;

        return $this;
    }
}
