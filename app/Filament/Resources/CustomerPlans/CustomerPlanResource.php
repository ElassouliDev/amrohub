<?php

namespace App\Filament\Resources\CustomerPlans;

use App\Filament\Resources\CustomerPlans\Pages\CreateCustomerPlan;
use App\Filament\Resources\CustomerPlans\Pages\EditCustomerPlan;
use App\Filament\Resources\CustomerPlans\Pages\ListCustomerPlans;
use App\Filament\Resources\CustomerPlans\Pages\ViewCustomerPlan;
use App\Filament\Resources\CustomerPlans\Schemas\CustomerPlanForm;
use App\Filament\Resources\CustomerPlans\Schemas\CustomerPlanInfolist;
use App\Filament\Resources\CustomerPlans\Tables\CustomerPlansTable;
use App\Models\CustomerPlan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CustomerPlanResource extends Resource
{
    protected static ?string $model = CustomerPlan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Customers Plan';

    public static function form(Schema $schema): Schema
    {
        return CustomerPlanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CustomerPlanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomerPlansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomerPlans::route('/'),
            'create' => CreateCustomerPlan::route('/create'),
            'view' => ViewCustomerPlan::route('/{record}'),
            'edit' => EditCustomerPlan::route('/{record}/edit'),
        ];
    }
}
