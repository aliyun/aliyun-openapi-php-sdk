<?php

namespace Ram\Request\V20150501;

/**
 * Request of GetPasswordPolicy
 *
 */
class GetPasswordPolicyRequest extends \RpcAcsRequest
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
            'Ram',
            '2015-05-01',
            'GetPasswordPolicy',
            'ram'
        );
    }
}
