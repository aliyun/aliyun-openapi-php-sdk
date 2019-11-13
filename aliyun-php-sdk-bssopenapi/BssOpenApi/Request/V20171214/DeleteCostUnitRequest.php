<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteCostUnit
 *
 * @method string getUnitId()
 * @method string getOwnerUid()
 */
class DeleteCostUnitRequest extends \RpcAcsRequest
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
            'DeleteCostUnit',
            'BssOpenApi'
        );
    }

    /**
     * @param string $unitId
     *
     * @return $this
     */
    public function setUnitId($unitId)
    {
        $this->requestParameters['UnitId'] = $unitId;
        $this->queryParameters['UnitId'] = $unitId;

        return $this;
    }

    /**
     * @param string $ownerUid
     *
     * @return $this
     */
    public function setOwnerUid($ownerUid)
    {
        $this->requestParameters['OwnerUid'] = $ownerUid;
        $this->queryParameters['OwnerUid'] = $ownerUid;

        return $this;
    }
}
