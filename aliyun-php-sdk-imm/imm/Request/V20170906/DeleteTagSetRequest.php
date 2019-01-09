<?php

namespace imm\Request\V20170906;

/**
 * Request of DeleteTagSet
 *
 * @method string getLazyMode()
 * @method string getProject()
 * @method string getSetId()
 * @method string getCheckEmpty()
 */
class DeleteTagSetRequest extends \RpcAcsRequest
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
            'DeleteTagSet',
            'imm'
        );
    }

    /**
     * @param string $lazyMode
     *
     * @return $this
     */
    public function setLazyMode($lazyMode)
    {
        $this->requestParameters['LazyMode'] = $lazyMode;
        $this->queryParameters['LazyMode'] = $lazyMode;

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
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $checkEmpty
     *
     * @return $this
     */
    public function setCheckEmpty($checkEmpty)
    {
        $this->requestParameters['CheckEmpty'] = $checkEmpty;
        $this->queryParameters['CheckEmpty'] = $checkEmpty;

        return $this;
    }
}
