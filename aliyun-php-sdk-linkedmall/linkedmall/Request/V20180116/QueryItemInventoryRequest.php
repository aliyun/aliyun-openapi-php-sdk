<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryItemInventory
 *
 * @method string getDivisionCode()
 * @method string getIp()
 * @method string getBizId()
 * @method array getItemLists()
 */
class QueryItemInventoryRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'QueryItemInventory',
            'linkedmall'
        );
    }

    /**
     * @param string $divisionCode
     *
     * @return $this
     */
    public function setDivisionCode($divisionCode)
    {
        $this->requestParameters['DivisionCode'] = $divisionCode;
        $this->queryParameters['DivisionCode'] = $divisionCode;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->requestParameters['Ip'] = $ip;
        $this->queryParameters['Ip'] = $ip;

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
     * @param array $itemList
     *
     * @return $this
     */
    public function setItemLists(array $itemList)
    {
        $this->requestParameters['ItemLists'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->queryParameters['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            foreach ($depth1Value['SkuIdList'] as $i => $iValue) {
                $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuIdList.' . ($i + 1)] = $iValue;
            }
        }

        return $this;
    }
}
