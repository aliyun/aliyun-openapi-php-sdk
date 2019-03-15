<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of ListTimeLines
 *
 * @method string getCursor()
 * @method string getPhotoSize()
 * @method string getTimeLineCount()
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getTimeLineUnit()
 * @method string getFilterBy()
 * @method string getDirection()
 * @method string getOrder()
 */
class ListTimeLinesRequest extends \RpcAcsRequest
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
            'ListTimeLines',
            'cloudphoto'
        );
    }

    /**
     * @param string $cursor
     *
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->requestParameters['Cursor'] = $cursor;
        $this->queryParameters['Cursor'] = $cursor;

        return $this;
    }

    /**
     * @param string $photoSize
     *
     * @return $this
     */
    public function setPhotoSize($photoSize)
    {
        $this->requestParameters['PhotoSize'] = $photoSize;
        $this->queryParameters['PhotoSize'] = $photoSize;

        return $this;
    }

    /**
     * @param string $timeLineCount
     *
     * @return $this
     */
    public function setTimeLineCount($timeLineCount)
    {
        $this->requestParameters['TimeLineCount'] = $timeLineCount;
        $this->queryParameters['TimeLineCount'] = $timeLineCount;

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
     * @param string $timeLineUnit
     *
     * @return $this
     */
    public function setTimeLineUnit($timeLineUnit)
    {
        $this->requestParameters['TimeLineUnit'] = $timeLineUnit;
        $this->queryParameters['TimeLineUnit'] = $timeLineUnit;

        return $this;
    }

    /**
     * @param string $filterBy
     *
     * @return $this
     */
    public function setFilterBy($filterBy)
    {
        $this->requestParameters['FilterBy'] = $filterBy;
        $this->queryParameters['FilterBy'] = $filterBy;

        return $this;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->requestParameters['Direction'] = $direction;
        $this->queryParameters['Direction'] = $direction;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->requestParameters['Order'] = $order;
        $this->queryParameters['Order'] = $order;

        return $this;
    }
}
