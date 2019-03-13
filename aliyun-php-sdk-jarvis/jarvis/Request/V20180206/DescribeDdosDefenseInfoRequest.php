<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribeDdosDefenseInfo
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getsrcUid()
 * @method string getsourceCode()
 */
class DescribeDdosDefenseInfoRequest extends \RpcAcsRequest
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
            'DescribeDdosDefenseInfo',
            'jarvis'
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
     * @param string $srcUid
     *
     * @return $this
     */
    public function setsrcUid($srcUid)
    {
        $this->requestParameters['srcUid'] = $srcUid;
        $this->queryParameters['srcUid'] = $srcUid;

        return $this;
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setsourceCode($sourceCode)
    {
        $this->requestParameters['sourceCode'] = $sourceCode;
        $this->queryParameters['sourceCode'] = $sourceCode;

        return $this;
    }
}
