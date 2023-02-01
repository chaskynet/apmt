<?php

namespace App\Filament\Resources\SenariResource\Pages;

use App\Filament\Resources\SenariResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSenaris extends ListRecords
{
    protected static string $resource = SenariResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
