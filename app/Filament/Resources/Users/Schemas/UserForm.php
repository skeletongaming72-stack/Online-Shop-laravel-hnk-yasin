<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use function Laravel\Prompts\select;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('pic')
                    ->label('عکس پروفایل')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('admin')
                    ->default(0)
                    ->label('مدیر سایت')
                    ->options([
                        '0' => 'مدیر نیست',
                        '1' => 'مدیر سایت',
                    ]),
                Select::make('staff')
                    ->default(0)
                    ->label('همکار پشتیبان')
                    ->options([
                        '0' => 'همکار پشتیبان نیست',
                        '1' => 'همکار پشتیبان',
                    ]),
                Select::make('instructor')
                    ->default(0)
                    ->label('فروشنده')
                    ->options([
                        '0' => 'فروشنده نیست',
                        '1' => 'فروشنده',
                    ]),
                TextInput::make('name')
                    ->label('نام و خانوادگی')
                    ->required(),
                TextInput::make('username')
                    ->label('نام کاربری')
                    ->default(null),
                TextInput::make('email')
                    ->label('آدرس ایمیل')
                    ->email()
                    ->required(),
                TextInput::make('mobile')
                    ->label('شماره موبایل')
                    ->required(),
                DateTimePicker::make('email_verified_at')
                ->label('تایید ایمیل'),
                TextInput::make('status')
                    ->label('وضعیت کاربر')
                    ->required()
                    ->default('1'),
                TextInput::make('verify')

                    ->label('وضعیت تایید کاربر')
                    ->required()
                    ->default('1'),
                TextInput::make('wallet')
                    ->label('مبلغ کیف پول')
                    ->required()
                    ->default('0'),
                TextInput::make('password')
                    ->label('رمز عبور')
                    ->password()
                    ->required(),
            ]);
    }
}
