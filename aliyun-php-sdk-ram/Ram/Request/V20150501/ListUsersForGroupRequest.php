<?php

namespace Ram\Request\V20150501;

/**
 * Request of ListUsersForGroup
 *
 * @method string getMarker()
 * @method string getMaxItems()
 * @method string getGroupName()
 */
class ListUsersForGroupRequest extends \RpcAcsRequest
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
            'Ram',
            '2015-05-01',
            'ListUsersForGroup',
            'ram'
        );
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->requestParameters['Marker'] = $marker;
        $this->queryParameters['Marker'] = $marker;

        return $this;
    }

    /**
     * @param string $maxItems
     *
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        $this->requestParameters['MaxItems'] = $maxItems;
        $this->queryParameters['MaxItems'] = $maxItems;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->requestParameters['GroupName'] = $groupName;
        $this->queryParameters['GroupName'] = $groupName;

        return $this;
    }
}
