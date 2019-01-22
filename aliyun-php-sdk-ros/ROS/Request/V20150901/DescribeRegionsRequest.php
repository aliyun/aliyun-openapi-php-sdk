<?php

namespace ROS\Request\V20150901;

/**
 * Request of DescribeRegions
 *
 */
class DescribeRegionsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/regions';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ROS',
            '2015-09-01',
            'DescribeRegions'
        );
    }
}
