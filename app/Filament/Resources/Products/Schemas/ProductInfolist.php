<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('pic')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('title'),
                TextEntry::make('link'),
                TextEntry::make('price'),
                TextEntry::make('sku')
                    ->label('SKU'),
                TextEntry::make('count'),
                TextEntry::make('material'),
                TextEntry::make('weight'),
                TextEntry::make('discount_price')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('detail')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
