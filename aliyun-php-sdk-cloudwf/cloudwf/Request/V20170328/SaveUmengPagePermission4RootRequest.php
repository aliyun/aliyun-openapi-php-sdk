<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveUmengPagePermission4Root
 *
 * @method string getGsPermission()
 * @method string getAliyunPk()
 * @method string getPagePermission()
 * @method string getId()
 * @method string getBid()
 */
class SaveUmengPagePermission4RootRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'SaveUmengPagePermission4Root',
            'cloudwf'
        );
    }

    /**
     * @param string $gsPermission
     *
     * @return $this
     */
    public function setGsPermission($gsPermission)
    {
        $this->requestParameters['GsPermission'] = $gsPermission;
        $this->queryParameters['GsPermission'] = $gsPermission;

        return $this;
    }

    /**
     * @param string $aliyunPk
     *
     * @return $this
     */
    public function setAliyunPk($aliyunPk)
    {
        $this->requestParameters['AliyunPk'] = $aliyunPk;
        $this->queryParameters['AliyunPk'] = $aliyunPk;

        return $this;
    }

    /**
     * @param string $pagePermission
     *
     * @return $this
     */
    public function setPagePermission($pagePermission)
    {
        $this->requestParameters['PagePermission'] = $pagePermission;
        $this->queryParameters['PagePermission'] = $pagePermission;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }
}
