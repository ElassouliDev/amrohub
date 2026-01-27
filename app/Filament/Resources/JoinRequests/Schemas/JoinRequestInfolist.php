<?php

namespace App\Filament\Resources\JoinRequests\Schemas;

use App\Models\JoinRequest;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class JoinRequestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('plan.title')
                    ->placeholder('-'),
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('gender')
                    ->badge()
                    ->placeholder('-'),
                TextEntry::make('type')
                    ->badge()
                    ->placeholder('-'),
                TextEntry::make('university')
                    ->placeholder('-'),
                TextEntry::make('specialization')
                    ->placeholder('-'),
                TextEntry::make('university_id')
                    ->placeholder('-'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (JoinRequest $record): bool => $record->trashed()),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
