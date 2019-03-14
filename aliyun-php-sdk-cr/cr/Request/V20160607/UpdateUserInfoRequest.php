<?php

namespace cr\Request\V20160607;

/**
 * Request of UpdateUserInfo
 *
 */
class UpdateUserInfoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users';

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
            'cr',
            '2016-06-07',
            'UpdateUserInfo',
            'cr'
        );
    }
}
