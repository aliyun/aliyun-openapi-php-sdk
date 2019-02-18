<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListVpc
 *
 */
class ListVpcRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/vpc_list';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListVpc'
        );
    }
}
