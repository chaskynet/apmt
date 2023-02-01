<?php

namespace App\Filament\Resources\RegistroProyResource\Pages;

use App\Filament\Resources\RegistroProyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegistroProys extends ListRecords
{
    protected static string $resource = RegistroProyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
