<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribePunishList
 *
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getpageSize()
 * @method string getcurrentPage()
 * @method string getPunishStatus()
 * @method string getLang()
 * @method string getsrcUid()
 * @method string getsourceCode()
 */
class DescribePunishListRequest extends \RpcAcsRequest
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
            'DescribePunishList',
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
     * @param string $punishStatus
     *
     * @return $this
     */
    public function setPunishStatus($punishStatus)
    {
        $this->requestParameters['PunishStatus'] = $punishStatus;
        $this->queryParameters['PunishStatus'] = $punishStatus;

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
