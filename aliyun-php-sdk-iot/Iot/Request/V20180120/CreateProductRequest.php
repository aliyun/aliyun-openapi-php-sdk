<?php

namespace Iot\Request\V20180120;

/**
 * Request of CreateProduct
 *
 * @method string getDataFormat()
 * @method string getNodeType()
 * @method string getId2()
 * @method string getNetType()
 * @method string getProductName()
 * @method string getDescription()
 * @method string getProtocolType()
 * @method string getAliyunCommodityCode()
 * @method string getCategoryId()
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
            'CreateProduct'
        );
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
}
