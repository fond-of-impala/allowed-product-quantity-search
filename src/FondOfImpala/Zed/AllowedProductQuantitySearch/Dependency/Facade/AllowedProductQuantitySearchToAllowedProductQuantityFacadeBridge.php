<?php

namespace FondOfImpala\Zed\AllowedProductQuantitySearch\Dependency\Facade;

use FondOfImpala\Zed\AllowedProductQuantity\Business\AllowedProductQuantityFacadeInterface;
use Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

class AllowedProductQuantitySearchToAllowedProductQuantityFacadeBridge implements AllowedProductQuantitySearchToAllowedProductQuantityFacadeInterface
{
    protected AllowedProductQuantityFacadeInterface $allowedProductQuantityFacade;

    /**
     * @param \FondOfImpala\Zed\AllowedProductQuantity\Business\AllowedProductQuantityFacadeInterface $allowedProductQuantityFacade
     */
    public function __construct(AllowedProductQuantityFacadeInterface $allowedProductQuantityFacade)
    {
        $this->allowedProductQuantityFacade = $allowedProductQuantityFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer
     */
    public function findProductAbstractAllowedQuantity(
        ProductAbstractTransfer $productAbstractTransfer
    ): AllowedProductQuantityResponseTransfer {
        return $this->allowedProductQuantityFacade->findProductAbstractAllowedQuantity($productAbstractTransfer);
    }
}
