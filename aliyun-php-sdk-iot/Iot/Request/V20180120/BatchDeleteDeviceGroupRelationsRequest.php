<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchDeleteDeviceGroupRelations
 *
 * @method string getRealTenantId()
 * @method string getRealTripartiteKey()
 * @method string getIotInstanceId()
 * @method string getGroupId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDevices()
 */
class BatchDeleteDeviceGroupRelationsRequest extends \RpcAcsRequest
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
            'BatchDeleteDeviceGroupRelations',
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
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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
     * @param array $device
     *
     * @return $this
     */
	public function setDevices(array $device)
	{
	    $this->requestParameters['Devices'] = $device;
		foreach ($device as $depth1 => $depth1Value) {
			$this->queryParameters['Device.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			$this->queryParameters['Device.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
		}

		return $this;
    }
}
