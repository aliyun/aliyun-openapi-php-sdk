<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryAccountTransactions
 *
 * @method string getPageNum()
 * @method string getCreateTimeEnd()
 * @method string getRecordID()
 * @method string getPageSize()
 * @method string getTransactionChannelSN()
 * @method string getCreateTimeStart()
 * @method string getTransactionNumber()
 */
class QueryAccountTransactionsRequest extends \RpcAcsRequest
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
            'QueryAccountTransactions',
            'BssOpenApi'
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
     * @param string $createTimeEnd
     *
     * @return $this
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->requestParameters['CreateTimeEnd'] = $createTimeEnd;
        $this->queryParameters['CreateTimeEnd'] = $createTimeEnd;

        return $this;
    }

    /**
     * @param string $recordID
     *
     * @return $this
     */
    public function setRecordID($recordID)
    {
        $this->requestParameters['RecordID'] = $recordID;
        $this->queryParameters['RecordID'] = $recordID;

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
     * @param string $transactionChannelSN
     *
     * @return $this
     */
    public function setTransactionChannelSN($transactionChannelSN)
    {
        $this->requestParameters['TransactionChannelSN'] = $transactionChannelSN;
        $this->queryParameters['TransactionChannelSN'] = $transactionChannelSN;

        return $this;
    }

    /**
     * @param string $createTimeStart
     *
     * @return $this
     */
    public function setCreateTimeStart($createTimeStart)
    {
        $this->requestParameters['CreateTimeStart'] = $createTimeStart;
        $this->queryParameters['CreateTimeStart'] = $createTimeStart;

        return $this;
    }

    /**
     * @param string $transactionNumber
     *
     * @return $this
     */
    public function setTransactionNumber($transactionNumber)
    {
        $this->requestParameters['TransactionNumber'] = $transactionNumber;
        $this->queryParameters['TransactionNumber'] = $transactionNumber;

        return $this;
    }
}
