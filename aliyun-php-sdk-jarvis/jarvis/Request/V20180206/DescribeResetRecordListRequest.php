<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribeResetRecordList
 *
 * @method string getSrcIP()
 * @method string getPeriod()
 * @method string getSourceIp()
 * @method string getpageSize()
 * @method string getcurrentPage()
 * @method string getDstIP()
 * @method string getRegion()
 * @method string getLang()
 * @method string getSourceCode()
 */
class DescribeResetRecordListRequest extends \RpcAcsRequest
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
            'jarvis',
            '2018-02-06',
            'DescribeResetRecordList',
            'jarvis'
        );
    }

    /**
     * @param string $srcIP
     *
     * @return $this
     */
    public function setSrcIP($srcIP)
    {
        $this->requestParameters['SrcIP'] = $srcIP;
        $this->queryParameters['SrcIP'] = $srcIP;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        $this->requestParameters['pageSize'] = $pageSize;
        $this->queryParameters['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setcurrentPage($currentPage)
    {
        $this->requestParameters['currentPage'] = $currentPage;
        $this->queryParameters['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $dstIP
     *
     * @return $this
     */
    public function setDstIP($dstIP)
    {
        $this->requestParameters['DstIP'] = $dstIP;
        $this->queryParameters['DstIP'] = $dstIP;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->requestParameters['SourceCode'] = $sourceCode;
        $this->queryParameters['SourceCode'] = $sourceCode;

        return $this;
    }
}
