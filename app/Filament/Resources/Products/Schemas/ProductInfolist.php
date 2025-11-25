<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageColumn::make('pic')
                    ->label('عکس محصول')
                    ->defaultImageUrl('/images/no-profile.png')
                    ->width(250)
                    ->circular(),
                TextEntry::make('title')
                    ->label('عنوان محصول'),
                TextEntry::make('link')
                    ->label('لینک محصول'),
                TextEntry::make('sku')
                    ->label('SKU'),
                TextEntry::make('count')
                    ->label('تعداد محصول'),
                TextEntry::make('material')
                    ->label('متریال محصول'),
                TextEntry::make('weight')
                    ->label('وزن محصول'),
                TextEntry::make('price')
                    ->label('قیمت محصول'),
                TextEntry::make('discount_price')
                    ->label('قیمت تخفیف خورده محصول')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->label('توضیحات محصول')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('detail')
                    ->label('جزئیات کامل محصول')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('وضعیت محصول'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
