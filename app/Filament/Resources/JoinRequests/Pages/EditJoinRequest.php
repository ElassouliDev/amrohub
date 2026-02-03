<?php

namespace App\Filament\Resources\JoinRequests\Pages;

use App\Filament\Resources\JoinRequests\JoinRequestResource;
use App\Models\Customer;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use function Symfony\Component\Clock\now;

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

    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        $record->update($data);

        JoinRequestResource::acceptRequest($record);


        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
