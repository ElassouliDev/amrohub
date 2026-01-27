<?php

namespace App\Filament\Resources\JoinRequests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JoinRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('plan_id')
                //     ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()->required(),
                Select::make('gender')
                    ->options(['male' => 'Male', 'female' => 'Female']),
                Select::make('type')
                    ->options(['student' => 'Student', 'teacher' => 'Teacher'])->required(),
                TextInput::make('university')->required(),
                TextInput::make('specialization')->required(),
                TextInput::make('university_id')->required(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
