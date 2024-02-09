<?php

declare(strict_types=1);

namespace Setono\GoogleAnalyticsEvents\Event;

use Setono\GoogleAnalyticsEvents\Event\Traits\CreatesEmpty;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasCoupon;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasCurrency;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasItems;
use Setono\GoogleAnalyticsEvents\Event\Traits\HasValue;

class BeginCheckoutEvent extends GenericEvent implements ItemsAware
{
    use CreatesEmpty;

    use HasCurrency;

    use HasValue;

    use HasCoupon;

    use HasItems;

    public static function getName(): string
    {
        return 'checkout';
    }

    protected function getParameterMapping(): array
    {
        return [
            'checkout'=>['actionField'=>['step'=>1],'products' => $this->items],
            #'currency' => $this->currency,
            #'value' => $this->value,
            #'coupon' => $this->coupon,
        ];
    }
}
