<?php

namespace NAS\Request\V20170626;

/**
 * Request of DescribeZones
 *
 */
class DescribeZonesRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'DescribeZones',
            'nas'
        );
    }
}
