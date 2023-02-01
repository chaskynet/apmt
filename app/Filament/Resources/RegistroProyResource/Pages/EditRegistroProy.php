<?php

namespace App\Filament\Resources\RegistroProyResource\Pages;

use App\Filament\Resources\RegistroProyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegistroProy extends EditRecord
{
    protected static string $resource = RegistroProyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
