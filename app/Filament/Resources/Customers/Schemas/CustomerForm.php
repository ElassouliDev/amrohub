<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->unique()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                Select::make('gender')
                    ->options(['male' => 'Male', 'female' => 'Female']),
                TextInput::make('university'),
                TextInput::make('specialization'),
                TextInput::make('university_id'),
                Select::make('user_type')
                    ->options([
                        'student' => 'Student',
                        'academic' => 'Academic',
                        'freelancer' => 'Freelancer',
                        'other' => 'Other',
                    ])
                    ->default('freelancer')
                    ->required(),
                Toggle::make('account_status')
                    ->required(),
                FileUpload::make('id_image_path')
                    ->image(),
                // TextInput::make('plan_id')
                //     ->numeric(),
            ]);
    }
}
