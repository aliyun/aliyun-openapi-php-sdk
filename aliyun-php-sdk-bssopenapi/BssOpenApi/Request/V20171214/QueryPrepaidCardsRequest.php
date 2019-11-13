<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryPrepaidCards
 *
 * @method string getExpiryTimeEnd()
 * @method string getExpiryTimeStart()
 * @method string getEffectiveOrNot()
 */
class QueryPrepaidCardsRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'QueryPrepaidCards',
            'BssOpenApi'
        );
    }

    /**
     * @param string $expiryTimeEnd
     *
     * @return $this
     */
    public function setExpiryTimeEnd($expiryTimeEnd)
    {
        $this->requestParameters['ExpiryTimeEnd'] = $expiryTimeEnd;
        $this->queryParameters['ExpiryTimeEnd'] = $expiryTimeEnd;

        return $this;
    }

    /**
     * @param string $expiryTimeStart
     *
     * @return $this
     */
    public function setExpiryTimeStart($expiryTimeStart)
    {
        $this->requestParameters['ExpiryTimeStart'] = $expiryTimeStart;
        $this->queryParameters['ExpiryTimeStart'] = $expiryTimeStart;

        return $this;
    }

    /**
     * @param string $effectiveOrNot
     *
     * @return $this
     */
    public function setEffectiveOrNot($effectiveOrNot)
    {
        $this->requestParameters['EffectiveOrNot'] = $effectiveOrNot;
        $this->queryParameters['EffectiveOrNot'] = $effectiveOrNot;

        return $this;
    }
}
