<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchCheckDeviceNames
 *
 * @method string getRealTenantId()
 * @method string getRealTripartiteKey()
 * @method array getDeviceNameLists()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceNames()
 */
class BatchCheckDeviceNamesRequest extends \RpcAcsRequest
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
            'BatchCheckDeviceNames',
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
     * @param array $deviceNameList
     *
     * @return $this
     */
	public function setDeviceNameLists(array $deviceNameList)
	{
	    $this->requestParameters['DeviceNameLists'] = $deviceNameList;
		foreach ($deviceNameList as $depth1 => $depth1Value) {
			$this->queryParameters['DeviceNameList.' . ($depth1 + 1) . '.DeviceNickname'] = $depth1Value['DeviceNickname'];
			$this->queryParameters['DeviceNameList.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
		}

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
     * @param array $deviceName
     *
     * @return $this
     */
	public function setDeviceNames(array $deviceName)
	{
	    $this->requestParameters['DeviceNames'] = $deviceName;
		foreach ($deviceName as $i => $iValue) {
			$this->queryParameters['DeviceName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
