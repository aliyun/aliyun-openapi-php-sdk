<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSignatureDocument
 *
 * @method string getSourceIp()
 * @method string getDocContent()
 * @method string getLang()
 * @method string getDocTitle()
 */
class CreateSignatureDocumentRequest extends \RpcAcsRequest
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
            'cas',
            '2018-08-13',
            'CreateSignatureDocument',
            'cas_esign_fdd'
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
     * @param string $docContent
     *
     * @return $this
     */
    public function setDocContent($docContent)
    {
        $this->requestParameters['DocContent'] = $docContent;
        $this->queryParameters['DocContent'] = $docContent;

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
     * @param string $docTitle
     *
     * @return $this
     */
    public function setDocTitle($docTitle)
    {
        $this->requestParameters['DocTitle'] = $docTitle;
        $this->queryParameters['DocTitle'] = $docTitle;

        return $this;
    }
}
