<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetSmsConfig
 *
 * @method string getInstanceId()
 * @method array getScenarios()
 */
class GetSmsConfigRequest extends \RpcAcsRequest
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
            'GetSmsConfig'
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
     * @param array $scenario
     *
     * @return $this
     */
	public function setScenarios(array $scenario)
	{
	    $this->requestParameters['Scenarios'] = $scenario;
		foreach ($scenario as $i => $iValue) {
			$this->queryParameters['Scenario.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
