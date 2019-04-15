<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyWebLockOperateEvents
 *
 * @method string getSourceIp()
 * @method string getOperation()
 * @method string getEventIds()
 */
class ModifyWebLockOperateEventsRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'ModifyWebLockOperateEvents',
            'vipaegis'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->requestParameters['Operation'] = $operation;
        $this->queryParameters['Operation'] = $operation;

        return $this;
    }

    /**
     * @param string $eventIds
     *
     * @return $this
     */
    public function setEventIds($eventIds)
    {
        $this->requestParameters['EventIds'] = $eventIds;
        $this->queryParameters['EventIds'] = $eventIds;

        return $this;
    }
}
