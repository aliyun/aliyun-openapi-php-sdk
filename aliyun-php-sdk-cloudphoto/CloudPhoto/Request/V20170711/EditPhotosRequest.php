<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of EditPhotos
 *
 * @method string getTakenAt()
 * @method string getLibraryId()
 * @method string getShareExpireTime()
 * @method array getPhotoIds()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getTitle()
 */
class EditPhotosRequest extends \RpcAcsRequest
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
            'EditPhotos',
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
     * @param array $photoIds
     *
     * @return $this
     */
    public function setPhotoIds(array $photoIds)
    {
        $this->requestParameters['PhotoIds'] = $photoIds;
        foreach ($photoIds as $i => $iValue) {
            $this->queryParameters['PhotoId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->requestParameters['Title'] = $title;
        $this->queryParameters['Title'] = $title;

        return $this;
    }
}
