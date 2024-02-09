<?php

declare(strict_types=1);

namespace Setono\GoogleAnalyticsEvents\Event;

use Setono\GoogleAnalyticsEvents\Event\Traits\CreatesEmpty;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasCurrency;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasItems;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasValue;

class AddToCartEvent extends GenericEvent implements ItemsAware
{
    use CreatesEmpty;

    use HasCurrency;

    use HasItems;

    use HasValue;

    public static function getName(): string
    {
        return 'addToCart';
    }

    protected function getParameterMapping(): array
    {
        return array(
            'currencyCode' => 'EUR',
            'add' => '',
            'products' => $this->items
        );
    }
}
