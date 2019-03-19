<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateFCTrigger
 *
 * @method string getNotes()
 * @method string getTriggerARN()
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method string getRoleARN()
 * @method string getFunctionARN()
 */
class UpdateFCTriggerRequest extends \RpcAcsRequest
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
            'UpdateFCTrigger'
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
