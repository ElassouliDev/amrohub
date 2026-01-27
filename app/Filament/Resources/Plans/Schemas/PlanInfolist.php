<?php

namespace App\Filament\Resources\Plans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PlanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('plan_type')
                    ->badge(),
                TextEntry::make('daily_limit')
                    ->numeric(),
                TextEntry::make('weekly_limit')
                    ->numeric(),
                TextEntry::make('monthly_limit')
                    ->numeric(),
                TextEntry::make('total_hours')
                    ->numeric(),
                TextEntry::make('duration')
                    ->numeric(),
                TextEntry::make('start_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('end_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
