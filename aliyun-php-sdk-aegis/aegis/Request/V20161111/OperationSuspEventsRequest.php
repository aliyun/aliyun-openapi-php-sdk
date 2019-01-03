<?php

namespace aegis\Request\V20161111;

/**
 * Request of OperationSuspEvents
 *
 * @method string getSourceIp()
 * @method string getWarnType()
 * @method string getSuspiciousEventIds()
 * @method string getFrom()
 * @method string getSubOperation()
 * @method string getOperation()
 */
class OperationSuspEventsRequest extends \RpcAcsRequest
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
            'OperationSuspEvents',
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
     * @param string $warnType
     *
     * @return $this
     */
    public function setWarnType($warnType)
    {
        $this->requestParameters['WarnType'] = $warnType;
        $this->queryParameters['WarnType'] = $warnType;

        return $this;
    }

    /**
     * @param string $suspiciousEventIds
     *
     * @return $this
     */
    public function setSuspiciousEventIds($suspiciousEventIds)
    {
        $this->requestParameters['SuspiciousEventIds'] = $suspiciousEventIds;
        $this->queryParameters['SuspiciousEventIds'] = $suspiciousEventIds;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->requestParameters['From'] = $from;
        $this->queryParameters['From'] = $from;

        return $this;
    }

    /**
     * @param string $subOperation
     *
     * @return $this
     */
    public function setSubOperation($subOperation)
    {
        $this->requestParameters['SubOperation'] = $subOperation;
        $this->queryParameters['SubOperation'] = $subOperation;

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
}
