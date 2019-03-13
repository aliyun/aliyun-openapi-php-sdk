<?php

namespace jarvis\Request\V20180206;

/**
 * Request of CreateConsoleAccessWhiteList
 *
 * @method string getNote()
 * @method string getResourceOwnerId()
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getDstPort()
 * @method string getInstanceIdList()
 * @method string getLiveTime()
 * @method string getProductName()
 * @method string getWhiteListType()
 * @method string getInstanceInfoList()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateConsoleAccessWhiteListRequest extends \RpcAcsRequest
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
            'CreateConsoleAccessWhiteList',
            'jarvis'
        );
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->requestParameters['Note'] = $note;
        $this->queryParameters['Note'] = $note;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

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
     * @param string $instanceIdList
     *
     * @return $this
     */
    public function setInstanceIdList($instanceIdList)
    {
        $this->requestParameters['InstanceIdList'] = $instanceIdList;
        $this->queryParameters['InstanceIdList'] = $instanceIdList;

        return $this;
    }

    /**
     * @param string $liveTime
     *
     * @return $this
     */
    public function setLiveTime($liveTime)
    {
        $this->requestParameters['LiveTime'] = $liveTime;
        $this->queryParameters['LiveTime'] = $liveTime;

        return $this;
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->requestParameters['ProductName'] = $productName;
        $this->queryParameters['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $whiteListType
     *
     * @return $this
     */
    public function setWhiteListType($whiteListType)
    {
        $this->requestParameters['WhiteListType'] = $whiteListType;
        $this->queryParameters['WhiteListType'] = $whiteListType;

        return $this;
    }

    /**
     * @param string $instanceInfoList
     *
     * @return $this
     */
    public function setInstanceInfoList($instanceInfoList)
    {
        $this->requestParameters['InstanceInfoList'] = $instanceInfoList;
        $this->queryParameters['InstanceInfoList'] = $instanceInfoList;

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
