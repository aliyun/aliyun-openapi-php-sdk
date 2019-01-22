<?php

namespace ROS\Request\V20150901;

/**
 * Request of DescribeResourceTypeTemplate
 *
 * @method string getTypeName()
 */
class DescribeResourceTypeTemplateRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/resource_types/[TypeName]/template';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ROS',
            '2015-09-01',
            'DescribeResourceTypeTemplate'
        );
    }

    /**
     * @param string $typeName
     *
     * @return $this
     */
    public function setTypeName($typeName)
    {
        $this->requestParameters['TypeName'] = $typeName;
        $this->pathParameters['TypeName'] = $typeName;

        return $this;
    }
}
