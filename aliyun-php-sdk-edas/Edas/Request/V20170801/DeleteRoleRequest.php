<?php

namespace Edas\Request\V20170801;

/**
 * Request of DeleteRole
 *
 * @method string getRoleId()
 */
class DeleteRoleRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/delete_role';

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
            'DeleteRole'
        );
    }

    /**
     * @param string $roleId
     *
     * @return $this
     */
    public function setRoleId($roleId)
    {
        $this->requestParameters['RoleId'] = $roleId;
        $this->queryParameters['RoleId'] = $roleId;

        return $this;
    }
}
