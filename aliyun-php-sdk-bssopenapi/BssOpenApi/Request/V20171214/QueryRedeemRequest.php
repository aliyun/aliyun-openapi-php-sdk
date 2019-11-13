<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryRedeem
 *
 * @method string getExpiryTimeEnd()
 * @method string getExpiryTimeStart()
 * @method string getPageNum()
 * @method string getEffectiveOrNot()
 * @method string getPageSize()
 */
class QueryRedeemRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'BssOpenApi',
            '2017-12-14',
            'QueryRedeem',
            'BssOpenApi'
        );
    }

    /**
     * @param string $expiryTimeEnd
     *
     * @return $this
     */
    public function setExpiryTimeEnd($expiryTimeEnd)
    {
        $this->requestParameters['ExpiryTimeEnd'] = $expiryTimeEnd;
        $this->queryParameters['ExpiryTimeEnd'] = $expiryTimeEnd;

        return $this;
    }

    /**
     * @param string $expiryTimeStart
     *
     * @return $this
     */
    public function setExpiryTimeStart($expiryTimeStart)
    {
        $this->requestParameters['ExpiryTimeStart'] = $expiryTimeStart;
        $this->queryParameters['ExpiryTimeStart'] = $expiryTimeStart;

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
     * @param string $effectiveOrNot
     *
     * @return $this
     */
    public function setEffectiveOrNot($effectiveOrNot)
    {
        $this->requestParameters['EffectiveOrNot'] = $effectiveOrNot;
        $this->queryParameters['EffectiveOrNot'] = $effectiveOrNot;

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
}
