<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateDomainToDomainGroup
 *
 * @method string getDataSource()
 * @method string getUserClientIp()
 * @method string getFileToUpload()
 * @method array getDomainNames()
 * @method string getReplace()
 * @method string getLang()
 * @method string getDomainGroupId()
 */
class UpdateDomainToDomainGroupRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'UpdateDomainToDomainGroup'
        );
    }

    /**
     * @param string $dataSource
     *
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        $this->requestParameters['DataSource'] = $dataSource;
        $this->queryParameters['DataSource'] = $dataSource;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $fileToUpload
     *
     * @return $this
     */
    public function setFileToUpload($fileToUpload)
    {
        $this->requestParameters['FileToUpload'] = $fileToUpload;
        $this->queryParameters['FileToUpload'] = $fileToUpload;

        return $this;
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function setDomainNames(array $domainName)
    {
        $this->requestParameters['DomainNames'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->queryParameters['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $replace
     *
     * @return $this
     */
    public function setReplace($replace)
    {
        $this->requestParameters['Replace'] = $replace;
        $this->queryParameters['Replace'] = $replace;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $domainGroupId
     *
     * @return $this
     */
    public function setDomainGroupId($domainGroupId)
    {
        $this->requestParameters['DomainGroupId'] = $domainGroupId;
        $this->queryParameters['DomainGroupId'] = $domainGroupId;

        return $this;
    }
}
