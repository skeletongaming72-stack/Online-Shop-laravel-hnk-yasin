<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('pic')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('link')
                    ->required(),
                TextInput::make('price')
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),
                TextInput::make('count')
                    ->required(),
                TextInput::make('material')
                    ->required(),
                TextInput::make('weight')
                    ->required(),
                TextInput::make('discount_price')
                    ->default(null),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('detail')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('1'),
            ]);
    }
}
