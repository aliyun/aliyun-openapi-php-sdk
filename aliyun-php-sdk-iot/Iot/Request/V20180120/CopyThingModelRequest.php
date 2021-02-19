<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CopyThingModel
 *
 * @method string getRealTenantId()
 * @method string getTargetProductKey()
 * @method string getRealTripartiteKey()
 * @method string getResourceGroupId()
 * @method string getIotInstanceId()
 * @method string getSourceModelVersion()
 * @method string getSourceProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CopyThingModelRequest extends \RpcAcsRequest
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
            'CopyThingModel',
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
     * @param string $targetProductKey
     *
     * @return $this
     */
    public function setTargetProductKey($targetProductKey)
    {
        $this->requestParameters['TargetProductKey'] = $targetProductKey;
        $this->queryParameters['TargetProductKey'] = $targetProductKey;

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
     * @param string $sourceModelVersion
     *
     * @return $this
     */
    public function setSourceModelVersion($sourceModelVersion)
    {
        $this->requestParameters['SourceModelVersion'] = $sourceModelVersion;
        $this->queryParameters['SourceModelVersion'] = $sourceModelVersion;

        return $this;
    }

    /**
     * @param string $sourceProductKey
     *
     * @return $this
     */
    public function setSourceProductKey($sourceProductKey)
    {
        $this->requestParameters['SourceProductKey'] = $sourceProductKey;
        $this->queryParameters['SourceProductKey'] = $sourceProductKey;

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
}
