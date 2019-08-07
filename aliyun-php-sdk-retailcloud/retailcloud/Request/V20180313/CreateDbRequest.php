<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDb
 *
 * @method string getDbName()
 * @method string getDbInstanceId()
 * @method string getDbDescription()
 * @method string getCharacterSetName()
 */
class CreateDbRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'CreateDb',
            'retailcloud'
        );
    }

    /**
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        $this->requestParameters['DbName'] = $dbName;
        $this->queryParameters['DbName'] = $dbName;

        return $this;
    }

    /**
     * @param string $dbInstanceId
     *
     * @return $this
     */
    public function setDbInstanceId($dbInstanceId)
    {
        $this->requestParameters['DbInstanceId'] = $dbInstanceId;
        $this->queryParameters['DbInstanceId'] = $dbInstanceId;

        return $this;
    }

    /**
     * @param string $dbDescription
     *
     * @return $this
     */
    public function setDbDescription($dbDescription)
    {
        $this->requestParameters['DbDescription'] = $dbDescription;
        $this->queryParameters['DbDescription'] = $dbDescription;

        return $this;
    }

    /**
     * @param string $characterSetName
     *
     * @return $this
     */
    public function setCharacterSetName($characterSetName)
    {
        $this->requestParameters['CharacterSetName'] = $characterSetName;
        $this->queryParameters['CharacterSetName'] = $characterSetName;

        return $this;
    }
}
