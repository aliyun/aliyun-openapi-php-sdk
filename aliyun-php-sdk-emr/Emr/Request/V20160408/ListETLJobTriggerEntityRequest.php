<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListETLJobTriggerEntity
 *
 * @method string getResourceOwnerId()
 * @method string getEntityType()
 */
class ListETLJobTriggerEntityRequest extends \RpcAcsRequest
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
            'ListETLJobTriggerEntity',
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
     * @param string $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->requestParameters['EntityType'] = $entityType;
        $this->queryParameters['EntityType'] = $entityType;

        return $this;
    }
}
