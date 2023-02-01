<?php

namespace App\Filament\Resources\UsoAgricolaResource\Pages;

use App\Filament\Resources\UsoAgricolaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsoAgricolas extends ListRecords
{
    protected static string $resource = UsoAgricolaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
