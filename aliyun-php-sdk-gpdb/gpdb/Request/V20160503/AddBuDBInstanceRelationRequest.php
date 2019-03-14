<?php

namespace gpdb\Request\V20160503;

/**
 * Request of AddBuDBInstanceRelation
 *
 * @method string getBusinessUnit()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 */
class AddBuDBInstanceRelationRequest extends \RpcAcsRequest
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
            'gpdb',
            '2016-05-03',
            'AddBuDBInstanceRelation',
            'gpdb'
        );
    }

    /**
     * @param string $businessUnit
     *
     * @return $this
     */
    public function setBusinessUnit($businessUnit)
    {
        $this->requestParameters['BusinessUnit'] = $businessUnit;
        $this->queryParameters['BusinessUnit'] = $businessUnit;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
}
