<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeCompany
 *
 */
class DescribeCompanyRequest extends \RpcAcsRequest
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
            'cloudesl',
            '2018-08-01',
            'DescribeCompany'
        );
    }
}
