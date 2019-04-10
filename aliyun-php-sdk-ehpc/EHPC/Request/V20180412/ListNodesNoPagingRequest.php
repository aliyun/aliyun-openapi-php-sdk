<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListNodesNoPaging
 *
 * @method string getHostName()
 * @method string getRole()
 * @method string getClusterId()
 * @method string getOnlyDetached()
 */
class ListNodesNoPagingRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'ListNodesNoPaging',
            'ehs'
        );
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
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

    /**
     * @param string $onlyDetached
     *
     * @return $this
     */
    public function setOnlyDetached($onlyDetached)
    {
        $this->requestParameters['OnlyDetached'] = $onlyDetached;
        $this->queryParameters['OnlyDetached'] = $onlyDetached;

        return $this;
    }
}
