<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SavePortalTemplate
 *
 * @method string getTextContent()
 * @method string getTempName()
 * @method string getTextAlign()
 * @method string getTextColor()
 * @method string getId()
 * @method string getOssFileId()
 */
class SavePortalTemplateRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'SavePortalTemplate',
            'cloudwf'
        );
    }

    /**
     * @param string $textContent
     *
     * @return $this
     */
    public function setTextContent($textContent)
    {
        $this->requestParameters['TextContent'] = $textContent;
        $this->queryParameters['TextContent'] = $textContent;

        return $this;
    }

    /**
     * @param string $tempName
     *
     * @return $this
     */
    public function setTempName($tempName)
    {
        $this->requestParameters['TempName'] = $tempName;
        $this->queryParameters['TempName'] = $tempName;

        return $this;
    }

    /**
     * @param string $textAlign
     *
     * @return $this
     */
    public function setTextAlign($textAlign)
    {
        $this->requestParameters['TextAlign'] = $textAlign;
        $this->queryParameters['TextAlign'] = $textAlign;

        return $this;
    }

    /**
     * @param string $textColor
     *
     * @return $this
     */
    public function setTextColor($textColor)
    {
        $this->requestParameters['TextColor'] = $textColor;
        $this->queryParameters['TextColor'] = $textColor;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $ossFileId
     *
     * @return $this
     */
    public function setOssFileId($ossFileId)
    {
        $this->requestParameters['OssFileId'] = $ossFileId;
        $this->queryParameters['OssFileId'] = $ossFileId;

        return $this;
    }
}
