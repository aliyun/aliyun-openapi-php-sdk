<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListRole
 *
 */
class ListRoleRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/role_list';

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
            'ListRole'
        );
    }
}
