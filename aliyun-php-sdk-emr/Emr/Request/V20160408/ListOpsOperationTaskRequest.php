<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListOpsOperationTask
 *
 * @method string getResourceOwnerId()
 * @method string getOperationId()
 * @method string getPageNumber()
 */
class ListOpsOperationTaskRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'ListOpsOperationTask',
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
     * @param string $operationId
     *
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->requestParameters['OperationId'] = $operationId;
        $this->queryParameters['OperationId'] = $operationId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
