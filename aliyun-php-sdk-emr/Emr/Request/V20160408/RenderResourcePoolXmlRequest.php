<?php

namespace Emr\Request\V20160408;

/**
 * Request of RenderResourcePoolXml
 *
 * @method string getResourceOwnerId()
 * @method string getResourcePoolId()
 * @method string getClusterId()
 */
class RenderResourcePoolXmlRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'RenderResourcePoolXml',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourcePoolId
     *
     * @return $this
     */
    public function setResourcePoolId($resourcePoolId)
    {
        $this->requestParameters['ResourcePoolId'] = $resourcePoolId;
        $this->queryParameters['ResourcePoolId'] = $resourcePoolId;

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
