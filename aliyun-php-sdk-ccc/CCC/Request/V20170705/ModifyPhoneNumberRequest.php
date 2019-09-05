<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyPhoneNumber
 *
 * @method string getContactFlowId()
 * @method string getUsage()
 * @method string getInstanceId()
 * @method string getPhoneNumberId()
 * @method array getSkillGroupIds()
 */
class ModifyPhoneNumberRequest extends \RpcAcsRequest
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
            'ModifyPhoneNumber'
        );
    }

    /**
     * @param string $contactFlowId
     *
     * @return $this
     */
    public function setContactFlowId($contactFlowId)
    {
        $this->requestParameters['ContactFlowId'] = $contactFlowId;
        $this->queryParameters['ContactFlowId'] = $contactFlowId;

        return $this;
    }

    /**
     * @param string $usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->requestParameters['Usage'] = $usage;
        $this->queryParameters['Usage'] = $usage;

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
     * @param string $phoneNumberId
     *
     * @return $this
     */
    public function setPhoneNumberId($phoneNumberId)
    {
        $this->requestParameters['PhoneNumberId'] = $phoneNumberId;
        $this->queryParameters['PhoneNumberId'] = $phoneNumberId;

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
}
