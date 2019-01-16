<?php

namespace CCC\Request\V20170705;

/**
 * Request of CreateInstance
 *
 * @method string getName()
 * @method string getDomainName()
 * @method string getPhoneNumber()
 * @method string getDescription()
 * @method string getStorageMaxDays()
 * @method string getStorageMaxSize()
 * @method string getDirectoryId()
 * @method array getAdminRamIds()
 */
class CreateInstanceRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'CreateInstance'
        );
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
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->requestParameters['PhoneNumber'] = $phoneNumber;
        $this->queryParameters['PhoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $storageMaxDays
     *
     * @return $this
     */
    public function setStorageMaxDays($storageMaxDays)
    {
        $this->requestParameters['StorageMaxDays'] = $storageMaxDays;
        $this->queryParameters['StorageMaxDays'] = $storageMaxDays;

        return $this;
    }

    /**
     * @param string $storageMaxSize
     *
     * @return $this
     */
    public function setStorageMaxSize($storageMaxSize)
    {
        $this->requestParameters['StorageMaxSize'] = $storageMaxSize;
        $this->queryParameters['StorageMaxSize'] = $storageMaxSize;

        return $this;
    }

    /**
     * @param string $directoryId
     *
     * @return $this
     */
    public function setDirectoryId($directoryId)
    {
        $this->requestParameters['DirectoryId'] = $directoryId;
        $this->queryParameters['DirectoryId'] = $directoryId;

        return $this;
    }

    /**
     * @param array $adminRamIds
     *
     * @return $this
     */
    public function setAdminRamIds(array $adminRamIds)
    {
        $this->requestParameters['AdminRamIds'] = $adminRamIds;
        foreach ($adminRamIds as $i => $iValue) {
            $this->queryParameters['AdminRamId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
