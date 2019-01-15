<?php

namespace Iot\Request\V20180120;

/**
 * Request of SetDeviceGroupTags
 *
 * @method string getTagString()
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
            'SetDeviceGroupTags'
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
