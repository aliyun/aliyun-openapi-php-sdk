<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SyncDatabaseMeta
 *
 * @method string getDbId()
 * @method string getLogic()
 * @method string getTid()
 */
class SyncDatabaseMetaRequest extends \RpcAcsRequest
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
            'SyncDatabaseMeta'
        );
    }

    /**
     * @param string $dbId
     *
     * @return $this
     */
    public function setDbId($dbId)
    {
        $this->requestParameters['DbId'] = $dbId;
        $this->queryParameters['DbId'] = $dbId;

        return $this;
    }

    /**
     * @param string $logic
     *
     * @return $this
     */
    public function setLogic($logic)
    {
        $this->requestParameters['Logic'] = $logic;
        $this->queryParameters['Logic'] = $logic;

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
