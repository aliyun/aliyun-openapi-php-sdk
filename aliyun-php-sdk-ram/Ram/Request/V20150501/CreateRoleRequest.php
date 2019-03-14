<?php

namespace Ram\Request\V20150501;

/**
 * Request of CreateRole
 *
 * @method string getRoleName()
 * @method string getDescription()
 * @method string getAssumeRolePolicyDocument()
 */
class CreateRoleRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Ram',
            '2015-05-01',
            'CreateRole',
            'ram'
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $assumeRolePolicyDocument
     *
     * @return $this
     */
    public function setAssumeRolePolicyDocument($assumeRolePolicyDocument)
    {
        $this->requestParameters['AssumeRolePolicyDocument'] = $assumeRolePolicyDocument;
        $this->queryParameters['AssumeRolePolicyDocument'] = $assumeRolePolicyDocument;

        return $this;
    }
}
