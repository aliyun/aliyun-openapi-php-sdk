<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateSubscribeRelation
 *
 * @method string getOtaEventFlag()
 * @method string getDeviceTopoLifeCycleFlag()
 * @method string getType()
 * @method string getDeviceLifeCycleFlag()
 * @method string getIotInstanceId()
 * @method string getDeviceStatusChangeFlag()
 * @method array getConsumerGroupIdss()
 * @method string getProductKey()
 * @method string getThingHistoryFlag()
 * @method string getFoundDeviceListFlag()
 * @method string getApiProduct()
 * @method string getDeviceDataFlag()
 * @method string getApiRevision()
 * @method string getMnsConfiguration()
 */
class UpdateSubscribeRelationRequest extends \RpcAcsRequest
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
            'UpdateSubscribeRelation',
            'iot'
        );
    }

    /**
     * @param string $otaEventFlag
     *
     * @return $this
     */
    public function setOtaEventFlag($otaEventFlag)
    {
        $this->requestParameters['OtaEventFlag'] = $otaEventFlag;
        $this->queryParameters['OtaEventFlag'] = $otaEventFlag;

        return $this;
    }

    /**
     * @param string $deviceTopoLifeCycleFlag
     *
     * @return $this
     */
    public function setDeviceTopoLifeCycleFlag($deviceTopoLifeCycleFlag)
    {
        $this->requestParameters['DeviceTopoLifeCycleFlag'] = $deviceTopoLifeCycleFlag;
        $this->queryParameters['DeviceTopoLifeCycleFlag'] = $deviceTopoLifeCycleFlag;

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
     * @param string $deviceLifeCycleFlag
     *
     * @return $this
     */
    public function setDeviceLifeCycleFlag($deviceLifeCycleFlag)
    {
        $this->requestParameters['DeviceLifeCycleFlag'] = $deviceLifeCycleFlag;
        $this->queryParameters['DeviceLifeCycleFlag'] = $deviceLifeCycleFlag;

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
     * @param string $deviceStatusChangeFlag
     *
     * @return $this
     */
    public function setDeviceStatusChangeFlag($deviceStatusChangeFlag)
    {
        $this->requestParameters['DeviceStatusChangeFlag'] = $deviceStatusChangeFlag;
        $this->queryParameters['DeviceStatusChangeFlag'] = $deviceStatusChangeFlag;

        return $this;
    }

    /**
     * @param array $consumerGroupIds
     *
     * @return $this
     */
	public function setConsumerGroupIdss(array $consumerGroupIds)
	{
	    $this->requestParameters['ConsumerGroupIdss'] = $consumerGroupIds;
		foreach ($consumerGroupIds as $i => $iValue) {
			$this->queryParameters['ConsumerGroupIds.' . ($i + 1)] = $iValue;
		}

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
     * @param string $thingHistoryFlag
     *
     * @return $this
     */
    public function setThingHistoryFlag($thingHistoryFlag)
    {
        $this->requestParameters['ThingHistoryFlag'] = $thingHistoryFlag;
        $this->queryParameters['ThingHistoryFlag'] = $thingHistoryFlag;

        return $this;
    }

    /**
     * @param string $foundDeviceListFlag
     *
     * @return $this
     */
    public function setFoundDeviceListFlag($foundDeviceListFlag)
    {
        $this->requestParameters['FoundDeviceListFlag'] = $foundDeviceListFlag;
        $this->queryParameters['FoundDeviceListFlag'] = $foundDeviceListFlag;

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
     * @param string $deviceDataFlag
     *
     * @return $this
     */
    public function setDeviceDataFlag($deviceDataFlag)
    {
        $this->requestParameters['DeviceDataFlag'] = $deviceDataFlag;
        $this->queryParameters['DeviceDataFlag'] = $deviceDataFlag;

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
     * @param string $mnsConfiguration
     *
     * @return $this
     */
    public function setMnsConfiguration($mnsConfiguration)
    {
        $this->requestParameters['MnsConfiguration'] = $mnsConfiguration;
        $this->queryParameters['MnsConfiguration'] = $mnsConfiguration;

        return $this;
    }
}
