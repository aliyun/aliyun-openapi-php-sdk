<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeFlowVariableCollection
 *
 * @method string getEntityId()
 */
class DescribeFlowVariableCollectionRequest extends \RpcAcsRequest
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
            'DescribeFlowVariableCollection',
            'emr'
        );
    }

    /**
     * @param string $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->requestParameters['EntityId'] = $entityId;
        $this->queryParameters['EntityId'] = $entityId;

        return $this;
    }
}
