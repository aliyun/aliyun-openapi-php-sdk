<?php

namespace BssOpenApi\Request\V20171214;

/**
 * Request of UnsubscribeExportToOSS
 *
 */
class UnsubscribeExportToOSSRequest extends \RpcAcsRequest
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
            'UnsubscribeExportToOSS'
        );
    }
}
