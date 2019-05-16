<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeClusters
 *
 * @method string getclusterType()
 * @method string getName()
 */
class DescribeClustersRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/clusters';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'DescribeClusters'
        );
    }

    /**
     * @param string $clusterType
     *
     * @return $this
     */
    public function setclusterType($clusterType)
    {
        $this->requestParameters['clusterType'] = $clusterType;
        $this->queryParameters['clusterType'] = $clusterType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
