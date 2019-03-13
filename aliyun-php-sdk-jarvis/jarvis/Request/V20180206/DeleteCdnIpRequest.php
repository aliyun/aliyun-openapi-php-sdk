<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DeleteCdnIp
 *
 * @method string getItemId()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getCdnIp()
 * @method string getLang()
 * @method string getSourceCode()
 */
class DeleteCdnIpRequest extends \RpcAcsRequest
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
            'DeleteCdnIp',
            'jarvis'
        );
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->requestParameters['ItemId'] = $itemId;
        $this->queryParameters['ItemId'] = $itemId;

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
     * @param string $cdnIp
     *
     * @return $this
     */
    public function setCdnIp($cdnIp)
    {
        $this->requestParameters['CdnIp'] = $cdnIp;
        $this->queryParameters['CdnIp'] = $cdnIp;

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
