<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of GetAllowIP
 *
 * @method string getUserID()
 * @method string getNetworkType()
 */
class GetAllowIPRequest extends \RpcAcsRequest
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
            'GetAllowIP',
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
}
