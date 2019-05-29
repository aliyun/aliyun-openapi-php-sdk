<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteNamespace
 *
 * @method string getNamespaceName()
 * @method string getInstanceId()
 */
class DeleteNamespaceRequest extends \RpcAcsRequest
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
            'DeleteNamespace',
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
