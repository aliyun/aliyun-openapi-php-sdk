<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateTriggerHook
 *
 */
class CreateTriggerHookRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/hook/trigger';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'CreateTriggerHook'
        );
    }
}
