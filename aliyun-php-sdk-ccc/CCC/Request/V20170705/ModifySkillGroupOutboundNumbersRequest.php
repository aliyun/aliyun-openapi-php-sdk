<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySkillGroupOutboundNumbers
 *
 * @method string getOperationType()
 * @method string getInstanceId()
 * @method array getOutboundPhoneNumberIds()
 * @method string getSkillGroupId()
 */
class ModifySkillGroupOutboundNumbersRequest extends \RpcAcsRequest
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
            'ModifySkillGroupOutboundNumbers'
        );
    }

    /**
     * @param string $operationType
     *
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $this->requestParameters['OperationType'] = $operationType;
        $this->queryParameters['OperationType'] = $operationType;

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
     * @param array $outboundPhoneNumberId
     *
     * @return $this
     */
	public function setOutboundPhoneNumberIds(array $outboundPhoneNumberId)
	{
	    $this->requestParameters['OutboundPhoneNumberIds'] = $outboundPhoneNumberId;
		foreach ($outboundPhoneNumberId as $i => $iValue) {
			$this->queryParameters['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function setSkillGroupId($skillGroupId)
    {
        $this->requestParameters['SkillGroupId'] = $skillGroupId;
        $this->queryParameters['SkillGroupId'] = $skillGroupId;

        return $this;
    }
}
