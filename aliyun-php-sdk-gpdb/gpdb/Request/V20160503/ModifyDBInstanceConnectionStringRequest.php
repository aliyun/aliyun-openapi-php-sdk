<?php

namespace gpdb\Request\V20160503;

/**
 * Request of ModifyDBInstanceConnectionString
 *
 * @method string getConnectionStringPrefix()
 * @method string getPort()
 * @method string getDBInstanceId()
 * @method string getCurrentConnectionString()
 */
class ModifyDBInstanceConnectionStringRequest extends \RpcAcsRequest
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
            'ModifyDBInstanceConnectionString',
            'gpdb'
        );
    }

    /**
     * @param string $connectionStringPrefix
     *
     * @return $this
     */
    public function setConnectionStringPrefix($connectionStringPrefix)
    {
        $this->requestParameters['ConnectionStringPrefix'] = $connectionStringPrefix;
        $this->queryParameters['ConnectionStringPrefix'] = $connectionStringPrefix;

        return $this;
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

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
     * @param string $currentConnectionString
     *
     * @return $this
     */
    public function setCurrentConnectionString($currentConnectionString)
    {
        $this->requestParameters['CurrentConnectionString'] = $currentConnectionString;
        $this->queryParameters['CurrentConnectionString'] = $currentConnectionString;

        return $this;
    }
}
