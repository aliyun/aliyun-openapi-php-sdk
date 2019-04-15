<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeVulList
 *
 * @method string getStatusList()
 * @method string getLevel()
 * @method string getResource()
 * @method string getRemark()
 * @method string getDealed()
 * @method string getCurrentPage()
 * @method string getType()
 * @method string getCreateTsStart()
 * @method string getBatchName()
 * @method string getAliasName()
 * @method string getSourceIp()
 * @method string getName()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getCreateTsEnd()
 * @method string getNecessity()
 * @method string getUuids()
 */
class DescribeVulListRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeVulList',
            'vipaegis'
        );
    }

    /**
     * @param string $statusList
     *
     * @return $this
     */
    public function setStatusList($statusList)
    {
        $this->requestParameters['StatusList'] = $statusList;
        $this->queryParameters['StatusList'] = $statusList;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->requestParameters['Level'] = $level;
        $this->queryParameters['Level'] = $level;

        return $this;
    }

    /**
     * @param string $resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->requestParameters['Resource'] = $resource;
        $this->queryParameters['Resource'] = $resource;

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

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        $this->requestParameters['Dealed'] = $dealed;
        $this->queryParameters['Dealed'] = $dealed;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $createTsStart
     *
     * @return $this
     */
    public function setCreateTsStart($createTsStart)
    {
        $this->requestParameters['CreateTsStart'] = $createTsStart;
        $this->queryParameters['CreateTsStart'] = $createTsStart;

        return $this;
    }

    /**
     * @param string $batchName
     *
     * @return $this
     */
    public function setBatchName($batchName)
    {
        $this->requestParameters['BatchName'] = $batchName;
        $this->queryParameters['BatchName'] = $batchName;

        return $this;
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
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $createTsEnd
     *
     * @return $this
     */
    public function setCreateTsEnd($createTsEnd)
    {
        $this->requestParameters['CreateTsEnd'] = $createTsEnd;
        $this->queryParameters['CreateTsEnd'] = $createTsEnd;

        return $this;
    }

    /**
     * @param string $necessity
     *
     * @return $this
     */
    public function setNecessity($necessity)
    {
        $this->requestParameters['Necessity'] = $necessity;
        $this->queryParameters['Necessity'] = $necessity;

        return $this;
    }

    /**
     * @param string $uuids
     *
     * @return $this
     */
    public function setUuids($uuids)
    {
        $this->requestParameters['Uuids'] = $uuids;
        $this->queryParameters['Uuids'] = $uuids;

        return $this;
    }
}
