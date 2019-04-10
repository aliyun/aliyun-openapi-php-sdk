<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLocalNodes
 *
 * @method string getNodes()
 * @method string getClusterId()
 */
class AddLocalNodesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'AddLocalNodes',
            'ehs'
        );
    }

    /**
     * @param string $nodes
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->requestParameters['Nodes'] = $nodes;
        $this->queryParameters['Nodes'] = $nodes;

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
