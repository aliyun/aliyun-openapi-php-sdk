<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListNodeLabelBindings
 *
 * @method string getInstanceId()
 * @method string getLabelKey()
 * @method string getLabelValue()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getPageNumber()
 */
class ListNodeLabelBindingsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'retailcloud',
            '2018-03-13',
            'ListNodeLabelBindings',
            'retailcloud'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $labelKey
     *
     * @return $this
     */
    public function setLabelKey($labelKey)
    {
        $this->requestParameters['LabelKey'] = $labelKey;
        $this->queryParameters['LabelKey'] = $labelKey;

        return $this;
    }

    /**
     * @param string $labelValue
     *
     * @return $this
     */
    public function setLabelValue($labelValue)
    {
        $this->requestParameters['LabelValue'] = $labelValue;
        $this->queryParameters['LabelValue'] = $labelValue;

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
