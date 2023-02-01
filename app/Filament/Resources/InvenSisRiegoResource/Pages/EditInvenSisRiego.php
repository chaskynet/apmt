<?php

namespace App\Filament\Resources\InvenSisRiegoResource\Pages;

use App\Filament\Resources\InvenSisRiegoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvenSisRiego extends EditRecord
{
    protected static string $resource = InvenSisRiegoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
