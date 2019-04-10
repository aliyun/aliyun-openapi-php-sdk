<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetHybridClusterConfig
 *
 * @method string getNode()
 * @method string getClusterId()
 */
class GetHybridClusterConfigRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'GetHybridClusterConfig',
            'ehs'
        );
    }

    /**
     * @param string $node
     *
     * @return $this
     */
    public function setNode($node)
    {
        $this->requestParameters['Node'] = $node;
        $this->queryParameters['Node'] = $node;

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
