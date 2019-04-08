<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDeviceGroupTags
 *
 * @method string getTagString()
 * @method string getIotInstanceId()
 * @method string getGroupId()
 */
class SetDeviceGroupTagsRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'SetDeviceGroupTags',
            'iot'
        );
    }

    /**
     * @param string $tagString
     *
     * @return $this
     */
    public function setTagString($tagString)
    {
        $this->requestParameters['TagString'] = $tagString;
        $this->queryParameters['TagString'] = $tagString;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }
}
