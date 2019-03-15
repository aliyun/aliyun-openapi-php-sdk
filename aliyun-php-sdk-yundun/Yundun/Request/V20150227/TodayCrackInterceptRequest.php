<?php

namespace Yundun\Request\V20150227;

/**
 * Request of TodayCrackIntercept
 *
 */
class TodayCrackInterceptRequest extends \RpcAcsRequest
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
            'Yundun',
            '2015-02-27',
            'TodayCrackIntercept',
            'yundun'
        );
    }
}
