<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ShoppingListNoteWidget\Widget;

use Generated\Shared\Transfer\ShoppingListItemTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidget;

class ShoppingListItemNoteWidget extends AbstractWidget
{
    public function __construct(ShoppingListItemTransfer $shoppingListItemTransfer)
    {
        $this->addParameter('note', $shoppingListItemTransfer->getShoppingListItemNote()->getNote());
    }

    public static function getTemplate(): string
    {
        return '@ShoppingListNoteWidget/views/shopping-list-item-note/shopping-list-item-note.twig';
    }

    public static function getName(): string
    {
        return 'ShoppingListItemNoteWidget';
    }
}
