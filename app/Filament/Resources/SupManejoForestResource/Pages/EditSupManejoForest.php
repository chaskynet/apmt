<?php

namespace App\Filament\Resources\SupManejoForestResource\Pages;

use App\Filament\Resources\SupManejoForestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupManejoForest extends EditRecord
{
    protected static string $resource = SupManejoForestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
