<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of DescribeRegionList
 *
 */
class DescribeRegionListRequest extends \RpcAcsRequest
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
            'openanalytics',
            '2018-03-01',
            'DescribeRegionList',
            'openanalytics'
        );
    }
}
