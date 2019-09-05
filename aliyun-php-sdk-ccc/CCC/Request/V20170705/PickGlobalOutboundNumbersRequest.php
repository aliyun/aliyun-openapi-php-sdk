<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PickGlobalOutboundNumbers
 *
 * @method string getIsVirtual()
 * @method string getCount()
 * @method string getInstanceId()
 * @method array getSkillGroupIds()
 * @method string getCalleeNumber()
 */
class PickGlobalOutboundNumbersRequest extends \RpcAcsRequest
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
            'PickGlobalOutboundNumbers'
        );
    }

    /**
     * @param string $isVirtual
     *
     * @return $this
     */
    public function setIsVirtual($isVirtual)
    {
        $this->requestParameters['IsVirtual'] = $isVirtual;
        $this->queryParameters['IsVirtual'] = $isVirtual;

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
