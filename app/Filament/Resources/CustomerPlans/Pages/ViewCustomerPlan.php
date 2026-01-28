<?php

namespace App\Filament\Resources\CustomerPlans\Pages;

use App\Filament\Resources\CustomerPlans\CustomerPlanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomerPlan extends ViewRecord
{
    protected static string $resource = CustomerPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
