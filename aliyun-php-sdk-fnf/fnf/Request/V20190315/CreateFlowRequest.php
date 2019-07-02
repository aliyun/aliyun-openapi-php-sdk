<?php

namespace fnf\Request\V20190315;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateFlow
 *
 * @method string getRequestId()
 * @method string getRoleArn()
 * @method string getName()
 * @method string getDescription()
 * @method string getDefinition()
 * @method string getType()
 */
class CreateFlowRequest extends \RpcAcsRequest
{

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
            'fnf',
            '2019-03-15',
            'CreateFlow',
            'fnf'
        );
    }

    /**
     * @param string $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestParameters['RequestId'] = $requestId;
        $this->queryParameters['RequestId'] = $requestId;

        return $this;
    }

    /**
     * @param string $roleArn
     *
     * @return $this
     */
    public function setRoleArn($roleArn)
    {
        $this->requestParameters['RoleArn'] = $roleArn;
        $this->queryParameters['RoleArn'] = $roleArn;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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
     * @param string $definition
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->requestParameters['Definition'] = $definition;
        $this->queryParameters['Definition'] = $definition;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }
}
