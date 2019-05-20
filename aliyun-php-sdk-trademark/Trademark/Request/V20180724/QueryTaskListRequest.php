<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTaskList
 *
 * @method string getBizType()
 */
class QueryTaskListRequest extends \RpcAcsRequest
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
            'QueryTaskList',
            'trademark'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

        return $this;
    }
}
