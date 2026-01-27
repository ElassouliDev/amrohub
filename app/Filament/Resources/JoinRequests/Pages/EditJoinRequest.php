<?php

namespace App\Filament\Resources\JoinRequests\Pages;

use App\Filament\Resources\JoinRequests\JoinRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditJoinRequest extends EditRecord
{
    protected static string $resource = JoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
          //  DeleteAction::make(),
          //  ForceDeleteAction::make(),
          //  RestoreAction::make(),
        ];
    }
}
