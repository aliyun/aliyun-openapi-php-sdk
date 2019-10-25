<?php

namespace aliyuncvc\Request\V20190919;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryUserEvaluation
 *
 */
class QueryUserEvaluationRequest extends \RpcAcsRequest
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
            'aliyuncvc',
            '2019-09-19',
            'QueryUserEvaluation',
            'aliyuncvc'
        );
    }
}
