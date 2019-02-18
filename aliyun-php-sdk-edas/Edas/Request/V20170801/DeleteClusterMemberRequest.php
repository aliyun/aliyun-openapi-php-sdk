<?php

namespace Edas\Request\V20170801;

/**
 * Request of DeleteClusterMember
 *
 * @method string getClusterMemberId()
 * @method string getClusterId()
 */
class DeleteClusterMemberRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/cluster_member';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'DeleteClusterMember'
        );
    }

    /**
     * @param string $clusterMemberId
     *
     * @return $this
     */
    public function setClusterMemberId($clusterMemberId)
    {
        $this->requestParameters['ClusterMemberId'] = $clusterMemberId;
        $this->queryParameters['ClusterMemberId'] = $clusterMemberId;

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
