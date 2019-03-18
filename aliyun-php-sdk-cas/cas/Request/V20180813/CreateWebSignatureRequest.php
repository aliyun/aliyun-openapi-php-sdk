<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateWebSignature
 *
 * @method string getQuantity()
 * @method string getHandSignImg()
 * @method string getDocId()
 * @method string getCustomApi()
 * @method string getPositionPage()
 * @method string getDocTitle()
 * @method string getPositionX()
 * @method string getPositionY()
 * @method string getSourceIp()
 * @method string getPeopleId()
 * @method string getPositionType()
 * @method string getSignKeyword()
 * @method string getNotifyUrl()
 * @method string getValidity()
 * @method string getReturnUrl()
 * @method string getLang()
 * @method string getKeywordStrategy()
 */
class CreateWebSignatureRequest extends \RpcAcsRequest
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
            'CreateWebSignature',
            'cas_esign_fdd'
        );
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->requestParameters['Quantity'] = $quantity;
        $this->queryParameters['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @param string $handSignImg
     *
     * @return $this
     */
    public function setHandSignImg($handSignImg)
    {
        $this->requestParameters['HandSignImg'] = $handSignImg;
        $this->queryParameters['HandSignImg'] = $handSignImg;

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
     * @param string $customApi
     *
     * @return $this
     */
    public function setCustomApi($customApi)
    {
        $this->requestParameters['CustomApi'] = $customApi;
        $this->queryParameters['CustomApi'] = $customApi;

        return $this;
    }

    /**
     * @param string $positionPage
     *
     * @return $this
     */
    public function setPositionPage($positionPage)
    {
        $this->requestParameters['PositionPage'] = $positionPage;
        $this->queryParameters['PositionPage'] = $positionPage;

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

    /**
     * @param string $positionX
     *
     * @return $this
     */
    public function setPositionX($positionX)
    {
        $this->requestParameters['PositionX'] = $positionX;
        $this->queryParameters['PositionX'] = $positionX;

        return $this;
    }

    /**
     * @param string $positionY
     *
     * @return $this
     */
    public function setPositionY($positionY)
    {
        $this->requestParameters['PositionY'] = $positionY;
        $this->queryParameters['PositionY'] = $positionY;

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
     * @param string $peopleId
     *
     * @return $this
     */
    public function setPeopleId($peopleId)
    {
        $this->requestParameters['PeopleId'] = $peopleId;
        $this->queryParameters['PeopleId'] = $peopleId;

        return $this;
    }

    /**
     * @param string $positionType
     *
     * @return $this
     */
    public function setPositionType($positionType)
    {
        $this->requestParameters['PositionType'] = $positionType;
        $this->queryParameters['PositionType'] = $positionType;

        return $this;
    }

    /**
     * @param string $signKeyword
     *
     * @return $this
     */
    public function setSignKeyword($signKeyword)
    {
        $this->requestParameters['SignKeyword'] = $signKeyword;
        $this->queryParameters['SignKeyword'] = $signKeyword;

        return $this;
    }

    /**
     * @param string $notifyUrl
     *
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->requestParameters['NotifyUrl'] = $notifyUrl;
        $this->queryParameters['NotifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * @param string $validity
     *
     * @return $this
     */
    public function setValidity($validity)
    {
        $this->requestParameters['Validity'] = $validity;
        $this->queryParameters['Validity'] = $validity;

        return $this;
    }

    /**
     * @param string $returnUrl
     *
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->requestParameters['ReturnUrl'] = $returnUrl;
        $this->queryParameters['ReturnUrl'] = $returnUrl;

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
     * @param string $keywordStrategy
     *
     * @return $this
     */
    public function setKeywordStrategy($keywordStrategy)
    {
        $this->requestParameters['KeywordStrategy'] = $keywordStrategy;
        $this->queryParameters['KeywordStrategy'] = $keywordStrategy;

        return $this;
    }
}
