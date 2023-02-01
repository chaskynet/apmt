<?php

namespace App\Filament\Resources\UsoAgricolaResource\Pages;

use App\Filament\Resources\UsoAgricolaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsoAgricola extends EditRecord
{
    protected static string $resource = UsoAgricolaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
