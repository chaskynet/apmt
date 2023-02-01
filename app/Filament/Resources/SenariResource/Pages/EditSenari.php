<?php

namespace App\Filament\Resources\SenariResource\Pages;

use App\Filament\Resources\SenariResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSenari extends EditRecord
{
    protected static string $resource = SenariResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
