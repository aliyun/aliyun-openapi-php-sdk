<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListCluster
 *
 * @method string getLogicalRegionId()
 */
class ListClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/cluster_list';

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
            'Edas',
            '2017-08-01',
            'ListCluster'
        );
    }

    /**
     * @param string $logicalRegionId
     *
     * @return $this
     */
    public function setLogicalRegionId($logicalRegionId)
    {
        $this->requestParameters['LogicalRegionId'] = $logicalRegionId;
        $this->queryParameters['LogicalRegionId'] = $logicalRegionId;

        return $this;
    }
}
