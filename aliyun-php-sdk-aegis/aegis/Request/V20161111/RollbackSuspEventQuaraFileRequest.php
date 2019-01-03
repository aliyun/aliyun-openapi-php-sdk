<?php

namespace aegis\Request\V20161111;

/**
 * Request of RollbackSuspEventQuaraFile
 *
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getQuaraFileId()
 */
class RollbackSuspEventQuaraFileRequest extends \RpcAcsRequest
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
            'RollbackSuspEventQuaraFile',
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
     * @param string $quaraFileId
     *
     * @return $this
     */
    public function setQuaraFileId($quaraFileId)
    {
        $this->requestParameters['QuaraFileId'] = $quaraFileId;
        $this->queryParameters['QuaraFileId'] = $quaraFileId;

        return $this;
    }
}
