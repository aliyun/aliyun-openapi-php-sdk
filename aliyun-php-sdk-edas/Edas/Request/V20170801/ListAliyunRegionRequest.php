<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListAliyunRegion
 *
 */
class ListAliyunRegionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/region_list';

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
            'Edas',
            '2017-08-01',
            'ListAliyunRegion'
        );
    }
}
