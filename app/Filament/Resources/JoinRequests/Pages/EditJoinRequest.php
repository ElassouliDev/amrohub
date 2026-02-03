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

        if ($record->status === 'approved') {
            $customer = Customer::firstOrCreate(
                [
                    'email' => $record->email,
                ],
                [
                    'name' => $record->name,
                    'phone' => $record->phone,
                    'gender' => $record->gender,
                    'university' => $record->university,
                    'specialization' => $record->specialization,
                    'university_id' => $record->university_id,
                    'user_type' => $record->type,
                    'account_status' => true,
                    'id_image_path' => $record->id_image_path,
                    'plan_id' => $record->plan_id,
                ]
            );

            if ($customer->wasRecentlyCreated) {
                $customer->customerPlans()->create([
                    'plan_id' => $record->plan_id,
                    'start_date' => $record->start_date,
                    'end_date' => $record->end_date,
                    'status' => 'active',
                    "uuid" => "{$record->plan_id}_{$record->id}_" . now()->getTimestamp(),
                ]);
            }

            $record->delete();
        }

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
