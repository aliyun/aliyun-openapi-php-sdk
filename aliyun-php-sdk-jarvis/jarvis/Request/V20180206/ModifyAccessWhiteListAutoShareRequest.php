<?php

namespace jarvis\Request\V20180206;

/**
 * Request of ModifyAccessWhiteListAutoShare
 *
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getAutoConfig()
 * @method string getProductName()
 * @method string getWhiteListType()
 * @method string getLang()
 * @method string getSourceCode()
 */
class ModifyAccessWhiteListAutoShareRequest extends \RpcAcsRequest
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
            'ModifyAccessWhiteListAutoShare',
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
     * @param string $autoConfig
     *
     * @return $this
     */
    public function setAutoConfig($autoConfig)
    {
        $this->requestParameters['AutoConfig'] = $autoConfig;
        $this->queryParameters['AutoConfig'] = $autoConfig;

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
