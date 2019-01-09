<?php

namespace imm\Request\V20170906;

/**
 * Request of DescribeRegions
 *
 */
class DescribeRegionsRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'DescribeRegions',
            'imm'
        );
    }
}
