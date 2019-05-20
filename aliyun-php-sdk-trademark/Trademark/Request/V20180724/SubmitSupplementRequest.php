<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitSupplement
 *
 * @method string getUploadOssKeyList()
 * @method string getId()
 * @method string getContent()
 */
class SubmitSupplementRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'SubmitSupplement',
            'trademark'
        );
    }

    /**
     * @param string $uploadOssKeyList
     *
     * @return $this
     */
    public function setUploadOssKeyList($uploadOssKeyList)
    {
        $this->requestParameters['UploadOssKeyList'] = $uploadOssKeyList;
        $this->queryParameters['UploadOssKeyList'] = $uploadOssKeyList;

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
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

        return $this;
    }
}
