<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListSlb
 *
 */
class ListSlbRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/slb_list';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListSlb'
        );
    }
}
