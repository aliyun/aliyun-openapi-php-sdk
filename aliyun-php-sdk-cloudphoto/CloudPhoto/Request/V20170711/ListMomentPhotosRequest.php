<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of ListMomentPhotos
 *
 * @method string getCursor()
 * @method string getSize()
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getState()
 * @method string getMomentId()
 * @method string getDirection()
 */
class ListMomentPhotosRequest extends \RpcAcsRequest
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
            'ListMomentPhotos',
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
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

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
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

        return $this;
    }

    /**
     * @param string $momentId
     *
     * @return $this
     */
    public function setMomentId($momentId)
    {
        $this->requestParameters['MomentId'] = $momentId;
        $this->queryParameters['MomentId'] = $momentId;

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
}
