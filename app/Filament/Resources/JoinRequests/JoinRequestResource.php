<?php

namespace App\Filament\Resources\JoinRequests;

use App\Filament\Resources\JoinRequests\Pages\CreateJoinRequest;
use App\Filament\Resources\JoinRequests\Pages\EditJoinRequest;
use App\Filament\Resources\JoinRequests\Pages\ListJoinRequests;
use App\Filament\Resources\JoinRequests\Pages\ViewJoinRequest;
use App\Filament\Resources\JoinRequests\Schemas\JoinRequestForm;
use App\Filament\Resources\JoinRequests\Schemas\JoinRequestInfolist;
use App\Filament\Resources\JoinRequests\Tables\JoinRequestsTable;
use App\Models\JoinRequest;
use App\Models\Plan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JoinRequestResource extends Resource
{
    protected static ?string $model = JoinRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Join Requests';

    public static function form(Schema $schema): Schema
    {
        return JoinRequestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JoinRequestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JoinRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //'plan' => Plan::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJoinRequests::route('/'),
          //  'create' => CreateJoinRequest::route('/create'),
            'view' => ViewJoinRequest::route('/{record}'),
            'edit' => EditJoinRequest::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
            //    SoftDeletingScope::class,
            ]);
    }
}
