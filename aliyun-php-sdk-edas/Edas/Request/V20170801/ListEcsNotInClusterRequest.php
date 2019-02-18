<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListEcsNotInCluster
 *
 * @method string getVpcId()
 * @method string getNetworkMode()
 */
class ListEcsNotInClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/ecs_not_in_cluster';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'ListEcsNotInCluster'
        );
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $networkMode
     *
     * @return $this
     */
    public function setNetworkMode($networkMode)
    {
        $this->requestParameters['NetworkMode'] = $networkMode;
        $this->queryParameters['NetworkMode'] = $networkMode;

        return $this;
    }
}
