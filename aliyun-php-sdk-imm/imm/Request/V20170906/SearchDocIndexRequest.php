<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SearchDocIndex
 *
 * @method string getModifiedTimeEnd()
 * @method string getSizeLimitEnd()
 * @method string getProject()
 * @method string getModifiedTimeStart()
 * @method string getPageNumLimitStart()
 * @method string getContent()
 * @method string getSizeLimitStart()
 * @method string getLimit()
 * @method string getCustomKey1()
 * @method string getSet()
 * @method string getCustomKey5()
 * @method string getOffset()
 * @method string getCustomKey4()
 * @method string getCustomKey3()
 * @method string getCustomKey2()
 * @method string getCustomKey6()
 * @method string getPageNumLimitEnd()
 * @method string getContentType()
 * @method string getName()
 */
class SearchDocIndexRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'SearchDocIndex',
            'imm'
        );
    }

    /**
     * @param string $modifiedTimeEnd
     *
     * @return $this
     */
    public function setModifiedTimeEnd($modifiedTimeEnd)
    {
        $this->requestParameters['ModifiedTimeEnd'] = $modifiedTimeEnd;
        $this->queryParameters['ModifiedTimeEnd'] = $modifiedTimeEnd;

        return $this;
    }

    /**
     * @param string $sizeLimitEnd
     *
     * @return $this
     */
    public function setSizeLimitEnd($sizeLimitEnd)
    {
        $this->requestParameters['SizeLimitEnd'] = $sizeLimitEnd;
        $this->queryParameters['SizeLimitEnd'] = $sizeLimitEnd;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $modifiedTimeStart
     *
     * @return $this
     */
    public function setModifiedTimeStart($modifiedTimeStart)
    {
        $this->requestParameters['ModifiedTimeStart'] = $modifiedTimeStart;
        $this->queryParameters['ModifiedTimeStart'] = $modifiedTimeStart;

        return $this;
    }

    /**
     * @param string $pageNumLimitStart
     *
     * @return $this
     */
    public function setPageNumLimitStart($pageNumLimitStart)
    {
        $this->requestParameters['PageNumLimitStart'] = $pageNumLimitStart;
        $this->queryParameters['PageNumLimitStart'] = $pageNumLimitStart;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

        return $this;
    }

    /**
     * @param string $sizeLimitStart
     *
     * @return $this
     */
    public function setSizeLimitStart($sizeLimitStart)
    {
        $this->requestParameters['SizeLimitStart'] = $sizeLimitStart;
        $this->queryParameters['SizeLimitStart'] = $sizeLimitStart;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

        return $this;
    }

    /**
     * @param string $customKey1
     *
     * @return $this
     */
    public function setCustomKey1($customKey1)
    {
        $this->requestParameters['CustomKey1'] = $customKey1;
        $this->queryParameters['CustomKey1'] = $customKey1;

        return $this;
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        $this->requestParameters['Set'] = $set;
        $this->queryParameters['Set'] = $set;

        return $this;
    }

    /**
     * @param string $customKey5
     *
     * @return $this
     */
    public function setCustomKey5($customKey5)
    {
        $this->requestParameters['CustomKey5'] = $customKey5;
        $this->queryParameters['CustomKey5'] = $customKey5;

        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->requestParameters['Offset'] = $offset;
        $this->queryParameters['Offset'] = $offset;

        return $this;
    }

    /**
     * @param string $customKey4
     *
     * @return $this
     */
    public function setCustomKey4($customKey4)
    {
        $this->requestParameters['CustomKey4'] = $customKey4;
        $this->queryParameters['CustomKey4'] = $customKey4;

        return $this;
    }

    /**
     * @param string $customKey3
     *
     * @return $this
     */
    public function setCustomKey3($customKey3)
    {
        $this->requestParameters['CustomKey3'] = $customKey3;
        $this->queryParameters['CustomKey3'] = $customKey3;

        return $this;
    }

    /**
     * @param string $customKey2
     *
     * @return $this
     */
    public function setCustomKey2($customKey2)
    {
        $this->requestParameters['CustomKey2'] = $customKey2;
        $this->queryParameters['CustomKey2'] = $customKey2;

        return $this;
    }

    /**
     * @param string $customKey6
     *
     * @return $this
     */
    public function setCustomKey6($customKey6)
    {
        $this->requestParameters['CustomKey6'] = $customKey6;
        $this->queryParameters['CustomKey6'] = $customKey6;

        return $this;
    }

    /**
     * @param string $pageNumLimitEnd
     *
     * @return $this
     */
    public function setPageNumLimitEnd($pageNumLimitEnd)
    {
        $this->requestParameters['PageNumLimitEnd'] = $pageNumLimitEnd;
        $this->queryParameters['PageNumLimitEnd'] = $pageNumLimitEnd;

        return $this;
    }

    /**
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->requestParameters['ContentType'] = $contentType;
        $this->queryParameters['ContentType'] = $contentType;

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
}
