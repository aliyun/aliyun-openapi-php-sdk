<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateNodeLabel
 *
 * @method string getLabelKey()
 * @method string getLabelValue()
 * @method string getClusterId()
 */
class CreateNodeLabelRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'CreateNodeLabel',
            'retailcloud'
        );
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
