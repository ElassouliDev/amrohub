<?php

namespace App\Filament\Resources\JoinRequests\Tables;

use App\Filament\Exports\JoinRequestExporter;
use App\Models\Customer;
use App\Models\JoinRequest;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ExportBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class JoinRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plan.title')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('gender')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'female' => 'warning',
                        'male' => 'info',
                    }),
                TextColumn::make('type')
                    ->badge()

                    ->color(fn(string $state): string => match ($state) {
                        'student' => 'gray',
                        'teacher' => 'info',
                    }),
                TextColumn::make('university')
                    ->searchable(),
                TextColumn::make('specialization')
                    ->searchable(),
                TextColumn::make('university_id')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()->color(fn(string $state): string => match ($state) {
                        'pending' => 'warning',
                        'approved' => 'success',
                        'rejected' => 'danger',
                    }),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                DateRangeFilter::make('created_at'),

                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),

                SelectFilter::make('gender')
                    ->multiple()
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ]),
                SelectFilter::make('type')
                    ->multiple()
                    ->options([
                        'student' => 'Student',
                        'teacher' => 'Teacher',
                    ]),

            ])
            ->headerActions([
                ExportAction::make()->exporter(JoinRequestExporter::class)
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                Action::make('updateStatus')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'pending' => 'Pending',
                                'approved' => 'Approved',
                                'rejected' => 'Rejected',
                            ])
                            ->required(),
                    ])
                    ->action(function (array $data, JoinRequest $record): void {
                        $record->status = $data['status'];
                        $record->save();

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
                    })->icon(Heroicon::OutlinedPencilSquare)


                    ->visible(fn(JoinRequest $record): bool => $record->status === "pending"),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    ExportBulkAction::make()->exporter(JoinRequestExporter::class),
                    DeleteBulkAction::make(),
                    BulkAction::make('updateStatus')
                        ->label('Update Status')
                        ->schema([
                            Select::make('status')
                                ->label('Status')
                                ->options([
                                    'pending' => 'Pending',
                                    'approved' => 'Approved',
                                    'rejected' => 'Rejected',
                                ])
                                ->required(),
                        ])
                        ->action(function (array $data,  $records): void {
                            $records->each(function ($record) use ($data) {

                                $record->status = $data['status'];
                                $record->save();

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
                            });

                        })->icon(Heroicon::OutlinedPencilSquare)

//                    ForceDeleteBulkAction::make(),
//                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
