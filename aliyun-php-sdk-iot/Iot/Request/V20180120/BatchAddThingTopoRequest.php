<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchAddThingTopo
 *
 * @method string getGwProductKey()
 * @method string getIotInstanceId()
 * @method string getExt()
 * @method array getTopoAddItems()
 * @method string getGwDeviceName()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchAddThingTopoRequest extends \RpcAcsRequest
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
            'BatchAddThingTopo',
            'iot'
        );
    }

    /**
     * @param string $gwProductKey
     *
     * @return $this
     */
    public function setGwProductKey($gwProductKey)
    {
        $this->requestParameters['GwProductKey'] = $gwProductKey;
        $this->queryParameters['GwProductKey'] = $gwProductKey;

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
     * @param string $ext
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->requestParameters['Ext'] = $ext;
        $this->queryParameters['Ext'] = $ext;

        return $this;
    }

    /**
     * @param array $topoAddItem
     *
     * @return $this
     */
	public function setTopoAddItems(array $topoAddItem)
	{
	    $this->requestParameters['TopoAddItems'] = $topoAddItem;
		foreach ($topoAddItem as $depth1 => $depth1Value) {
			$this->queryParameters['TopoAddItem.' . ($depth1 + 1) . '.ClientId'] = $depth1Value['ClientId'];
			$this->queryParameters['TopoAddItem.' . ($depth1 + 1) . '.SignMethod'] = $depth1Value['SignMethod'];
			$this->queryParameters['TopoAddItem.' . ($depth1 + 1) . '.Sign'] = $depth1Value['Sign'];
			$this->queryParameters['TopoAddItem.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			$this->queryParameters['TopoAddItem.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			$this->queryParameters['TopoAddItem.' . ($depth1 + 1) . '.Timestamp'] = $depth1Value['Timestamp'];
		}

		return $this;
    }

    /**
     * @param string $gwDeviceName
     *
     * @return $this
     */
    public function setGwDeviceName($gwDeviceName)
    {
        $this->requestParameters['GwDeviceName'] = $gwDeviceName;
        $this->queryParameters['GwDeviceName'] = $gwDeviceName;

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
