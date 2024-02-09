<?php

declare(strict_types=1);

namespace Setono\GoogleAnalyticsEvents\Event;

use Setono\GoogleAnalyticsEvents\Event\Traits\CreatesEmpty;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasItems;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasListId;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasListName;

class ViewItemListEvent extends GenericEvent implements ItemsAware
{
    use CreatesEmpty;

    use HasListId;

    use HasListName;

    use HasItems;

    public static function getName(): string
    {
        return 'impression';
    }

    protected function getParameterMapping(): array
    {
        return array(
            'currencyCode' => 'EUR',
            'impressions' => $this->items,
            #'item_list_id' => $this->itemListId,
            #'item_list_name' => $this->itemListName,
        );
    }
}
