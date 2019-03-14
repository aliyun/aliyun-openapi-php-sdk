<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateNavNode
 *
 * @method string getResourceOwnerId()
 * @method string getName()
 * @method string getType()
 * @method string getProjectId()
 * @method string getCategoryType()
 * @method string getObjectId()
 * @method string getParentId()
 */
class CreateNavNodeRequest extends \RpcAcsRequest
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
            'CreateNavNode',
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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $categoryType
     *
     * @return $this
     */
    public function setCategoryType($categoryType)
    {
        $this->requestParameters['CategoryType'] = $categoryType;
        $this->queryParameters['CategoryType'] = $categoryType;

        return $this;
    }

    /**
     * @param string $objectId
     *
     * @return $this
     */
    public function setObjectId($objectId)
    {
        $this->requestParameters['ObjectId'] = $objectId;
        $this->queryParameters['ObjectId'] = $objectId;

        return $this;
    }

    /**
     * @param string $parentId
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->requestParameters['ParentId'] = $parentId;
        $this->queryParameters['ParentId'] = $parentId;

        return $this;
    }
}
