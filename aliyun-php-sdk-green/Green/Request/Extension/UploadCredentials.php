<?php
/**
 * Created by PhpStorm.
 * User: liuhai.lh
 * Date: 2018/9/6
 * Time: 下午6:52
 */

namespace Green\Request\Extension;

class UploadCredentials
{

    private $accessKeyId;
    private $accessKeySecret;
    private $securityToken;
    private $expiredTime;
    private $ossEndpoint;
    private $uploadBucket;
    private $uploadFolder;

    public function __construct($accessKeyId, $accessKeySecret, $securityToken, $expiredTime, $ossEndpoint, $uploadBucket, $uploadFolder)
    {
        $this->accessKeyId = $accessKeyId;
        $this->accessKeySecret = $accessKeySecret;
        $this->securityToken = $securityToken;
        $this->expiredTime = $expiredTime;
        $this->ossEndpoint = $ossEndpoint;
        $this->uploadBucket = $uploadBucket;
        $this->uploadFolder = $uploadFolder;
    }

    /**
     * @return mixed
     */
    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    /**
     * @param mixed $accessKeyId
     */
    public function setAccessKeyId($accessKeyId)
    {
        $this->accessKeyId = $accessKeyId;
    }

    /**
     * @return mixed
     */
    public function getAccessKeySecret()
    {
        return $this->accessKeySecret;
    }

    /**
     * @param mixed $accessKeySecret
     */
    public function setAccessKeySecret($accessKeySecret)
    {
        $this->accessKeySecret = $accessKeySecret;
    }

    /**
     * @return mixed
     */
    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    /**
     * @param mixed $securityToken
     */
    public function setSecurityToken($securityToken)
    {
        $this->securityToken = $securityToken;
    }

    /**
     * @return mixed
     */
    public function getExpiredTime()
    {
        return $this->expiredTime;
    }

    /**
     * @param mixed $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
    }

    /**
     * @return mixed
     */
    public function getOssEndpoint()
    {
        return $this->ossEndpoint;
    }

    /**
     * @param mixed $ossEndpoint
     */
    public function setOssEndpoint($ossEndpoint)
    {
        $this->ossEndpoint = $ossEndpoint;
    }

    /**
     * @return mixed
     */
    public function getUploadBucket()
    {
        return $this->uploadBucket;
    }

    /**
     * @param mixed $uploadBucket
     */
    public function setUploadBucket($uploadBucket)
    {
        $this->uploadBucket = $uploadBucket;
    }

    /**
     * @return mixed
     */
    public function getUploadFolder()
    {
        return $this->uploadFolder;
    }

    /**
     * @param mixed $uploadFolder
     */
    public function setUploadFolder($uploadFolder)
    {
        $this->uploadFolder = $uploadFolder;
    }


}