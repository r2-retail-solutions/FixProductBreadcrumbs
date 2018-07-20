<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) 2018 Convert (http://www.convert.no/)
 */
namespace CompactCode\FixProductBreadcrumbs\Plugin\Product;

class View
{
    /**
     * Add Breadcrumbs Block
     *
     * @param \Magento\Catalog\Block\Product\View $subject
     * @param $result
     * @return mixed
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterSetLayout(\Magento\Catalog\Block\Product\View $subject, $result) {
        $subject->getLayout()->createBlock(\Magento\Catalog\Block\Breadcrumbs::class);

        return $result;
    }
}