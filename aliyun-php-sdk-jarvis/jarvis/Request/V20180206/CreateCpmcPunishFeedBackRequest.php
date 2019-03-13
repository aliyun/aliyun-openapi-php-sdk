<?php

namespace jarvis\Request\V20180206;

/**
 * Request of CreateCpmcPunishFeedBack
 *
 * @method string getFeedBack()
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getDstPort()
 * @method string getProtocolName()
 * @method string getSrcPort()
 * @method string getPunishType()
 * @method string getGmtCreate()
 * @method string getDstIP()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateCpmcPunishFeedBackRequest extends \RpcAcsRequest
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
            'CreateCpmcPunishFeedBack',
            'jarvis'
        );
    }

    /**
     * @param string $feedBack
     *
     * @return $this
     */
    public function setFeedBack($feedBack)
    {
        $this->requestParameters['FeedBack'] = $feedBack;
        $this->queryParameters['FeedBack'] = $feedBack;

        return $this;
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
     * @param string $dstPort
     *
     * @return $this
     */
    public function setDstPort($dstPort)
    {
        $this->requestParameters['DstPort'] = $dstPort;
        $this->queryParameters['DstPort'] = $dstPort;

        return $this;
    }

    /**
     * @param string $protocolName
     *
     * @return $this
     */
    public function setProtocolName($protocolName)
    {
        $this->requestParameters['ProtocolName'] = $protocolName;
        $this->queryParameters['ProtocolName'] = $protocolName;

        return $this;
    }

    /**
     * @param string $srcPort
     *
     * @return $this
     */
    public function setSrcPort($srcPort)
    {
        $this->requestParameters['SrcPort'] = $srcPort;
        $this->queryParameters['SrcPort'] = $srcPort;

        return $this;
    }

    /**
     * @param string $punishType
     *
     * @return $this
     */
    public function setPunishType($punishType)
    {
        $this->requestParameters['PunishType'] = $punishType;
        $this->queryParameters['PunishType'] = $punishType;

        return $this;
    }

    /**
     * @param string $gmtCreate
     *
     * @return $this
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->requestParameters['GmtCreate'] = $gmtCreate;
        $this->queryParameters['GmtCreate'] = $gmtCreate;

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
