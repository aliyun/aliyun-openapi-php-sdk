<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribeRiskListDetail
 *
 * @method string getriskType()
 * @method string getSourceIp()
 * @method string getpageSize()
 * @method string getqueryProduct()
 * @method string getcurrentPage()
 * @method string getriskDescribe()
 * @method string getLang()
 * @method string getsrcUid()
 * @method string getsourceCode()
 * @method string getqueryRegionId()
 * @method string getstatus()
 */
class DescribeRiskListDetailRequest extends \RpcAcsRequest
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
            'DescribeRiskListDetail',
            'jarvis'
        );
    }

    /**
     * @param string $riskType
     *
     * @return $this
     */
    public function setriskType($riskType)
    {
        $this->requestParameters['riskType'] = $riskType;
        $this->queryParameters['riskType'] = $riskType;

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
     * @param string $queryProduct
     *
     * @return $this
     */
    public function setqueryProduct($queryProduct)
    {
        $this->requestParameters['queryProduct'] = $queryProduct;
        $this->queryParameters['queryProduct'] = $queryProduct;

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
     * @param string $riskDescribe
     *
     * @return $this
     */
    public function setriskDescribe($riskDescribe)
    {
        $this->requestParameters['riskDescribe'] = $riskDescribe;
        $this->queryParameters['riskDescribe'] = $riskDescribe;

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

    /**
     * @param string $queryRegionId
     *
     * @return $this
     */
    public function setqueryRegionId($queryRegionId)
    {
        $this->requestParameters['queryRegionId'] = $queryRegionId;
        $this->queryParameters['queryRegionId'] = $queryRegionId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setstatus($status)
    {
        $this->requestParameters['status'] = $status;
        $this->queryParameters['status'] = $status;

        return $this;
    }
}
