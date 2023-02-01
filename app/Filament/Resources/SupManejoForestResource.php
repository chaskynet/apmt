<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupManejoForestResource\Pages;
use App\Filament\Resources\SupManejoForestResource\RelationManagers;
use App\Models\SupManejoForest;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupManejoForestResource extends Resource
{
    protected static ?string $model = SupManejoForest::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('TIPO_USUARIO')->required(),
                Forms\Components\TextInput::make('ANO')->required(),
                Forms\Components\TextInput::make('SUP_HA')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TIPO_USUARIO'),
                Tables\Columns\TextColumn::make('ANO'),
                Tables\Columns\TextColumn::make('SUP_HA'),
                
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
            'index' => Pages\ListSupManejoForests::route('/'),
            'create' => Pages\CreateSupManejoForest::route('/create'),
            'edit' => Pages\EditSupManejoForest::route('/{record}/edit'),
        ];
    }    
}
