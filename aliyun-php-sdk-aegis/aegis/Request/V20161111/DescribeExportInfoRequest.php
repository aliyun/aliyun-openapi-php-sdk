<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeExportInfo
 *
 * @method string getSourceIp()
 * @method string getExportId()
 */
class DescribeExportInfoRequest extends \RpcAcsRequest
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
            'DescribeExportInfo',
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
     * @param string $exportId
     *
     * @return $this
     */
    public function setExportId($exportId)
    {
        $this->requestParameters['ExportId'] = $exportId;
        $this->queryParameters['ExportId'] = $exportId;

        return $this;
    }
}
