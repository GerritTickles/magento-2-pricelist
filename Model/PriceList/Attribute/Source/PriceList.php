<?php
        //Dealer4dealer\PriceList\Model\PriceList\Attribute\Source\PriceList
namespace Dealer4dealer\Pricelist\Model\PriceList\Attribute\Source;

use Dealer4dealer\Pricelist\Model\PriceListRepository;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Framework\Api\SearchCriteriaBuilder;

class PriceList extends AbstractSource
{
    protected $_priceListRepository;
    protected $_searchCriteriaBuilder;

    /**
     * Constructor
     *
     * @param PriceListRepository $priceListRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(PriceListRepository $priceListRepository,
                                SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->_priceListRepository   = $priceListRepository;
        $this->_searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            // Get all options, so no source filters (no ->addFilter('column', $value) before create())
            $searchCriteria = $this->_searchCriteriaBuilder->create();

            $collection = $this->_priceListRepository->getList($searchCriteria);

            $this->_options = [
                [
                    'value' => null,
                    'label' => 'No Price List'
                ]
            ];

            foreach ($collection->getItems() as $priceList) {
                $this->_options[] = [
                    'value' => $priceList->getId(),
                    'label' => $priceList->getCode(),
                ];
            }

        }
        return $this->_options;
    }
}