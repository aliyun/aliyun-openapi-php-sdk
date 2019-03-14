<?php

namespace gpdb\Request\V20160503;

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
            'gpdb',
            '2016-05-03',
            'DescribeRegions',
            'gpdb'
        );
    }
}
