<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ShopSetredress
 *
 * @method string getWorkday()
 * @method string getFilterclose()
 * @method string getMinstoptime()
 * @method string getHoliday()
 * @method string getHnum()
 * @method string getSid()
 * @method string getClerk()
 * @method string getFilterstate()
 * @method string getWnum()
 * @method string getState()
 * @method string getCrowdfixed()
 * @method string getMaxstoptime()
 */
class ShopSetredressRequest extends \RpcAcsRequest
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
            'ShopSetredress',
            'cloudwf'
        );
    }

    /**
     * @param string $workday
     *
     * @return $this
     */
    public function setWorkday($workday)
    {
        $this->requestParameters['Workday'] = $workday;
        $this->queryParameters['Workday'] = $workday;

        return $this;
    }

    /**
     * @param string $filterclose
     *
     * @return $this
     */
    public function setFilterclose($filterclose)
    {
        $this->requestParameters['Filterclose'] = $filterclose;
        $this->queryParameters['Filterclose'] = $filterclose;

        return $this;
    }

    /**
     * @param string $minstoptime
     *
     * @return $this
     */
    public function setMinstoptime($minstoptime)
    {
        $this->requestParameters['Minstoptime'] = $minstoptime;
        $this->queryParameters['Minstoptime'] = $minstoptime;

        return $this;
    }

    /**
     * @param string $holiday
     *
     * @return $this
     */
    public function setHoliday($holiday)
    {
        $this->requestParameters['Holiday'] = $holiday;
        $this->queryParameters['Holiday'] = $holiday;

        return $this;
    }

    /**
     * @param string $hnum
     *
     * @return $this
     */
    public function setHnum($hnum)
    {
        $this->requestParameters['Hnum'] = $hnum;
        $this->queryParameters['Hnum'] = $hnum;

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

    /**
     * @param string $clerk
     *
     * @return $this
     */
    public function setClerk($clerk)
    {
        $this->requestParameters['Clerk'] = $clerk;
        $this->queryParameters['Clerk'] = $clerk;

        return $this;
    }

    /**
     * @param string $filterstate
     *
     * @return $this
     */
    public function setFilterstate($filterstate)
    {
        $this->requestParameters['Filterstate'] = $filterstate;
        $this->queryParameters['Filterstate'] = $filterstate;

        return $this;
    }

    /**
     * @param string $wnum
     *
     * @return $this
     */
    public function setWnum($wnum)
    {
        $this->requestParameters['Wnum'] = $wnum;
        $this->queryParameters['Wnum'] = $wnum;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

        return $this;
    }

    /**
     * @param string $crowdfixed
     *
     * @return $this
     */
    public function setCrowdfixed($crowdfixed)
    {
        $this->requestParameters['Crowdfixed'] = $crowdfixed;
        $this->queryParameters['Crowdfixed'] = $crowdfixed;

        return $this;
    }

    /**
     * @param string $maxstoptime
     *
     * @return $this
     */
    public function setMaxstoptime($maxstoptime)
    {
        $this->requestParameters['Maxstoptime'] = $maxstoptime;
        $this->queryParameters['Maxstoptime'] = $maxstoptime;

        return $this;
    }
}
