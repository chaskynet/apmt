<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvenSisRiegoResource\Pages;
use App\Filament\Resources\InvenSisRiegoResource\RelationManagers;
use App\Models\InvenSisRiego;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvenSisRiegoResource extends Resource
{
    protected static ?string $model = InvenSisRiego::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\TextInput::make('DEPARTAMENTO')->required(),
                 Forms\Components\TextInput::make('SISTEM_FUNC_N')->required(),
                 Forms\Components\TextInput::make('SISTEM_FUNC_PERCENT')->required(),
                 Forms\Components\TextInput::make('USUARIOS_FAM_N')->required(),
                 Forms\Components\TextInput::make('USUARIOS_FAM_PERCENT')->required(),
                 Forms\Components\TextInput::make('AREA_HA')->required(),
                 Forms\Components\TextInput::make('AREA_PERCENT')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('DEPARTAMENTO'),
                Tables\Columns\TextColumn::make('SISTEM_FUNC_N'),
                Tables\Columns\TextColumn::make('SISTEM_FUNC_PERCENT'),
                Tables\Columns\TextColumn::make('USUARIOS_FAM_N'),
                Tables\Columns\TextColumn::make('USUARIOS_FAM_PERCENT'),
                Tables\Columns\TextColumn::make('AREA_HA'),
                Tables\Columns\TextColumn::make('AREA_PERCENT'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvenSisRiegos::route('/'),
            'create' => Pages\CreateInvenSisRiego::route('/create'),
            'edit' => Pages\EditInvenSisRiego::route('/{record}/edit'),
        ];
    }    
}
