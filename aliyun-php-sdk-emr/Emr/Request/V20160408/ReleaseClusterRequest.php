<?php

namespace Emr\Request\V20160408;

/**
 * Request of ReleaseCluster
 *
 * @method string getResourceOwnerId()
 * @method string getForceRelease()
 * @method string getId()
 */
class ReleaseClusterRequest extends \RpcAcsRequest
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
            'ReleaseCluster',
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
     * @param string $forceRelease
     *
     * @return $this
     */
    public function setForceRelease($forceRelease)
    {
        $this->requestParameters['ForceRelease'] = $forceRelease;
        $this->queryParameters['ForceRelease'] = $forceRelease;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
