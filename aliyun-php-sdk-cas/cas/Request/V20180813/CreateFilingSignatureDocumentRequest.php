<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateFilingSignatureDocument
 *
 * @method string getSourceIp()
 * @method string getDocId()
 * @method string getLang()
 */
class CreateFilingSignatureDocumentRequest extends \RpcAcsRequest
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
            'CreateFilingSignatureDocument',
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
     * @param string $docId
     *
     * @return $this
     */
    public function setDocId($docId)
    {
        $this->requestParameters['DocId'] = $docId;
        $this->queryParameters['DocId'] = $docId;

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
}
