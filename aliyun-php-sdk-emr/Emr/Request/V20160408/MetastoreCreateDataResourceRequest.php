<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreCreateDataResource
 *
 * @method string getResourceOwnerId()
 * @method string getDefault()
 * @method string getAccessType()
 * @method string getName()
 * @method string getDescription()
 * @method string getMetaType()
 * @method string getClusterId()
 */
class MetastoreCreateDataResourceRequest extends \RpcAcsRequest
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
            'MetastoreCreateDataResource',
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
     * @param string $default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->requestParameters['Default'] = $default;
        $this->queryParameters['Default'] = $default;

        return $this;
    }

    /**
     * @param string $accessType
     *
     * @return $this
     */
    public function setAccessType($accessType)
    {
        $this->requestParameters['AccessType'] = $accessType;
        $this->queryParameters['AccessType'] = $accessType;

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
     * @param string $metaType
     *
     * @return $this
     */
    public function setMetaType($metaType)
    {
        $this->requestParameters['MetaType'] = $metaType;
        $this->queryParameters['MetaType'] = $metaType;

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
