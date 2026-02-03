<?php

namespace App\Filament\Resources\UsageLogs\Pages;

use App\Filament\Resources\UsageLogs\UsageLogResource;
use Carbon\Carbon;
use Filament\Resources\Pages\CreateRecord;

class CreateUsageLog extends CreateRecord
{
    protected static string $resource = UsageLogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data['end_time'])
            $data['duration'] = abs(Carbon::parse($data['end_time'])->diffInMinutes(Carbon::parse($data['start_time'])));
        return $data;
    }
}
