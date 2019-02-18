<?php

namespace Ons\Request\V20190214;

/**
 * Request of OnsInstanceUpdate
 *
 * @method string getPreventCache()
 * @method string getInstanceName()
 * @method string getInstanceId()
 * @method string getRemark()
 */
class OnsInstanceUpdateRequest extends \RpcAcsRequest
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
            'Ons',
            '2019-02-14',
            'OnsInstanceUpdate',
            'ons'
        );
    }

    /**
     * @param string $preventCache
     *
     * @return $this
     */
    public function setPreventCache($preventCache)
    {
        $this->requestParameters['PreventCache'] = $preventCache;
        $this->queryParameters['PreventCache'] = $preventCache;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
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
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }
}
