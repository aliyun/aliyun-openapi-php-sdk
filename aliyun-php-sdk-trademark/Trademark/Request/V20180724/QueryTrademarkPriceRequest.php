<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTrademarkPrice
 *
 * @method string getTmName()
 * @method string getTmIcon()
 * @method string getOrderData()
 * @method string getType()
 * @method string getUserId()
 */
class QueryTrademarkPriceRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'QueryTrademarkPrice',
            'trademark'
        );
    }

    /**
     * @param string $tmName
     *
     * @return $this
     */
    public function setTmName($tmName)
    {
        $this->requestParameters['TmName'] = $tmName;
        $this->queryParameters['TmName'] = $tmName;

        return $this;
    }

    /**
     * @param string $tmIcon
     *
     * @return $this
     */
    public function setTmIcon($tmIcon)
    {
        $this->requestParameters['TmIcon'] = $tmIcon;
        $this->queryParameters['TmIcon'] = $tmIcon;

        return $this;
    }

    /**
     * @param string $orderData
     *
     * @return $this
     */
    public function setOrderData($orderData)
    {
        $this->requestParameters['OrderData'] = $orderData;
        $this->queryParameters['OrderData'] = $orderData;

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
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }
}
