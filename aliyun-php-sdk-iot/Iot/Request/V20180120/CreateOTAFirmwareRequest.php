<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOTAFirmware
 *
 * @method string getSignMethod()
 * @method string getNeedToVerify()
 * @method string getType()
 * @method string getFirmwareUrl()
 * @method string getIotInstanceId()
 * @method string getFirmwareDesc()
 * @method string getModuleName()
 * @method string getFirmwareSign()
 * @method string getFirmwareSize()
 * @method string getFirmwareName()
 * @method string getProductKey()
 * @method string getSrcVersion()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDestVersion()
 */
class CreateOTAFirmwareRequest extends \RpcAcsRequest
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
            'CreateOTAFirmware',
            'iot'
        );
    }

    /**
     * @param string $signMethod
     *
     * @return $this
     */
    public function setSignMethod($signMethod)
    {
        $this->requestParameters['SignMethod'] = $signMethod;
        $this->queryParameters['SignMethod'] = $signMethod;

        return $this;
    }

    /**
     * @param string $needToVerify
     *
     * @return $this
     */
    public function setNeedToVerify($needToVerify)
    {
        $this->requestParameters['NeedToVerify'] = $needToVerify;
        $this->queryParameters['NeedToVerify'] = $needToVerify;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $firmwareUrl
     *
     * @return $this
     */
    public function setFirmwareUrl($firmwareUrl)
    {
        $this->requestParameters['FirmwareUrl'] = $firmwareUrl;
        $this->queryParameters['FirmwareUrl'] = $firmwareUrl;

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
     * @param string $firmwareDesc
     *
     * @return $this
     */
    public function setFirmwareDesc($firmwareDesc)
    {
        $this->requestParameters['FirmwareDesc'] = $firmwareDesc;
        $this->queryParameters['FirmwareDesc'] = $firmwareDesc;

        return $this;
    }

    /**
     * @param string $moduleName
     *
     * @return $this
     */
    public function setModuleName($moduleName)
    {
        $this->requestParameters['ModuleName'] = $moduleName;
        $this->queryParameters['ModuleName'] = $moduleName;

        return $this;
    }

    /**
     * @param string $firmwareSign
     *
     * @return $this
     */
    public function setFirmwareSign($firmwareSign)
    {
        $this->requestParameters['FirmwareSign'] = $firmwareSign;
        $this->queryParameters['FirmwareSign'] = $firmwareSign;

        return $this;
    }

    /**
     * @param string $firmwareSize
     *
     * @return $this
     */
    public function setFirmwareSize($firmwareSize)
    {
        $this->requestParameters['FirmwareSize'] = $firmwareSize;
        $this->queryParameters['FirmwareSize'] = $firmwareSize;

        return $this;
    }

    /**
     * @param string $firmwareName
     *
     * @return $this
     */
    public function setFirmwareName($firmwareName)
    {
        $this->requestParameters['FirmwareName'] = $firmwareName;
        $this->queryParameters['FirmwareName'] = $firmwareName;

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
     * @param string $srcVersion
     *
     * @return $this
     */
    public function setSrcVersion($srcVersion)
    {
        $this->requestParameters['SrcVersion'] = $srcVersion;
        $this->queryParameters['SrcVersion'] = $srcVersion;

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
     * @param string $destVersion
     *
     * @return $this
     */
    public function setDestVersion($destVersion)
    {
        $this->requestParameters['DestVersion'] = $destVersion;
        $this->queryParameters['DestVersion'] = $destVersion;

        return $this;
    }
}
