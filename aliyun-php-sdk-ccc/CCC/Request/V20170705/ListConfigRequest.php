<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListConfig
 *
 * @method string getInstanceId()
 * @method array getConfigItems()
 */
class ListConfigRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'ListConfig'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $configItem
     *
     * @return $this
     */
	public function setConfigItems(array $configItem)
	{
	    $this->requestParameters['ConfigItems'] = $configItem;
		foreach ($configItem as $i => $iValue) {
			$this->queryParameters['ConfigItem.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
