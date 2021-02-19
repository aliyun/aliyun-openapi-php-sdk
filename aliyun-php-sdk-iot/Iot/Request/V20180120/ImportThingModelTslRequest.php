<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImportThingModelTsl
 *
 * @method string getRealTenantId()
 * @method string getRealTripartiteKey()
 * @method string getResourceGroupId()
 * @method string getIotInstanceId()
 * @method string getFunctionBlockName()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTslUrl()
 * @method string getTslStr()
 * @method string getFunctionBlockId()
 */
class ImportThingModelTslRequest extends \RpcAcsRequest
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
            'ImportThingModelTsl',
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
     * @param string $functionBlockName
     *
     * @return $this
     */
    public function setFunctionBlockName($functionBlockName)
    {
        $this->requestParameters['FunctionBlockName'] = $functionBlockName;
        $this->queryParameters['FunctionBlockName'] = $functionBlockName;

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
     * @param string $tslUrl
     *
     * @return $this
     */
    public function setTslUrl($tslUrl)
    {
        $this->requestParameters['TslUrl'] = $tslUrl;
        $this->queryParameters['TslUrl'] = $tslUrl;

        return $this;
    }

    /**
     * @param string $tslStr
     *
     * @return $this
     */
    public function setTslStr($tslStr)
    {
        $this->requestParameters['TslStr'] = $tslStr;
        $this->queryParameters['TslStr'] = $tslStr;

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
