<?php

namespace gpdb\Request\V20160503;

/**
 * Request of ModifyAccountDescription
 *
 * @method string getAccountName()
 * @method string getDBInstanceId()
 * @method string getAccountDescription()
 */
class ModifyAccountDescriptionRequest extends \RpcAcsRequest
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
            'ModifyAccountDescription',
            'gpdb'
        );
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->requestParameters['AccountName'] = $accountName;
        $this->queryParameters['AccountName'] = $accountName;

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
     * @param string $accountDescription
     *
     * @return $this
     */
    public function setAccountDescription($accountDescription)
    {
        $this->requestParameters['AccountDescription'] = $accountDescription;
        $this->queryParameters['AccountDescription'] = $accountDescription;

        return $this;
    }
}
