<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeResourcePackage
 *
 * @method string getSpecification()
 * @method string getOwnerId()
 * @method string getEffectiveDate()
 * @method string getInstanceId()
 */
class UpgradeResourcePackageRequest extends \RpcAcsRequest
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
            'UpgradeResourcePackage',
            'BssOpenApi'
        );
    }

    /**
     * @param string $specification
     *
     * @return $this
     */
    public function setSpecification($specification)
    {
        $this->requestParameters['Specification'] = $specification;
        $this->queryParameters['Specification'] = $specification;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $effectiveDate
     *
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->requestParameters['EffectiveDate'] = $effectiveDate;
        $this->queryParameters['EffectiveDate'] = $effectiveDate;

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
}
