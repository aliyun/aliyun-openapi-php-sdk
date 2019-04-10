<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListInvocationResults
 *
 * @method array getInstances()
 * @method string getInvokeRecordStatus()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getCommandId()
 * @method string getPageNumber()
 */
class ListInvocationResultsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'ListInvocationResults',
            'ehs'
        );
    }

    /**
     * @param array $instance
     *
     * @return $this
     */
    public function setInstances(array $instance)
    {
        $this->requestParameters['Instances'] = $instance;
        foreach ($instance as $depth1 => $depth1Value) {
            $this->queryParameters['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }

    /**
     * @param string $invokeRecordStatus
     *
     * @return $this
     */
    public function setInvokeRecordStatus($invokeRecordStatus)
    {
        $this->requestParameters['InvokeRecordStatus'] = $invokeRecordStatus;
        $this->queryParameters['InvokeRecordStatus'] = $invokeRecordStatus;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $commandId
     *
     * @return $this
     */
    public function setCommandId($commandId)
    {
        $this->requestParameters['CommandId'] = $commandId;
        $this->queryParameters['CommandId'] = $commandId;

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
