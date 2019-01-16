<?php

namespace CCC\Request\V20170705;

/**
 * Request of ModifyNotificationConfig
 *
 * @method array getSubscriptionss()
 * @method string getInstanceId()
 * @method string getAccessPoint()
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
     * @param array $subscriptionss
     *
     * @return $this
     */
    public function setSubscriptionss(array $subscriptionss)
    {
        $this->requestParameters['Subscriptionss'] = $subscriptionss;
        foreach ($subscriptionss as $i => $iValue) {
            $this->queryParameters['Subscriptions.' . ($i + 1) . '.DisplayName'] = $subscriptionss[$i]['DisplayName'];
            $this->queryParameters['Subscriptions.' . ($i + 1) . '.Name'] = $subscriptionss[$i]['Name'];
            $this->queryParameters['Subscriptions.' . ($i + 1) . '.Selected'] = $subscriptionss[$i]['Selected'];
        }

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
