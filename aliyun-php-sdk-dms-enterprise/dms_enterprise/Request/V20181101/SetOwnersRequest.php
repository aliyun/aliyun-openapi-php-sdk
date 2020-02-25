<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetOwners
 *
 * @method string getResourceId()
 * @method string getOwnerIds()
 * @method string getOwnerType()
 * @method string getTid()
 */
class SetOwnersRequest extends \RpcAcsRequest
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
            'dms-enterprise',
            '2018-11-01',
            'SetOwners'
        );
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $ownerIds
     *
     * @return $this
     */
    public function setOwnerIds($ownerIds)
    {
        $this->requestParameters['OwnerIds'] = $ownerIds;
        $this->queryParameters['OwnerIds'] = $ownerIds;

        return $this;
    }

    /**
     * @param string $ownerType
     *
     * @return $this
     */
    public function setOwnerType($ownerType)
    {
        $this->requestParameters['OwnerType'] = $ownerType;
        $this->queryParameters['OwnerType'] = $ownerType;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

        return $this;
    }
}
