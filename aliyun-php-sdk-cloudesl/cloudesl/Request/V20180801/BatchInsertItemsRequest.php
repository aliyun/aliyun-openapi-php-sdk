<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of BatchInsertItems
 *
 * @method array getItemInfos()
 * @method string getStoreId()
 */
class BatchInsertItemsRequest extends \RpcAcsRequest
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
            'cloudesl',
            '2018-08-01',
            'BatchInsertItems'
        );
    }

    /**
     * @param array $itemInfos
     *
     * @return $this
     */
    public function setItemInfos(array $itemInfos)
    {
        $this->requestParameters['ItemInfos'] = $itemInfos;
        foreach ($itemInfos as $i => $iValue) {
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.MemberPrice'] = $itemInfos[$i]['MemberPrice'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ActionPrice'] = $itemInfos[$i]['ActionPrice'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ProductionPlace'] = $itemInfos[$i]['ProductionPlace'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.BeSourceCode'] = $itemInfos[$i]['BeSourceCode'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.StoreId'] = $itemInfos[$i]['StoreId'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.BrandName'] = $itemInfos[$i]['BrandName'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.PromotionStart'] = $itemInfos[$i]['PromotionStart'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.SourceCode'] = $itemInfos[$i]['SourceCode'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ItemId'] = $itemInfos[$i]['ItemId'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ExtraAttribute'] = $itemInfos[$i]['ExtraAttribute'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CompanyId'] = $itemInfos[$i]['CompanyId'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.PriceUnit'] = $itemInfos[$i]['PriceUnit'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.Rank'] = $itemInfos[$i]['Rank'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ItemBarCode'] = $itemInfos[$i]['ItemBarCode'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.BePromotion'] = $itemInfos[$i]['BePromotion'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.PromotionEnd'] = $itemInfos[$i]['PromotionEnd'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ItemTitle'] = $itemInfos[$i]['ItemTitle'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.OriginalPrice'] = $itemInfos[$i]['OriginalPrice'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ItemShortTitle'] = $itemInfos[$i]['ItemShortTitle'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureC'] = $itemInfos[$i]['CustomizeFeatureC'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ItemQrCode'] = $itemInfos[$i]['ItemQrCode'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureD'] = $itemInfos[$i]['CustomizeFeatureD'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.PromotionReason'] = $itemInfos[$i]['PromotionReason'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureE'] = $itemInfos[$i]['CustomizeFeatureE'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureF'] = $itemInfos[$i]['CustomizeFeatureF'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ForestSecondId'] = $itemInfos[$i]['ForestSecondId'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureG'] = $itemInfos[$i]['CustomizeFeatureG'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureH'] = $itemInfos[$i]['CustomizeFeatureH'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureI'] = $itemInfos[$i]['CustomizeFeatureI'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureJ'] = $itemInfos[$i]['CustomizeFeatureJ'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.OptionGroups'] = $itemInfos[$i]['OptionGroups'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ModelNumber'] = $itemInfos[$i]['ModelNumber'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.SaleSpec'] = $itemInfos[$i]['SaleSpec'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureA'] = $itemInfos[$i]['CustomizeFeatureA'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CustomizeFeatureB'] = $itemInfos[$i]['CustomizeFeatureB'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.SuggestPrice'] = $itemInfos[$i]['SuggestPrice'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.ForestFirstId'] = $itemInfos[$i]['ForestFirstId'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.CategoryName'] = $itemInfos[$i]['CategoryName'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.EnergyEfficiency'] = $itemInfos[$i]['EnergyEfficiency'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.SkuId'] = $itemInfos[$i]['SkuId'];
            $this->queryParameters['ItemInfo.' . ($i + 1) . '.PromotionText'] = $itemInfos[$i]['PromotionText'];
        }

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->requestParameters['StoreId'] = $storeId;
        $this->queryParameters['StoreId'] = $storeId;

        return $this;
    }
}
