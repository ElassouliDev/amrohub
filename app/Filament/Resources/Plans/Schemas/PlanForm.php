<?php

namespace App\Filament\Resources\Plans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('plan_type')
                    ->options(['normal' => 'Normal', 'campaign' => 'Campaign', 'other' => 'Other'])
                    ->default('normal')
                    ->required(),
                TextInput::make('daily_limit')
//                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('weekly_limit')
//                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('monthly_limit')
//                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('total_hours')
//                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('duration')
//                    ->required()
                    ->numeric()
                    ->default(0),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
            ]);
    }
}
