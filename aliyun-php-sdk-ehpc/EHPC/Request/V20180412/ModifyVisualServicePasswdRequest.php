<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyVisualServicePasswd
 *
 * @method string getPasswd()
 * @method string getRunasUserPassword()
 * @method string getRunasUser()
 * @method string getClusterId()
 */
class ModifyVisualServicePasswdRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'ModifyVisualServicePasswd',
            'ehs'
        );
    }

    /**
     * @param string $passwd
     *
     * @return $this
     */
    public function setPasswd($passwd)
    {
        $this->requestParameters['Passwd'] = $passwd;
        $this->queryParameters['Passwd'] = $passwd;

        return $this;
    }

    /**
     * @param string $runasUserPassword
     *
     * @return $this
     */
    public function setRunasUserPassword($runasUserPassword)
    {
        $this->requestParameters['RunasUserPassword'] = $runasUserPassword;
        $this->queryParameters['RunasUserPassword'] = $runasUserPassword;

        return $this;
    }

    /**
     * @param string $runasUser
     *
     * @return $this
     */
    public function setRunasUser($runasUser)
    {
        $this->requestParameters['RunasUser'] = $runasUser;
        $this->queryParameters['RunasUser'] = $runasUser;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
