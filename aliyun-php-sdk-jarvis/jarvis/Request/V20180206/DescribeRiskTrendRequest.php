<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribeRiskTrend
 *
 * @method string getSourceIp()
 * @method string getQueryProduct()
 * @method string getLang()
 * @method string getPeroid()
 * @method string getSourceCode()
 * @method string getQueryRegionId()
 */
class DescribeRiskTrendRequest extends \RpcAcsRequest
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
            'DescribeRiskTrend',
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
     * @param string $queryProduct
     *
     * @return $this
     */
    public function setQueryProduct($queryProduct)
    {
        $this->requestParameters['QueryProduct'] = $queryProduct;
        $this->queryParameters['QueryProduct'] = $queryProduct;

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
     * @param string $peroid
     *
     * @return $this
     */
    public function setPeroid($peroid)
    {
        $this->requestParameters['Peroid'] = $peroid;
        $this->queryParameters['Peroid'] = $peroid;

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

    /**
     * @param string $queryRegionId
     *
     * @return $this
     */
    public function setQueryRegionId($queryRegionId)
    {
        $this->requestParameters['QueryRegionId'] = $queryRegionId;
        $this->queryParameters['QueryRegionId'] = $queryRegionId;

        return $this;
    }
}
