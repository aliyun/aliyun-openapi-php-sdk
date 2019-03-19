<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ShopShowList
 *
 * @method string getGid()
 * @method string getAddress()
 * @method string getName()
 * @method string getDirc()
 * @method string getPage()
 * @method string getBid()
 * @method string getPer()
 * @method string getShopStatus()
 */
class ShopShowListRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'ShopShowList',
            'cloudwf'
        );
    }

    /**
     * @param string $gid
     *
     * @return $this
     */
    public function setGid($gid)
    {
        $this->requestParameters['Gid'] = $gid;
        $this->queryParameters['Gid'] = $gid;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->requestParameters['Address'] = $address;
        $this->queryParameters['Address'] = $address;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $dirc
     *
     * @return $this
     */
    public function setDirc($dirc)
    {
        $this->requestParameters['Dirc'] = $dirc;
        $this->queryParameters['Dirc'] = $dirc;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->requestParameters['Page'] = $page;
        $this->queryParameters['Page'] = $page;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }

    /**
     * @param string $per
     *
     * @return $this
     */
    public function setPer($per)
    {
        $this->requestParameters['Per'] = $per;
        $this->queryParameters['Per'] = $per;

        return $this;
    }

    /**
     * @param string $shopStatus
     *
     * @return $this
     */
    public function setShopStatus($shopStatus)
    {
        $this->requestParameters['ShopStatus'] = $shopStatus;
        $this->queryParameters['ShopStatus'] = $shopStatus;

        return $this;
    }
}
