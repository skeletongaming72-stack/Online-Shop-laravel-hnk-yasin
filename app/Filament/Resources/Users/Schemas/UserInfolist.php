<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageColumn::make('pic')
                    ->label('عکس پروفایل')
                    ->defaultImageUrl('/images/no-profile.png')
                    ->width(250)
                    ->circular(),
                TextEntry::make('admin')
                    ->label('مدیر سایت'),
                TextEntry::make('staff')
                    ->label('همکار پشتیبان'),
                TextEntry::make('instructor')
                    ->label('فروشنده'),
                TextEntry::make('name')
                    ->label('نام و خانوادگی'),
                TextEntry::make('username')
                    ->placeholder('-')
                    ->label('نام کاربری'),
                TextEntry::make('email')
                    ->label('آدرس ایمیل'),
                TextEntry::make('mobile')
                    ->label('شماره موبایل'),
                TextEntry::make('email_verified_at')
                    ->dateTime()
                    ->placeholder('-')
                    ->label('تایید ایمیل'),
                TextEntry::make('status')
                    ->label('وضعیت کاربر'),
                TextEntry::make('verify')
                    ->label('وضعیت تایید کاربر'),
                TextEntry::make('wallet')
                    ->label('مبلغ کیف پول'),
                TextEntry::make('created_at')
                    ->label('تاریخ عضویت')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('تاریخ بروزرسانی پروفایل')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
