<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of EditEvent
 *
 * @method string getEventId()
 * @method string getBannerPhotoId()
 * @method string getWatermarkPhotoId()
 * @method string getIdentity()
 * @method string getSplashPhotoId()
 * @method string getLibraryId()
 * @method string getWeixinTitle()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getTitle()
 * @method string getEndAt()
 * @method string getStartAt()
 */
class EditEventRequest extends \RpcAcsRequest
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
            'EditEvent',
            'cloudphoto'
        );
    }

    /**
     * @param string $eventId
     *
     * @return $this
     */
    public function setEventId($eventId)
    {
        $this->requestParameters['EventId'] = $eventId;
        $this->queryParameters['EventId'] = $eventId;

        return $this;
    }

    /**
     * @param string $bannerPhotoId
     *
     * @return $this
     */
    public function setBannerPhotoId($bannerPhotoId)
    {
        $this->requestParameters['BannerPhotoId'] = $bannerPhotoId;
        $this->queryParameters['BannerPhotoId'] = $bannerPhotoId;

        return $this;
    }

    /**
     * @param string $watermarkPhotoId
     *
     * @return $this
     */
    public function setWatermarkPhotoId($watermarkPhotoId)
    {
        $this->requestParameters['WatermarkPhotoId'] = $watermarkPhotoId;
        $this->queryParameters['WatermarkPhotoId'] = $watermarkPhotoId;

        return $this;
    }

    /**
     * @param string $identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->requestParameters['Identity'] = $identity;
        $this->queryParameters['Identity'] = $identity;

        return $this;
    }

    /**
     * @param string $splashPhotoId
     *
     * @return $this
     */
    public function setSplashPhotoId($splashPhotoId)
    {
        $this->requestParameters['SplashPhotoId'] = $splashPhotoId;
        $this->queryParameters['SplashPhotoId'] = $splashPhotoId;

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
     * @param string $weixinTitle
     *
     * @return $this
     */
    public function setWeixinTitle($weixinTitle)
    {
        $this->requestParameters['WeixinTitle'] = $weixinTitle;
        $this->queryParameters['WeixinTitle'] = $weixinTitle;

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

    /**
     * @param string $endAt
     *
     * @return $this
     */
    public function setEndAt($endAt)
    {
        $this->requestParameters['EndAt'] = $endAt;
        $this->queryParameters['EndAt'] = $endAt;

        return $this;
    }

    /**
     * @param string $startAt
     *
     * @return $this
     */
    public function setStartAt($startAt)
    {
        $this->requestParameters['StartAt'] = $startAt;
        $this->queryParameters['StartAt'] = $startAt;

        return $this;
    }
}
