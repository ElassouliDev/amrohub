<?php

namespace App\Filament\Resources\CustomerPlans\Tables;

use Dom\Text;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Schemas\Components\Html;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CustomerPlansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('uuid')
                    ->copyable()
                    ->searchable()
                    ->label("#")
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make("uuid")
                    ->label("Qr Code")->formatStateUsing(function ($state) {
                        return  static::generateQrCode($state, 50);
                    }),
                TextColumn::make('customer.name')
                    ->searchable(),
                TextColumn::make('plan.title')
                    ->searchable(),
                TextColumn::make('start_date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('daily_limit')
                    ->searchable(),
                TextColumn::make('weekly_limit')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                //  ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                Action::make('viewQrCode')
                    ->label('QR Code')
                    ->icon('heroicon-o-qr-code')
                    ->modalHeading("Your QR  Code")
                    ->modalSubmitAction(false)
                    ->modalContent(fn($record) => new HtmlString(
                        '<div class="flex text-center justify-center">' .
                            static::generateQrCode($record->uuid, 400) .
                            '</div>'
                    )),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function generateQrCode($uuid, $size = 250)
    {
        return new HtmlString(
            QrCode::
                // ->merge(public_path('amrohub.png'), 0.3, true)
                size($size)
                //  ->errorCorrection('H')
                ->generate(route('scan', $uuid)) // Or any data like URL
        );
    }
}
