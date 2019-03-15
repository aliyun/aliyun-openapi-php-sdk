<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of GetPhotosByMd5s
 *
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getState()
 * @method array getMd5s()
 */
class GetPhotosByMd5sRequest extends \RpcAcsRequest
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
            'GetPhotosByMd5s',
            'cloudphoto'
        );
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
     * @param array $md5s
     *
     * @return $this
     */
    public function setMd5s(array $md5s)
    {
        $this->requestParameters['Md5s'] = $md5s;
        foreach ($md5s as $i => $iValue) {
            $this->queryParameters['Md5.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
