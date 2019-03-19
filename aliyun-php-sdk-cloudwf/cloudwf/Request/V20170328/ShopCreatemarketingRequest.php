<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ShopCreatemarketing
 *
 * @method string getEtime()
 * @method string getName()
 * @method string getStime()
 * @method string getSid()
 */
class ShopCreatemarketingRequest extends \RpcAcsRequest
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
            'ShopCreatemarketing',
            'cloudwf'
        );
    }

    /**
     * @param string $etime
     *
     * @return $this
     */
    public function setEtime($etime)
    {
        $this->requestParameters['Etime'] = $etime;
        $this->queryParameters['Etime'] = $etime;

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
     * @param string $stime
     *
     * @return $this
     */
    public function setStime($stime)
    {
        $this->requestParameters['Stime'] = $stime;
        $this->queryParameters['Stime'] = $stime;

        return $this;
    }

    /**
     * @param string $sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->requestParameters['Sid'] = $sid;
        $this->queryParameters['Sid'] = $sid;

        return $this;
    }
}
