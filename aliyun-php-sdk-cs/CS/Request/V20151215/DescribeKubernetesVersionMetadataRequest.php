<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeKubernetesVersionMetadata
 *
 * @method string getClusterType()
 * @method string getMultiAZ()
 * @method string getKubernetesVersion()
 * @method string getRegion()
 */
class DescribeKubernetesVersionMetadataRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/api/v1/metadata/versions';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'DescribeKubernetesVersionMetadata'
        );
    }

    /**
     * @param string $clusterType
     *
     * @return $this
     */
    public function setClusterType($clusterType)
    {
        $this->requestParameters['ClusterType'] = $clusterType;
        $this->queryParameters['ClusterType'] = $clusterType;

        return $this;
    }

    /**
     * @param string $multiAZ
     *
     * @return $this
     */
    public function setMultiAZ($multiAZ)
    {
        $this->requestParameters['MultiAZ'] = $multiAZ;
        $this->queryParameters['MultiAZ'] = $multiAZ;

        return $this;
    }

    /**
     * @param string $kubernetesVersion
     *
     * @return $this
     */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->requestParameters['KubernetesVersion'] = $kubernetesVersion;
        $this->queryParameters['KubernetesVersion'] = $kubernetesVersion;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }
}
