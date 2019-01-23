<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of ImportSwagger
 *
 * @method string getDataFormat()
 * @method string getData()
 * @method string getGroupId()
 * @method string getOverwrite()
 */
class ImportSwaggerRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'ImportSwagger',
            'apigateway'
        );
    }

    /**
     * @param string $dataFormat
     *
     * @return $this
     */
    public function setDataFormat($dataFormat)
    {
        $this->requestParameters['DataFormat'] = $dataFormat;
        $this->queryParameters['DataFormat'] = $dataFormat;

        return $this;
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->requestParameters['Data'] = $data;
        $this->queryParameters['Data'] = $data;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $overwrite
     *
     * @return $this
     */
    public function setOverwrite($overwrite)
    {
        $this->requestParameters['Overwrite'] = $overwrite;
        $this->queryParameters['Overwrite'] = $overwrite;

        return $this;
    }
}
