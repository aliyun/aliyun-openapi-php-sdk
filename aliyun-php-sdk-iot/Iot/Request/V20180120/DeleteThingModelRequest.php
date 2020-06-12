<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteThingModel
 *
 * @method string getResourceGroupId()
 * @method array getPropertyIdentifiers()
 * @method string getIotInstanceId()
 * @method array getServiceIdentifiers()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getEventIdentifiers()
 */
class DeleteThingModelRequest extends \RpcAcsRequest
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
            'DeleteThingModel',
            'iot'
        );
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
     * @param array $propertyIdentifier
     *
     * @return $this
     */
	public function setPropertyIdentifiers(array $propertyIdentifier)
	{
	    $this->requestParameters['PropertyIdentifiers'] = $propertyIdentifier;
		foreach ($propertyIdentifier as $i => $iValue) {
			$this->queryParameters['PropertyIdentifier.' . ($i + 1)] = $iValue;
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
     * @param array $serviceIdentifier
     *
     * @return $this
     */
	public function setServiceIdentifiers(array $serviceIdentifier)
	{
	    $this->requestParameters['ServiceIdentifiers'] = $serviceIdentifier;
		foreach ($serviceIdentifier as $i => $iValue) {
			$this->queryParameters['ServiceIdentifier.' . ($i + 1)] = $iValue;
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
     * @param array $eventIdentifier
     *
     * @return $this
     */
	public function setEventIdentifiers(array $eventIdentifier)
	{
	    $this->requestParameters['EventIdentifiers'] = $eventIdentifier;
		foreach ($eventIdentifier as $i => $iValue) {
			$this->queryParameters['EventIdentifier.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
