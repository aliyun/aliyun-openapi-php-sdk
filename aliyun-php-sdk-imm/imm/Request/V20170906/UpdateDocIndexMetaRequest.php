<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateDocIndexMeta
 *
 * @method string getProject()
 * @method string getUniqueId()
 * @method string getCustomKey1()
 * @method string getSet()
 * @method string getCustomKey5()
 * @method string getCustomKey4()
 * @method string getCustomKey3()
 * @method string getCustomKey2()
 * @method string getCustomKey6()
 * @method string getName()
 */
class UpdateDocIndexMetaRequest extends \RpcAcsRequest
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
            'UpdateDocIndexMeta',
            'imm'
        );
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
     * @param string $uniqueId
     *
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->requestParameters['UniqueId'] = $uniqueId;
        $this->queryParameters['UniqueId'] = $uniqueId;

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
