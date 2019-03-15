<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of GetEndPointByDomain
 *
 * @method string getUserID()
 * @method string getDomainURL()
 */
class GetEndPointByDomainRequest extends \RpcAcsRequest
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
            'GetEndPointByDomain',
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
     * @param string $domainURL
     *
     * @return $this
     */
    public function setDomainURL($domainURL)
    {
        $this->requestParameters['DomainURL'] = $domainURL;
        $this->queryParameters['DomainURL'] = $domainURL;

        return $this;
    }
}
