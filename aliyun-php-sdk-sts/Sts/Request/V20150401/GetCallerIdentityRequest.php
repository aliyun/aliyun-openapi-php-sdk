<?php

namespace Sts\Request\V20150401;

/**
 * Request of GetCallerIdentity
 *
 */
class GetCallerIdentityRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Sts',
            '2015-04-01',
            'GetCallerIdentity',
            'sts'
        );
    }
}
