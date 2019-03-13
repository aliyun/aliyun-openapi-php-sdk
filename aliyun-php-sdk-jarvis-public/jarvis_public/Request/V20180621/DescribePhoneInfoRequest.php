<?php

namespace jarvis_public\Request\V20180621;

/**
 * Request of DescribePhoneInfo
 *
 * @method string getSourceIp()
 * @method string getphoneNum()
 * @method string getLang()
 * @method string getsourceCode()
 */
class DescribePhoneInfoRequest extends \RpcAcsRequest
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
            'jarvis-public',
            '2018-06-21',
            'DescribePhoneInfo',
            'jarvis-public'
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
     * @param string $phoneNum
     *
     * @return $this
     */
    public function setphoneNum($phoneNum)
    {
        $this->requestParameters['phoneNum'] = $phoneNum;
        $this->queryParameters['phoneNum'] = $phoneNum;

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
    public function setsourceCode($sourceCode)
    {
        $this->requestParameters['sourceCode'] = $sourceCode;
        $this->queryParameters['sourceCode'] = $sourceCode;

        return $this;
    }
}
