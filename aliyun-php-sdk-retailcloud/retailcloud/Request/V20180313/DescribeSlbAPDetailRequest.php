<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSlbAPDetail
 *
 * @method string getSlbAPId()
 */
class DescribeSlbAPDetailRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'DescribeSlbAPDetail',
            'retailcloud'
        );
    }

    /**
     * @param string $slbAPId
     *
     * @return $this
     */
    public function setSlbAPId($slbAPId)
    {
        $this->requestParameters['SlbAPId'] = $slbAPId;
        $this->queryParameters['SlbAPId'] = $slbAPId;

        return $this;
    }
}
