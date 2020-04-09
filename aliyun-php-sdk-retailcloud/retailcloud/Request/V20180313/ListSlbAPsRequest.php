<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListSlbAPs
 *
 * @method array getProtocolLists()
 * @method string getSlbId()
 * @method string getAppId()
 * @method string getName()
 * @method string getPageSize()
 * @method string getEnvId()
 * @method string getNetworkMode()
 * @method string getPageNumber()
 */
class ListSlbAPsRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'ListSlbAPs',
            'retailcloud'
        );
    }

    /**
     * @param array $protocolList
     *
     * @return $this
     */
	public function setProtocolLists(array $protocolList)
	{
	    $this->requestParameters['ProtocolLists'] = $protocolList;
		foreach ($protocolList as $i => $iValue) {
			$this->queryParameters['ProtocolList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $slbId
     *
     * @return $this
     */
    public function setSlbId($slbId)
    {
        $this->requestParameters['SlbId'] = $slbId;
        $this->queryParameters['SlbId'] = $slbId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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

    /**
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

        return $this;
    }

    /**
     * @param string $networkMode
     *
     * @return $this
     */
    public function setNetworkMode($networkMode)
    {
        $this->requestParameters['NetworkMode'] = $networkMode;
        $this->queryParameters['NetworkMode'] = $networkMode;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
