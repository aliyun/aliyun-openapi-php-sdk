<?php

namespace Push\Request\V20160801;

/**
 * Request of UnbindAlias
 *
 * @method string getAliasName()
 * @method string getAppKey()
 * @method string getDeviceId()
 * @method string getUnbindAll()
 */
class UnbindAliasRequest extends \RpcAcsRequest
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
            'Push',
            '2016-08-01',
            'UnbindAlias'
        );
    }

    /**
     * @param string $aliasName
     *
     * @return $this
     */
    public function setAliasName($aliasName)
    {
        $this->requestParameters['AliasName'] = $aliasName;
        $this->queryParameters['AliasName'] = $aliasName;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->requestParameters['DeviceId'] = $deviceId;
        $this->queryParameters['DeviceId'] = $deviceId;

        return $this;
    }

    /**
     * @param string $unbindAll
     *
     * @return $this
     */
    public function setUnbindAll($unbindAll)
    {
        $this->requestParameters['UnbindAll'] = $unbindAll;
        $this->queryParameters['UnbindAll'] = $unbindAll;

        return $this;
    }
}
