<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListPhoneTags
 *
 * @method array getNumberGroupIdss()
 * @method string getCurrentPage()
 * @method string getOutboundOnly()
 * @method string getNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 */
class ListPhoneTagsRequest extends \RpcAcsRequest
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
            'ListPhoneTags',
            'CCC'
        );
    }

    /**
     * @param array $numberGroupIds
     *
     * @return $this
     */
	public function setNumberGroupIdss(array $numberGroupIds)
	{
	    $this->requestParameters['NumberGroupIdss'] = $numberGroupIds;
		foreach ($numberGroupIds as $i => $iValue) {
			$this->queryParameters['NumberGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $outboundOnly
     *
     * @return $this
     */
    public function setOutboundOnly($outboundOnly)
    {
        $this->requestParameters['OutboundOnly'] = $outboundOnly;
        $this->queryParameters['OutboundOnly'] = $outboundOnly;

        return $this;
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->requestParameters['Number'] = $number;
        $this->queryParameters['Number'] = $number;

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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }
}
