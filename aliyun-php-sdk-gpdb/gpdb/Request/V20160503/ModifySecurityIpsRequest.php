<?php

namespace gpdb\Request\V20160503;

/**
 * Request of ModifySecurityIps
 *
 * @method string getSecurityIPList()
 * @method string getDBInstanceIPArrayName()
 * @method string getDBInstanceIPArrayAttribute()
 * @method string getDBInstanceId()
 */
class ModifySecurityIpsRequest extends \RpcAcsRequest
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
            'ModifySecurityIps',
            'gpdb'
        );
    }

    /**
     * @param string $securityIPList
     *
     * @return $this
     */
    public function setSecurityIPList($securityIPList)
    {
        $this->requestParameters['SecurityIPList'] = $securityIPList;
        $this->queryParameters['SecurityIPList'] = $securityIPList;

        return $this;
    }

    /**
     * @param string $dBInstanceIPArrayName
     *
     * @return $this
     */
    public function setDBInstanceIPArrayName($dBInstanceIPArrayName)
    {
        $this->requestParameters['DBInstanceIPArrayName'] = $dBInstanceIPArrayName;
        $this->queryParameters['DBInstanceIPArrayName'] = $dBInstanceIPArrayName;

        return $this;
    }

    /**
     * @param string $dBInstanceIPArrayAttribute
     *
     * @return $this
     */
    public function setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
    {
        $this->requestParameters['DBInstanceIPArrayAttribute'] = $dBInstanceIPArrayAttribute;
        $this->queryParameters['DBInstanceIPArrayAttribute'] = $dBInstanceIPArrayAttribute;

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
}
