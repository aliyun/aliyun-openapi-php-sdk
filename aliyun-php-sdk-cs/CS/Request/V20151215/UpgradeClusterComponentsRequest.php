<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeClusterComponents
 *
 * @method string getComponentId()
 * @method string getClusterId()
 */
class UpgradeClusterComponentsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/clusters/[ClusterId]/components/[ComponentId]/upgrade';

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
            'CS',
            '2015-12-15',
            'UpgradeClusterComponents'
        );
    }

    /**
     * @param string $componentId
     *
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->requestParameters['ComponentId'] = $componentId;
        $this->pathParameters['ComponentId'] = $componentId;

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
        $this->pathParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
