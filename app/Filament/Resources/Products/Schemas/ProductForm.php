<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('pic')
                    ->label('عکس پروفایل')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->label('عنوان محصول')
                    ->required(),
                TextInput::make('link')
                    ->label('لینک محصول')
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),
                TextInput::make('count')
                    ->label('تعداد محصول')
                    ->required(),
                TextInput::make('material')
                    ->label('متریال محصول')
                    ->required(),
                TextInput::make('weight')
                    ->label('وزن محصول')
                    ->required(),
                TextInput::make('price')
                    ->label('قیمت محصول')
                    ->required(),
                TextInput::make('discount_price')
                    ->label('قیمت تخفیف خورده محصول')
                    ->default(null),
                Textarea::make('description')
                    ->label('توضیحات محصول')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('detail')
                    ->label('جزئیات کامل محصول')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('status')
                    ->default(1)
                    ->label('وضعیت محصول')
                    ->options([
                        '0' => 'ناموجود',
                        '1' => 'موجود در فروشگاه',
                        '2' => 'موجود در انبار',
                    ]),
            ]);
    }
}
