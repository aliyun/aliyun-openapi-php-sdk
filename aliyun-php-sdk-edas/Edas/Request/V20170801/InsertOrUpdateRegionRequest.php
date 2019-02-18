<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertOrUpdateRegion
 *
 * @method string getHybridCloudEnable()
 * @method string getVpcId()
 * @method string getRegionTag()
 * @method string getRegionName()
 * @method string getDescription()
 * @method string getId()
 */
class InsertOrUpdateRegionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/user_region_def';

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
            'InsertOrUpdateRegion'
        );
    }

    /**
     * @param string $hybridCloudEnable
     *
     * @return $this
     */
    public function setHybridCloudEnable($hybridCloudEnable)
    {
        $this->requestParameters['HybridCloudEnable'] = $hybridCloudEnable;
        $this->queryParameters['HybridCloudEnable'] = $hybridCloudEnable;

        return $this;
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
     * @param string $regionTag
     *
     * @return $this
     */
    public function setRegionTag($regionTag)
    {
        $this->requestParameters['RegionTag'] = $regionTag;
        $this->queryParameters['RegionTag'] = $regionTag;

        return $this;
    }

    /**
     * @param string $regionName
     *
     * @return $this
     */
    public function setRegionName($regionName)
    {
        $this->requestParameters['RegionName'] = $regionName;
        $this->queryParameters['RegionName'] = $regionName;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
