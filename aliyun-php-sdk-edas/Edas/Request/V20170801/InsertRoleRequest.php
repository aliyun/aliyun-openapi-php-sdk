<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertRole
 *
 * @method string getRoleName()
 * @method string getActionData()
 */
class InsertRoleRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/create_role';

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
            'InsertRole'
        );
    }

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->requestParameters['RoleName'] = $roleName;
        $this->queryParameters['RoleName'] = $roleName;

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
