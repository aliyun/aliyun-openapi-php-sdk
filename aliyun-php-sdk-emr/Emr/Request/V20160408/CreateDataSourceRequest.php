<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateDataSource
 *
 * @method string getResourceOwnerId()
 * @method string getNavParentId()
 * @method string getName()
 * @method string getDescription()
 * @method string getSourceType()
 * @method string getConf()
 * @method string getClusterId()
 */
class CreateDataSourceRequest extends \RpcAcsRequest
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
            'CreateDataSource',
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
     * @param string $navParentId
     *
     * @return $this
     */
    public function setNavParentId($navParentId)
    {
        $this->requestParameters['NavParentId'] = $navParentId;
        $this->queryParameters['NavParentId'] = $navParentId;

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
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->requestParameters['SourceType'] = $sourceType;
        $this->queryParameters['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @param string $conf
     *
     * @return $this
     */
    public function setConf($conf)
    {
        $this->requestParameters['Conf'] = $conf;
        $this->queryParameters['Conf'] = $conf;

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
