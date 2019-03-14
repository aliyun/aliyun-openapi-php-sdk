<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateResourceQueue
 *
 * @method string getResourceOwnerId()
 * @method string getParentQueueId()
 * @method string getName()
 * @method string getQualifiedName()
 * @method string getResourcePoolId()
 * @method string getClusterId()
 * @method string getLeaf()
 * @method array getConfigs()
 */
class CreateResourceQueueRequest extends \RpcAcsRequest
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
            'CreateResourceQueue',
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
     * @param string $parentQueueId
     *
     * @return $this
     */
    public function setParentQueueId($parentQueueId)
    {
        $this->requestParameters['ParentQueueId'] = $parentQueueId;
        $this->queryParameters['ParentQueueId'] = $parentQueueId;

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
     * @param string $qualifiedName
     *
     * @return $this
     */
    public function setQualifiedName($qualifiedName)
    {
        $this->requestParameters['QualifiedName'] = $qualifiedName;
        $this->queryParameters['QualifiedName'] = $qualifiedName;

        return $this;
    }

    /**
     * @param string $resourcePoolId
     *
     * @return $this
     */
    public function setResourcePoolId($resourcePoolId)
    {
        $this->requestParameters['ResourcePoolId'] = $resourcePoolId;
        $this->queryParameters['ResourcePoolId'] = $resourcePoolId;

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

    /**
     * @param string $leaf
     *
     * @return $this
     */
    public function setLeaf($leaf)
    {
        $this->requestParameters['Leaf'] = $leaf;
        $this->queryParameters['Leaf'] = $leaf;

        return $this;
    }

    /**
     * @param array $configs
     *
     * @return $this
     */
    public function setConfigs(array $configs)
    {
        $this->requestParameters['Configs'] = $configs;
        foreach ($configs as $i => $iValue) {
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigKey'] = $configs[$i]['ConfigKey'];
            $this->queryParameters['Config.' . ($i + 1) . '.Note'] = $configs[$i]['Note'];
            $this->queryParameters['Config.' . ($i + 1) . '.ConfigValue'] = $configs[$i]['ConfigValue'];
            $this->queryParameters['Config.' . ($i + 1) . '.Category'] = $configs[$i]['Category'];
        }

        return $this;
    }
}
