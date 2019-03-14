<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateClusterScript
 *
 * @method string getArgs()
 * @method string getPath()
 * @method string getResourceOwnerId()
 * @method string getName()
 * @method string getClusterId()
 * @method string getNodeIdList()
 */
class CreateClusterScriptRequest extends \RpcAcsRequest
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
            'CreateClusterScript',
            'emr'
        );
    }

    /**
     * @param string $args
     *
     * @return $this
     */
    public function setArgs($args)
    {
        $this->requestParameters['Args'] = $args;
        $this->queryParameters['Args'] = $args;

        return $this;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->requestParameters['Path'] = $path;
        $this->queryParameters['Path'] = $path;

        return $this;
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
     * @param string $nodeIdList
     *
     * @return $this
     */
    public function setNodeIdList($nodeIdList)
    {
        $this->requestParameters['NodeIdList'] = $nodeIdList;
        $this->queryParameters['NodeIdList'] = $nodeIdList;

        return $this;
    }
}
