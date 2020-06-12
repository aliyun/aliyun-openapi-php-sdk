<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateProductFilterConfig
 *
 * @method string getPropertyTimestampFilter()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPropertyValueFilter()
 */
class UpdateProductFilterConfigRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'UpdateProductFilterConfig',
            'iot'
        );
    }

    /**
     * @param string $propertyTimestampFilter
     *
     * @return $this
     */
    public function setPropertyTimestampFilter($propertyTimestampFilter)
    {
        $this->requestParameters['PropertyTimestampFilter'] = $propertyTimestampFilter;
        $this->queryParameters['PropertyTimestampFilter'] = $propertyTimestampFilter;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }

    /**
     * @param string $propertyValueFilter
     *
     * @return $this
     */
    public function setPropertyValueFilter($propertyValueFilter)
    {
        $this->requestParameters['PropertyValueFilter'] = $propertyValueFilter;
        $this->queryParameters['PropertyValueFilter'] = $propertyValueFilter;

        return $this;
    }
}
