<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListSubAccount
 *
 */
class ListSubAccountRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/sub_account_list';

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
            'ListSubAccount'
        );
    }
}
