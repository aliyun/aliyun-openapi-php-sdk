<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeClusterAddons
 *
 * @method string getClusterId()
 */
class UpgradeClusterAddonsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/clusters/[ClusterId]/components/upgrade';

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
            'UpgradeClusterAddons'
        );
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
