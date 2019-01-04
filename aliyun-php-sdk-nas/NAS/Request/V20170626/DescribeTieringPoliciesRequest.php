<?php

namespace NAS\Request\V20170626;

/**
 * Request of DescribeTieringPolicies
 *
 */
class DescribeTieringPoliciesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'NAS',
            '2017-06-26',
            'DescribeTieringPolicies',
            'nas'
        );
    }
}
