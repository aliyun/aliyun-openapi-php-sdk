<?php

namespace CCC\Request\V20170705;

/**
 * Request of GetConfig
 *
 * @method string getInstanceId()
 * @method string getName()
 * @method string getObjectType()
 * @method string getObjectId()
 */
class GetConfigRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'GetConfig'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $objectType
     *
     * @return $this
     */
    public function setObjectType($objectType)
    {
        $this->requestParameters['ObjectType'] = $objectType;
        $this->queryParameters['ObjectType'] = $objectType;

        return $this;
    }

    /**
     * @param string $objectId
     *
     * @return $this
     */
    public function setObjectId($objectId)
    {
        $this->requestParameters['ObjectId'] = $objectId;
        $this->queryParameters['ObjectId'] = $objectId;

        return $this;
    }
}
