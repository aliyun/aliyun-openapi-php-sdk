<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of SetAllowIP
 *
 * @method string getUserID()
 * @method string getNetworkType()
 * @method string getAllowIP()
 * @method string getAppend()
 */
class SetAllowIPRequest extends \RpcAcsRequest
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
            'openanalytics',
            '2018-03-01',
            'SetAllowIP',
            'openanalytics'
        );
    }

    /**
     * @param string $userID
     *
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->requestParameters['UserID'] = $userID;
        $this->queryParameters['UserID'] = $userID;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $allowIP
     *
     * @return $this
     */
    public function setAllowIP($allowIP)
    {
        $this->requestParameters['AllowIP'] = $allowIP;
        $this->queryParameters['AllowIP'] = $allowIP;

        return $this;
    }

    /**
     * @param string $append
     *
     * @return $this
     */
    public function setAppend($append)
    {
        $this->requestParameters['Append'] = $append;
        $this->queryParameters['Append'] = $append;

        return $this;
    }
}
