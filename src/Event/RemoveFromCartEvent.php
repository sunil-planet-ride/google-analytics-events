<?php

declare(strict_types=1);

namespace Setono\GoogleAnalyticsEvents\Event;

use Setono\GoogleAnalyticsEvents\Event\Traits\CreatesEmpty;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasCurrency;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasItems;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasValue;

class RemoveFromCartEvent extends GenericEvent implements ItemsAware
{
    public const NAME = 'removeFromCart';

    use CreatesEmpty;

    use HasCurrency;

    use HasItems;

    use HasValue;

    public static function getName(): string
    {
        return 'removeFromCart';
    }

    protected function getParameterMapping(): array
    {
        return [
            'remove'=>['products' => $this->items],
            #'currency' => $this->currency,
            #'value' => $this->value,
        ];
    }
}
