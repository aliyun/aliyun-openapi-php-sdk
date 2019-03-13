<?php

namespace jarvis\Request\V20180206;

/**
 * Request of CreateCdnIp
 *
 * @method string getCdnIpList()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateCdnIpRequest extends \RpcAcsRequest
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
            'CreateCdnIp',
            'jarvis'
        );
    }

    /**
     * @param string $cdnIpList
     *
     * @return $this
     */
    public function setCdnIpList($cdnIpList)
    {
        $this->requestParameters['CdnIpList'] = $cdnIpList;
        $this->queryParameters['CdnIpList'] = $cdnIpList;

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
