<?php

namespace Edas\Request\V20170801;

/**
 * Request of RollbackApplication
 *
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getBatchWaitTime()
 * @method string getBatch()
 * @method string getHistoryVersion()
 */
class RollbackApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/co_rollback';

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
            'Edas',
            '2017-08-01',
            'RollbackApplication'
        );
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $batchWaitTime
     *
     * @return $this
     */
    public function setBatchWaitTime($batchWaitTime)
    {
        $this->requestParameters['BatchWaitTime'] = $batchWaitTime;
        $this->queryParameters['BatchWaitTime'] = $batchWaitTime;

        return $this;
    }

    /**
     * @param string $batch
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->requestParameters['Batch'] = $batch;
        $this->queryParameters['Batch'] = $batch;

        return $this;
    }

    /**
     * @param string $historyVersion
     *
     * @return $this
     */
    public function setHistoryVersion($historyVersion)
    {
        $this->requestParameters['HistoryVersion'] = $historyVersion;
        $this->queryParameters['HistoryVersion'] = $historyVersion;

        return $this;
    }
}
