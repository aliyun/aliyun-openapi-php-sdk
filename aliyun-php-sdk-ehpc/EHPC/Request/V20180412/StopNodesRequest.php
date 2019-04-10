<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StopNodes
 *
 * @method string getRole()
 * @method array getInstances()
 * @method string getClusterId()
 */
class StopNodesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'StopNodes',
            'ehs'
        );
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->requestParameters['Role'] = $role;
        $this->queryParameters['Role'] = $role;

        return $this;
    }

    /**
     * @param array $instance
     *
     * @return $this
     */
    public function setInstances(array $instance)
    {
        $this->requestParameters['Instances'] = $instance;
        foreach ($instance as $depth1 => $depth1Value) {
            $this->queryParameters['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
