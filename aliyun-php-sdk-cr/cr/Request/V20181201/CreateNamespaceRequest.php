<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateNamespace
 *
 * @method string getNamespaceName()
 * @method string getAutoCreateRepo()
 * @method string getDefaultRepoType()
 * @method string getInstanceId()
 */
class CreateNamespaceRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'CreateNamespace',
            'cr'
        );
    }

    /**
     * @param string $namespaceName
     *
     * @return $this
     */
    public function setNamespaceName($namespaceName)
    {
        $this->requestParameters['NamespaceName'] = $namespaceName;
        $this->queryParameters['NamespaceName'] = $namespaceName;

        return $this;
    }

    /**
     * @param string $autoCreateRepo
     *
     * @return $this
     */
    public function setAutoCreateRepo($autoCreateRepo)
    {
        $this->requestParameters['AutoCreateRepo'] = $autoCreateRepo;
        $this->queryParameters['AutoCreateRepo'] = $autoCreateRepo;

        return $this;
    }

    /**
     * @param string $defaultRepoType
     *
     * @return $this
     */
    public function setDefaultRepoType($defaultRepoType)
    {
        $this->requestParameters['DefaultRepoType'] = $defaultRepoType;
        $this->queryParameters['DefaultRepoType'] = $defaultRepoType;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
