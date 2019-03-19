<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UserDataShowList
 *
 * @method string getIid()
 * @method string getName()
 * @method string getPage()
 * @method string getBid()
 * @method string getPer()
 */
class UserDataShowListRequest extends \RpcAcsRequest
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
            'UserDataShowList',
            'cloudwf'
        );
    }

    /**
     * @param string $iid
     *
     * @return $this
     */
    public function setIid($iid)
    {
        $this->requestParameters['Iid'] = $iid;
        $this->queryParameters['Iid'] = $iid;

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
}
