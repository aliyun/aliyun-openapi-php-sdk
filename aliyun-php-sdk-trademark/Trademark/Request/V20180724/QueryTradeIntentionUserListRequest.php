<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTradeIntentionUserList
 *
 * @method string getEnd()
 * @method string getBegin()
 */
class QueryTradeIntentionUserListRequest extends \RpcAcsRequest
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
            'QueryTradeIntentionUserList',
            'trademark'
        );
    }

    /**
     * @param string $end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->requestParameters['End'] = $end;
        $this->queryParameters['End'] = $end;

        return $this;
    }

    /**
     * @param string $begin
     *
     * @return $this
     */
    public function setBegin($begin)
    {
        $this->requestParameters['Begin'] = $begin;
        $this->queryParameters['Begin'] = $begin;

        return $this;
    }
}
