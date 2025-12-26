<?php

namespace App\Filament\Resources\Products\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Productwidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('تعداد محصولات', Product::count())
                ->description('کل محصولات سایت')
                //->descriptionColor('info')
                ->descriptionIcon('heroicon-m-circle-stack')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('info'),
            Stat::make('تعداد محصولات فعال', Product::where('status', 1)->count())
                ->description('محصولات فعال')
                //->descriptionColor('info')
                ->descriptionIcon('heroicon-m-check-circle')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('تعداد محصولات اتمام شده', Product::where('status', 0)->count())
                ->description('محصولات تمام شده')
                //->descriptionColor('info')
                ->descriptionIcon('heroicon-m-minus-circle')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),
            Stat::make('تعداد محصولات انبار شده', Product::where('status', 2)->count())
                ->description('محصولات انبار')
                //->descriptionColor('info')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('primary'),
            Stat::make('قیمت کل محصولات فروشگاه', number_format(Product::sum('price')) . ' تومان ')
                ->description('قیمت کل محصولات')
                ->descriptionColor('success')
                ->descriptionIcon('heroicon-m-banknotes')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('gray'),
            Stat::make('قیمت کل محصولات تخفیفی فروشگاه', number_format(Product::sum('discount_price')) . ' تومان ')
                ->description('قیمت کل محصولات تخفیفی')
                ->descriptionColor('primary')
                ->descriptionIcon('heroicon-m-tag')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('gray'),
        ];
    }
}
