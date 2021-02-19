<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateProduct
 *
 * @method string getNodeType()
 * @method string getRealTenantId()
 * @method string getDescription()
 * @method string getCategoryKey()
 * @method string getJoinPermissionId()
 * @method string getAuthType()
 * @method string getRealTripartiteKey()
 * @method string getResourceGroupId()
 * @method string getValidateType()
 * @method string getIotInstanceId()
 * @method string getProductName()
 * @method string getAliyunCommodityCode()
 * @method string getPublishAuto()
 * @method string getCategoryId()
 * @method string getDataFormat()
 * @method string getId2()
 * @method string getNetType()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getProtocolType()
 */
class CreateProductRequest extends \RpcAcsRequest
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
            'CreateProduct',
            'iot'
        );
    }

    /**
     * @param string $nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->requestParameters['NodeType'] = $nodeType;
        $this->queryParameters['NodeType'] = $nodeType;

        return $this;
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $categoryKey
     *
     * @return $this
     */
    public function setCategoryKey($categoryKey)
    {
        $this->requestParameters['CategoryKey'] = $categoryKey;
        $this->queryParameters['CategoryKey'] = $categoryKey;

        return $this;
    }

    /**
     * @param string $joinPermissionId
     *
     * @return $this
     */
    public function setJoinPermissionId($joinPermissionId)
    {
        $this->requestParameters['JoinPermissionId'] = $joinPermissionId;
        $this->queryParameters['JoinPermissionId'] = $joinPermissionId;

        return $this;
    }

    /**
     * @param string $authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->requestParameters['AuthType'] = $authType;
        $this->queryParameters['AuthType'] = $authType;

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
     * @param string $validateType
     *
     * @return $this
     */
    public function setValidateType($validateType)
    {
        $this->requestParameters['ValidateType'] = $validateType;
        $this->queryParameters['ValidateType'] = $validateType;

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
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->requestParameters['ProductName'] = $productName;
        $this->queryParameters['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $aliyunCommodityCode
     *
     * @return $this
     */
    public function setAliyunCommodityCode($aliyunCommodityCode)
    {
        $this->requestParameters['AliyunCommodityCode'] = $aliyunCommodityCode;
        $this->queryParameters['AliyunCommodityCode'] = $aliyunCommodityCode;

        return $this;
    }

    /**
     * @param string $publishAuto
     *
     * @return $this
     */
    public function setPublishAuto($publishAuto)
    {
        $this->requestParameters['PublishAuto'] = $publishAuto;
        $this->queryParameters['PublishAuto'] = $publishAuto;

        return $this;
    }

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->requestParameters['CategoryId'] = $categoryId;
        $this->queryParameters['CategoryId'] = $categoryId;

        return $this;
    }

    /**
     * @param string $dataFormat
     *
     * @return $this
     */
    public function setDataFormat($dataFormat)
    {
        $this->requestParameters['DataFormat'] = $dataFormat;
        $this->queryParameters['DataFormat'] = $dataFormat;

        return $this;
    }

    /**
     * @param string $id2
     *
     * @return $this
     */
    public function setId2($id2)
    {
        $this->requestParameters['Id2'] = $id2;
        $this->queryParameters['Id2'] = $id2;

        return $this;
    }

    /**
     * @param string $netType
     *
     * @return $this
     */
    public function setNetType($netType)
    {
        $this->requestParameters['NetType'] = $netType;
        $this->queryParameters['NetType'] = $netType;

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
     * @param string $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        $this->requestParameters['ProtocolType'] = $protocolType;
        $this->queryParameters['ProtocolType'] = $protocolType;

        return $this;
    }
}
