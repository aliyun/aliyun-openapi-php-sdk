<?php

namespace Actiontrail\Request\V20171204;

/**
 * Request of DescribeRegions
 *
 */
class DescribeRegionsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Actiontrail',
            '2017-12-04',
            'DescribeRegions',
            'actiontrail'
        );
    }
}
