<?php

namespace welfare_inner\Request\V20180524;

/**
 * Request of GetWelfareGeekInfo
 *
 * @method string getAppName()
 * @method string getPk()
 */
class GetWelfareGeekInfoRequest extends \RpcAcsRequest
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
            'welfare-inner',
            '2018-05-24',
            'GetWelfareGeekInfo'
        );
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->requestParameters['AppName'] = $appName;
        $this->queryParameters['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        $this->requestParameters['Pk'] = $pk;
        $this->queryParameters['Pk'] = $pk;

        return $this;
    }
}
