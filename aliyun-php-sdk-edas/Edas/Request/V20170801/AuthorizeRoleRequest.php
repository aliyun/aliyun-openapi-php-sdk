<?php

namespace Edas\Request\V20170801;

/**
 * Request of AuthorizeRole
 *
 * @method string getRoleIds()
 * @method string getTargetUserId()
 */
class AuthorizeRoleRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/authorize_role';

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
            'AuthorizeRole'
        );
    }

    /**
     * @param string $roleIds
     *
     * @return $this
     */
    public function setRoleIds($roleIds)
    {
        $this->requestParameters['RoleIds'] = $roleIds;
        $this->queryParameters['RoleIds'] = $roleIds;

        return $this;
    }

    /**
     * @param string $targetUserId
     *
     * @return $this
     */
    public function setTargetUserId($targetUserId)
    {
        $this->requestParameters['TargetUserId'] = $targetUserId;
        $this->queryParameters['TargetUserId'] = $targetUserId;

        return $this;
    }
}
