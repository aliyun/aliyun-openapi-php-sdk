<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCostUnit
 *
 * @method array getUnitEntityLists()
 */
class ModifyCostUnitRequest extends \RpcAcsRequest
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
            'ModifyCostUnit',
            'BssOpenApi'
        );
    }

    /**
     * @param array $unitEntityList
     *
     * @return $this
     */
	public function setUnitEntityLists(array $unitEntityList)
	{
	    $this->requestParameters['UnitEntityLists'] = $unitEntityList;
		foreach ($unitEntityList as $depth1 => $depth1Value) {
			$this->queryParameters['UnitEntityList.' . ($depth1 + 1) . '.NewUnitName'] = $depth1Value['NewUnitName'];
			$this->queryParameters['UnitEntityList.' . ($depth1 + 1) . '.UnitId'] = $depth1Value['UnitId'];
			$this->queryParameters['UnitEntityList.' . ($depth1 + 1) . '.OwnerUid'] = $depth1Value['OwnerUid'];
		}

		return $this;
    }
}
