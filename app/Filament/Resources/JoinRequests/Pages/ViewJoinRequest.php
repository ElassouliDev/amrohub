<?php

namespace App\Filament\Resources\JoinRequests\Pages;

use App\Filament\Resources\JoinRequests\JoinRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJoinRequest extends ViewRecord
{
    protected static string $resource = JoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
