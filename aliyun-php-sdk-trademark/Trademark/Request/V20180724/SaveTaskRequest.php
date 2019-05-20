<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveTask
 *
 * @method string getBizType()
 * @method string getRequest()
 */
class SaveTaskRequest extends \RpcAcsRequest
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
            'SaveTask',
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

    /**
     * @param string $request
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->requestParameters['Request'] = $request;
        $this->queryParameters['Request'] = $request;

        return $this;
    }
}
