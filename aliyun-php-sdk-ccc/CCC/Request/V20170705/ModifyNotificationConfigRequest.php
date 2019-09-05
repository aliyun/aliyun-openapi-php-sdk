<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyNotificationConfig
 *
 * @method array getSubscriptionss()
 * @method string getAccessPoint()
 * @method string getInstanceId()
 * @method string getTopic()
 * @method string getProducerId()
 */
class ModifyNotificationConfigRequest extends \RpcAcsRequest
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
            'ModifyNotificationConfig'
        );
    }

    /**
     * @param array $subscriptions
     *
     * @return $this
     */
	public function setSubscriptionss(array $subscriptions)
	{
	    $this->requestParameters['Subscriptionss'] = $subscriptions;
		foreach ($subscriptions as $depth1 => $depth1Value) {
			$this->queryParameters['Subscriptions.' . ($depth1 + 1) . '.DisplayName'] = $depth1Value['DisplayName'];
			$this->queryParameters['Subscriptions.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->queryParameters['Subscriptions.' . ($depth1 + 1) . '.Selected'] = $depth1Value['Selected'];
		}

		return $this;
    }

    /**
     * @param string $accessPoint
     *
     * @return $this
     */
    public function setAccessPoint($accessPoint)
    {
        $this->requestParameters['AccessPoint'] = $accessPoint;
        $this->queryParameters['AccessPoint'] = $accessPoint;

        return $this;
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
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->requestParameters['Topic'] = $topic;
        $this->queryParameters['Topic'] = $topic;

        return $this;
    }

    /**
     * @param string $producerId
     *
     * @return $this
     */
    public function setProducerId($producerId)
    {
        $this->requestParameters['ProducerId'] = $producerId;
        $this->queryParameters['ProducerId'] = $producerId;

        return $this;
    }
}
