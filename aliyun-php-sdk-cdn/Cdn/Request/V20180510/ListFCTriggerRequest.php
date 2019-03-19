<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListFCTrigger
 *
 * @method string getEventMetaVersion()
 * @method string getOwnerId()
 * @method string getEventMetaName()
 */
class ListFCTriggerRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2018-05-10',
            'ListFCTrigger'
        );
    }

    /**
     * @param string $eventMetaVersion
     *
     * @return $this
     */
    public function setEventMetaVersion($eventMetaVersion)
    {
        $this->requestParameters['EventMetaVersion'] = $eventMetaVersion;
        $this->queryParameters['EventMetaVersion'] = $eventMetaVersion;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $eventMetaName
     *
     * @return $this
     */
    public function setEventMetaName($eventMetaName)
    {
        $this->requestParameters['EventMetaName'] = $eventMetaName;
        $this->queryParameters['EventMetaName'] = $eventMetaName;

        return $this;
    }
}
