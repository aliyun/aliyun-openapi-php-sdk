<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of CreatePhoto
 *
 * @method string getTakenAt()
 * @method string getPhotoTitle()
 * @method string getLibraryId()
 * @method string getShareExpireTime()
 * @method string getStoreName()
 * @method string getUploadType()
 * @method string getRemark()
 * @method string getSessionId()
 * @method string getStaging()
 * @method string getFileId()
 */
class CreatePhotoRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'CloudPhoto',
            '2017-07-11',
            'CreatePhoto',
            'cloudphoto'
        );
    }

    /**
     * @param string $takenAt
     *
     * @return $this
     */
    public function setTakenAt($takenAt)
    {
        $this->requestParameters['TakenAt'] = $takenAt;
        $this->queryParameters['TakenAt'] = $takenAt;

        return $this;
    }

    /**
     * @param string $photoTitle
     *
     * @return $this
     */
    public function setPhotoTitle($photoTitle)
    {
        $this->requestParameters['PhotoTitle'] = $photoTitle;
        $this->queryParameters['PhotoTitle'] = $photoTitle;

        return $this;
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        $this->requestParameters['LibraryId'] = $libraryId;
        $this->queryParameters['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @param string $shareExpireTime
     *
     * @return $this
     */
    public function setShareExpireTime($shareExpireTime)
    {
        $this->requestParameters['ShareExpireTime'] = $shareExpireTime;
        $this->queryParameters['ShareExpireTime'] = $shareExpireTime;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $uploadType
     *
     * @return $this
     */
    public function setUploadType($uploadType)
    {
        $this->requestParameters['UploadType'] = $uploadType;
        $this->queryParameters['UploadType'] = $uploadType;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->requestParameters['SessionId'] = $sessionId;
        $this->queryParameters['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @param string $staging
     *
     * @return $this
     */
    public function setStaging($staging)
    {
        $this->requestParameters['Staging'] = $staging;
        $this->queryParameters['Staging'] = $staging;

        return $this;
    }

    /**
     * @param string $fileId
     *
     * @return $this
     */
    public function setFileId($fileId)
    {
        $this->requestParameters['FileId'] = $fileId;
        $this->queryParameters['FileId'] = $fileId;

        return $this;
    }
}
