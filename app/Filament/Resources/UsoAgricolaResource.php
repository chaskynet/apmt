<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsoAgricolaResource\Pages;
use App\Filament\Resources\UsoAgricolaResource\RelationManagers;
use App\Models\UsoAgricola;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsoAgricolaResource extends Resource
{
    protected static ?string $model = UsoAgricola::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('DEPARTAMENTO')->required(),
                Forms\Components\TextInput::make('PROYECTOS')->required(),
                Forms\Components\TextInput::make('AREA_HA')->required(),
                Forms\Components\TextInput::make('FAMILIAS')->required(),
                Forms\Components\TextInput::make('COST_BS')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('DEPARTAMENTO'),
                Tables\Columns\TextColumn::make('PROYECTOS'),
                Tables\Columns\TextColumn::make('AREA_HA'),
                Tables\Columns\TextColumn::make('FAMILIAS'),
                Tables\Columns\TextColumn::make('COST_BS'),
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
            'index' => Pages\ListUsoAgricolas::route('/'),
            'create' => Pages\CreateUsoAgricola::route('/create'),
            'edit' => Pages\EditUsoAgricola::route('/{record}/edit'),
        ];
    }    
}
