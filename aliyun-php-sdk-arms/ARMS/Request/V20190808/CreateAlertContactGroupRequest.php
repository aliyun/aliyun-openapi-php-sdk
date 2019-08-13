<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAlertContactGroup
 *
 * @method string getContactGroupName()
 * @method string getContactIds()
 */
class CreateAlertContactGroupRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-08-08',
            'CreateAlertContactGroup',
            'arms'
        );
    }

    /**
     * @param string $contactGroupName
     *
     * @return $this
     */
    public function setContactGroupName($contactGroupName)
    {
        $this->requestParameters['ContactGroupName'] = $contactGroupName;
        $this->queryParameters['ContactGroupName'] = $contactGroupName;

        return $this;
    }

    /**
     * @param string $contactIds
     *
     * @return $this
     */
    public function setContactIds($contactIds)
    {
        $this->requestParameters['ContactIds'] = $contactIds;
        $this->queryParameters['ContactIds'] = $contactIds;

        return $this;
    }
}
