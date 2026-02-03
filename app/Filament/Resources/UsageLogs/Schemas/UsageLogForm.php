<?php

namespace App\Filament\Resources\UsageLogs\Schemas;

use App\Models\CustomerPlan;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

use function Symfony\Component\Clock\now;

class UsageLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->relationship('customer', 'name')
                    ->searchable(['name', 'email', 'phone'])
                    ->required()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('customer_plan_id', null);
                    }),
                Select::make('plan_id')
                    ->relationship('plan', 'title')
                    ->required()
                    ->searchable()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('customer_plan_id', null);
                    }),
                Select::make('customer_plan_id')
                    ->disabled(fn(Get $get): bool => !$get('customer_id') || !$get('plan_id'))
                    ->placeholder(fn(Get $get): string => $get('plan_id') && $get('customer_id') ? 'Select a customer plan' : 'Select a customer and a plan first')
                    ->options(function (Get $get) {
                        $customer_id = $get('customer_id');
                        $plan_id = $get('plan_id');

                        if (!$customer_id || !$plan_id) {
                            return [];
                        }

                        return CustomerPlan::query()
                            ->where('customer_id', $customer_id)
                            // ->where('plan_id', $plan_id)
                            ->pluck('uuid', 'id');
                    })

                    ->required(),
                DateTimePicker::make('start_time')
                    ->required(),
                DateTimePicker::make('end_time')->afterOrEqual('now'),

            ]);
    }
}
