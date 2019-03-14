<?php

namespace Emr\Request\V20160408;

/**
 * Request of AddClusterService
 *
 * @method string getResourceOwnerId()
 * @method array getServices()
 * @method string getComment()
 * @method string getClusterId()
 */
class AddClusterServiceRequest extends \RpcAcsRequest
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
            'AddClusterService',
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
     * @param array $services
     *
     * @return $this
     */
    public function setServices(array $services)
    {
        $this->requestParameters['Services'] = $services;
        foreach ($services as $i => $iValue) {
            $this->queryParameters['Service.' . ($i + 1) . '.ServiceName'] = $services[$i]['ServiceName'];
        }

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

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
