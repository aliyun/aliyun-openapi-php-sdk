<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListFlowClusterAll
 *
 */
class ListFlowClusterAllRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ListFlowClusterAll',
            'emr'
        );
    }
}
