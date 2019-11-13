<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AllocateCostUnitResource
 *
 * @method array getResourceInstanceLists()
 * @method string getFromUnitId()
 * @method string getToUnitId()
 * @method string getFromUnitUserId()
 * @method string getToUnitUserId()
 */
class AllocateCostUnitResourceRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'AllocateCostUnitResource',
            'BssOpenApi'
        );
    }

    /**
     * @param array $resourceInstanceList
     *
     * @return $this
     */
	public function setResourceInstanceLists(array $resourceInstanceList)
	{
	    $this->requestParameters['ResourceInstanceLists'] = $resourceInstanceList;
		foreach ($resourceInstanceList as $depth1 => $depth1Value) {
			$this->queryParameters['ResourceInstanceList.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			$this->queryParameters['ResourceInstanceList.' . ($depth1 + 1) . '.CommodityCode'] = $depth1Value['CommodityCode'];
			$this->queryParameters['ResourceInstanceList.' . ($depth1 + 1) . '.ResourceUserId'] = $depth1Value['ResourceUserId'];
		}

		return $this;
    }

    /**
     * @param string $fromUnitId
     *
     * @return $this
     */
    public function setFromUnitId($fromUnitId)
    {
        $this->requestParameters['FromUnitId'] = $fromUnitId;
        $this->queryParameters['FromUnitId'] = $fromUnitId;

        return $this;
    }

    /**
     * @param string $toUnitId
     *
     * @return $this
     */
    public function setToUnitId($toUnitId)
    {
        $this->requestParameters['ToUnitId'] = $toUnitId;
        $this->queryParameters['ToUnitId'] = $toUnitId;

        return $this;
    }

    /**
     * @param string $fromUnitUserId
     *
     * @return $this
     */
    public function setFromUnitUserId($fromUnitUserId)
    {
        $this->requestParameters['FromUnitUserId'] = $fromUnitUserId;
        $this->queryParameters['FromUnitUserId'] = $fromUnitUserId;

        return $this;
    }

    /**
     * @param string $toUnitUserId
     *
     * @return $this
     */
    public function setToUnitUserId($toUnitUserId)
    {
        $this->requestParameters['ToUnitUserId'] = $toUnitUserId;
        $this->queryParameters['ToUnitUserId'] = $toUnitUserId;

        return $this;
    }
}
