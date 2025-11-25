<?php

namespace App\Filament\Resources\Products\Tables;

use App\Models\Product;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;
use function Laravel\Prompts\select;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('pic')
                    ->label('عکس محصول')
                    ->defaultImageUrl('/images/no-profile.png')
                    ->width(150)
                    ->circular(),
                TextColumn::make('title')
                    ->label('عنوان محصول')
                    ->searchable(),
                TextColumn::make('link')
                    ->label('لینک محصول')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('sku')
                    ->label('SKU')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextInputColumn::make('count')
                    ->label('تعداد محصول')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('material')
                    ->label('متریال محصول')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('weight')
                    ->label('وزن محصول')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->label('قیمت محصول')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->suffix(' تومان ')
                    ->numeric()
                    ->description(fn(Product $product) => 'قیمت تخفیف خورده:' .number_format($product->discount_price). ' تومان' ?? '')
                    ->searchable(),
//                TextColumn::make('discount_price')
//                    ->label('قیمت تخفیف خورده محصول')
//                    ->suffix(' تومان ')
//                    ->numeric()
//                    ->searchable(),
                SelectColumn::make('status')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->native()
                    ->options([
                        '0' => 'ناموجود',
                        '1' => 'موجود در فروشگاه',
                        '2' => 'موجود در انبار',
                    ])
                    ->label('وضعیت محصول'),
                TextColumn::make('created_at')
                    ->label('تاریخ ایجاد محصول')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('تاریخ ویرایش محصول')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
