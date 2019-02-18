<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateRole
 *
 * @method string getRoleId()
 * @method string getActionData()
 */
class UpdateRoleRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/edit_role';

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
            'UpdateRole'
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

    /**
     * @param string $actionData
     *
     * @return $this
     */
    public function setActionData($actionData)
    {
        $this->requestParameters['ActionData'] = $actionData;
        $this->queryParameters['ActionData'] = $actionData;

        return $this;
    }
}
