<?php

namespace afs\Request\V20180112;

/**
 * Request of AnalyzeNvc
 *
 * @method string getSourceIp()
 * @method string getData()
 * @method string getScoreJsonStr()
 */
class AnalyzeNvcRequest extends \RpcAcsRequest
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
            'afs',
            '2018-01-12',
            'AnalyzeNvc',
            'afs'
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
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->requestParameters['Data'] = $data;
        $this->queryParameters['Data'] = $data;

        return $this;
    }

    /**
     * @param string $scoreJsonStr
     *
     * @return $this
     */
    public function setScoreJsonStr($scoreJsonStr)
    {
        $this->requestParameters['ScoreJsonStr'] = $scoreJsonStr;
        $this->queryParameters['ScoreJsonStr'] = $scoreJsonStr;

        return $this;
    }
}
