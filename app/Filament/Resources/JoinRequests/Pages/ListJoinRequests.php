<?php

namespace App\Filament\Resources\JoinRequests\Pages;

use App\Filament\Resources\JoinRequests\JoinRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJoinRequests extends ListRecords
{
    protected static string $resource = JoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
       //     CreateAction::make(),
        ];
    }

}
