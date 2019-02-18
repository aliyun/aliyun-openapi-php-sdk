<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListServiceGroups
 *
 */
class ListServiceGroupsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/service/serviceGroups';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListServiceGroups'
        );
    }
}
