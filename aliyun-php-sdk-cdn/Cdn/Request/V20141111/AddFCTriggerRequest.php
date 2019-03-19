<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddFCTrigger
 *
 * @method string getNotes()
 * @method string getEventMetaVersion()
 * @method string getTriggerARN()
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method string getRoleARN()
 * @method string getEventMetaName()
 * @method string getFunctionARN()
 */
class AddFCTriggerRequest extends \RpcAcsRequest
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
            'Cdn',
            '2014-11-11',
            'AddFCTrigger'
        );
    }

    /**
     * @param string $notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->requestParameters['Notes'] = $notes;
        $this->queryParameters['Notes'] = $notes;

        return $this;
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
     * @param string $triggerARN
     *
     * @return $this
     */
    public function setTriggerARN($triggerARN)
    {
        $this->requestParameters['TriggerARN'] = $triggerARN;
        $this->queryParameters['TriggerARN'] = $triggerARN;

        return $this;
    }

    /**
     * @param string $sourceARN
     *
     * @return $this
     */
    public function setSourceARN($sourceARN)
    {
        $this->requestParameters['SourceARN'] = $sourceARN;
        $this->queryParameters['SourceARN'] = $sourceARN;

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
     * @param string $roleARN
     *
     * @return $this
     */
    public function setRoleARN($roleARN)
    {
        $this->requestParameters['RoleARN'] = $roleARN;
        $this->queryParameters['RoleARN'] = $roleARN;

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

    /**
     * @param string $functionARN
     *
     * @return $this
     */
    public function setFunctionARN($functionARN)
    {
        $this->requestParameters['FunctionARN'] = $functionARN;
        $this->queryParameters['FunctionARN'] = $functionARN;

        return $this;
    }
}
