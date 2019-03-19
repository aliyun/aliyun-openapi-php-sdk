<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UserDataDelete
 *
 * @method string getIid()
 * @method string getBid()
 */
class UserDataDeleteRequest extends \RpcAcsRequest
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
            'UserDataDelete',
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
}
