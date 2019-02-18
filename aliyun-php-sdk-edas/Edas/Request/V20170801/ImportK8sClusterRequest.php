<?php

namespace Edas\Request\V20170801;

/**
 * Request of ImportK8sCluster
 *
 * @method string getClusterId()
 */
class ImportK8sClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/import_k8s_cluster';

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
            'ImportK8sCluster'
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
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
