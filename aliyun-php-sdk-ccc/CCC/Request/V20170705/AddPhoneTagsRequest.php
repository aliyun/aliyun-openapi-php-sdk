<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddPhoneTags
 *
 * @method string getRegionNameProvince()
 * @method string getType()
 * @method string getConcurrency()
 * @method string getInstanceId()
 * @method string getProvider()
 * @method array getPhoneNumberLists()
 * @method string getServiceTag()
 * @method string getSipTag()
 * @method string getRegionNameCity()
 */
class AddPhoneTagsRequest extends \RpcAcsRequest
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
            'AddPhoneTags',
            'CCC'
        );
    }

    /**
     * @param string $regionNameProvince
     *
     * @return $this
     */
    public function setRegionNameProvince($regionNameProvince)
    {
        $this->requestParameters['RegionNameProvince'] = $regionNameProvince;
        $this->queryParameters['RegionNameProvince'] = $regionNameProvince;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $concurrency
     *
     * @return $this
     */
    public function setConcurrency($concurrency)
    {
        $this->requestParameters['Concurrency'] = $concurrency;
        $this->queryParameters['Concurrency'] = $concurrency;

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
     * @param string $provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->requestParameters['Provider'] = $provider;
        $this->queryParameters['Provider'] = $provider;

        return $this;
    }

    /**
     * @param array $phoneNumberList
     *
     * @return $this
     */
	public function setPhoneNumberLists(array $phoneNumberList)
	{
	    $this->requestParameters['PhoneNumberLists'] = $phoneNumberList;
		foreach ($phoneNumberList as $i => $iValue) {
			$this->queryParameters['PhoneNumberList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $serviceTag
     *
     * @return $this
     */
    public function setServiceTag($serviceTag)
    {
        $this->requestParameters['ServiceTag'] = $serviceTag;
        $this->queryParameters['ServiceTag'] = $serviceTag;

        return $this;
    }

    /**
     * @param string $sipTag
     *
     * @return $this
     */
    public function setSipTag($sipTag)
    {
        $this->requestParameters['SipTag'] = $sipTag;
        $this->queryParameters['SipTag'] = $sipTag;

        return $this;
    }

    /**
     * @param string $regionNameCity
     *
     * @return $this
     */
    public function setRegionNameCity($regionNameCity)
    {
        $this->requestParameters['RegionNameCity'] = $regionNameCity;
        $this->queryParameters['RegionNameCity'] = $regionNameCity;

        return $this;
    }
}
