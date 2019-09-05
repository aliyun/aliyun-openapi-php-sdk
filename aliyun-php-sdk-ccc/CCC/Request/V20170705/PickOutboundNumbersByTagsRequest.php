<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PickOutboundNumbersByTags
 *
 * @method array getPrioritizedCallerAreas()
 * @method string getCount()
 * @method string getInstanceId()
 * @method array getServiceTags()
 * @method array getSkillGroupIds()
 * @method string getCalleeNumber()
 */
class PickOutboundNumbersByTagsRequest extends \RpcAcsRequest
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
            'PickOutboundNumbersByTags'
        );
    }

    /**
     * @param array $prioritizedCallerArea
     *
     * @return $this
     */
	public function setPrioritizedCallerAreas(array $prioritizedCallerArea)
	{
	    $this->requestParameters['PrioritizedCallerAreas'] = $prioritizedCallerArea;
		foreach ($prioritizedCallerArea as $i => $iValue) {
			$this->queryParameters['PrioritizedCallerArea.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->requestParameters['Count'] = $count;
        $this->queryParameters['Count'] = $count;

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
     * @param array $serviceTag
     *
     * @return $this
     */
	public function setServiceTags(array $serviceTag)
	{
	    $this->requestParameters['ServiceTags'] = $serviceTag;
		foreach ($serviceTag as $i => $iValue) {
			$this->queryParameters['ServiceTag.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function setSkillGroupIds(array $skillGroupId)
	{
	    $this->requestParameters['SkillGroupIds'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->queryParameters['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $calleeNumber
     *
     * @return $this
     */
    public function setCalleeNumber($calleeNumber)
    {
        $this->requestParameters['CalleeNumber'] = $calleeNumber;
        $this->queryParameters['CalleeNumber'] = $calleeNumber;

        return $this;
    }
}
