<?php

namespace gpdb\Request\V20160503;

/**
 * Request of ModifySQLCollectorPolicy
 *
 * @method string getSQLCollectorStatus()
 * @method string getDBInstanceId()
 */
class ModifySQLCollectorPolicyRequest extends \RpcAcsRequest
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
            'ModifySQLCollectorPolicy',
            'gpdb'
        );
    }

    /**
     * @param string $sQLCollectorStatus
     *
     * @return $this
     */
    public function setSQLCollectorStatus($sQLCollectorStatus)
    {
        $this->requestParameters['SQLCollectorStatus'] = $sQLCollectorStatus;
        $this->queryParameters['SQLCollectorStatus'] = $sQLCollectorStatus;

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
