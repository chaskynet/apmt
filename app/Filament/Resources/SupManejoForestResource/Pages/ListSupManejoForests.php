<?php

namespace App\Filament\Resources\SupManejoForestResource\Pages;

use App\Filament\Resources\SupManejoForestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupManejoForests extends ListRecords
{
    protected static string $resource = SupManejoForestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
