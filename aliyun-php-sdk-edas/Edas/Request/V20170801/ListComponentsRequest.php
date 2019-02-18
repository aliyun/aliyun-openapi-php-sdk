<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListComponents
 *
 */
class ListComponentsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/components';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListComponents'
        );
    }
}
