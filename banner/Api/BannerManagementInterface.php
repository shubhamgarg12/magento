<?php
/**
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace shubham\banner\Api;

/**
 * @api
 */
interface BannerManagementInterface
{
    /**
     * Retrieve list of categories
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException If ID is not found
     * @return shubham\banner\Api\Data\BannerTreeInterface containing Tree objects
     */
    public function getTree();
}
