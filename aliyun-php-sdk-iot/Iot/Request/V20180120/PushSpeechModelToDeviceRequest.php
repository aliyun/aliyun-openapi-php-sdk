<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PushSpeechModelToDevice
 *
 * @method string getProjectCode()
 * @method string getIotId()
 * @method string getPushMode()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getSpeechModelCodeLists()
 */
class PushSpeechModelToDeviceRequest extends \RpcAcsRequest
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
            'PushSpeechModelToDevice',
            'iot'
        );
    }

    /**
     * @param string $projectCode
     *
     * @return $this
     */
    public function setProjectCode($projectCode)
    {
        $this->requestParameters['ProjectCode'] = $projectCode;
        $this->queryParameters['ProjectCode'] = $projectCode;

        return $this;
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function setIotId($iotId)
    {
        $this->requestParameters['IotId'] = $iotId;
        $this->queryParameters['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $pushMode
     *
     * @return $this
     */
    public function setPushMode($pushMode)
    {
        $this->requestParameters['PushMode'] = $pushMode;
        $this->queryParameters['PushMode'] = $pushMode;

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
     * @param array $speechModelCodeList
     *
     * @return $this
     */
	public function setSpeechModelCodeLists(array $speechModelCodeList)
	{
	    $this->requestParameters['SpeechModelCodeLists'] = $speechModelCodeList;
		foreach ($speechModelCodeList as $i => $iValue) {
			$this->queryParameters['SpeechModelCodeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
