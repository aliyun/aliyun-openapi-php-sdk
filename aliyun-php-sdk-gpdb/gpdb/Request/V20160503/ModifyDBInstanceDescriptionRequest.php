<?php

namespace gpdb\Request\V20160503;

/**
 * Request of ModifyDBInstanceDescription
 *
 * @method string getDBInstanceId()
 * @method string getDBInstanceDescription()
 */
class ModifyDBInstanceDescriptionRequest extends \RpcAcsRequest
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
            'ModifyDBInstanceDescription',
            'gpdb'
        );
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
     * @param string $dBInstanceDescription
     *
     * @return $this
     */
    public function setDBInstanceDescription($dBInstanceDescription)
    {
        $this->requestParameters['DBInstanceDescription'] = $dBInstanceDescription;
        $this->queryParameters['DBInstanceDescription'] = $dBInstanceDescription;

        return $this;
    }
}
