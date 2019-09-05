<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyMedia
 *
 * @method string getDescription()
 * @method string getOssFilePath()
 * @method string getUploadResult()
 * @method string getType()
 * @method string getContent()
 * @method string getOssFileName()
 * @method string getInstanceId()
 * @method string getFileName()
 * @method string getName()
 */
class ModifyMediaRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'ModifyMedia'
        );
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $ossFilePath
     *
     * @return $this
     */
    public function setOssFilePath($ossFilePath)
    {
        $this->requestParameters['OssFilePath'] = $ossFilePath;
        $this->queryParameters['OssFilePath'] = $ossFilePath;

        return $this;
    }

    /**
     * @param string $uploadResult
     *
     * @return $this
     */
    public function setUploadResult($uploadResult)
    {
        $this->requestParameters['UploadResult'] = $uploadResult;
        $this->queryParameters['UploadResult'] = $uploadResult;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

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

    /**
     * @param string $ossFileName
     *
     * @return $this
     */
    public function setOssFileName($ossFileName)
    {
        $this->requestParameters['OssFileName'] = $ossFileName;
        $this->queryParameters['OssFileName'] = $ossFileName;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->requestParameters['FileName'] = $fileName;
        $this->queryParameters['FileName'] = $fileName;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
