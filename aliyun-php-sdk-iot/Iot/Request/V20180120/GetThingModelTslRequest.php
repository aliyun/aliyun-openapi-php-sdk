<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetThingModelTsl
 *
 * @method string getRealTenantId()
 * @method string getSimple()
 * @method string getRealTripartiteKey()
 * @method string getResourceGroupId()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method string getFunctionBlockId()
 */
class GetThingModelTslRequest extends \RpcAcsRequest
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
            'GetThingModelTsl',
            'iot'
        );
    }

    /**
     * @param string $realTenantId
     *
     * @return $this
     */
    public function setRealTenantId($realTenantId)
    {
        $this->requestParameters['RealTenantId'] = $realTenantId;
        $this->queryParameters['RealTenantId'] = $realTenantId;

        return $this;
    }

    /**
     * @param string $simple
     *
     * @return $this
     */
    public function setSimple($simple)
    {
        $this->requestParameters['Simple'] = $simple;
        $this->queryParameters['Simple'] = $simple;

        return $this;
    }

    /**
     * @param string $realTripartiteKey
     *
     * @return $this
     */
    public function setRealTripartiteKey($realTripartiteKey)
    {
        $this->requestParameters['RealTripartiteKey'] = $realTripartiteKey;
        $this->queryParameters['RealTripartiteKey'] = $realTripartiteKey;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

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
     * @param string $modelVersion
     *
     * @return $this
     */
    public function setModelVersion($modelVersion)
    {
        $this->requestParameters['ModelVersion'] = $modelVersion;
        $this->queryParameters['ModelVersion'] = $modelVersion;

        return $this;
    }

    /**
     * @param string $functionBlockId
     *
     * @return $this
     */
    public function setFunctionBlockId($functionBlockId)
    {
        $this->requestParameters['FunctionBlockId'] = $functionBlockId;
        $this->queryParameters['FunctionBlockId'] = $functionBlockId;

        return $this;
    }
}
