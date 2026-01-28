<?php

namespace App\Filament\Resources\Customers\Schemas;

use App\Models\Customer;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CustomerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('gender')
                    ->badge()
                    ->placeholder('-'),
                TextEntry::make('university')
                    ->placeholder('-'),
                TextEntry::make('specialization')
                    ->placeholder('-'),
                TextEntry::make('university_id')
                    ->placeholder('-'),
                TextEntry::make('user_type')
                    ->badge(),
                IconEntry::make('account_status')
                    ->boolean(),
                ImageEntry::make('id_image_path')
                    ->placeholder('-'),
                // TextEntry::make('plan_id')
                //     ->numeric()
                //     ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn(Customer $record): bool => $record->trashed()),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
