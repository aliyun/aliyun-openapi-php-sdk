<?php

namespace Green\Request\V20161222;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SampleFeedback
 *
 */
class SampleFeedbackRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/sample/feedback';

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
            'Green',
            '2016-12-22',
            'SampleFeedback',
            'green'
        );
    }
}
