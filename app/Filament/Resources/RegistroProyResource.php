<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistroProyResource\Pages;
use App\Filament\Resources\RegistroProyResource\RelationManagers;
use App\Models\RegistroProy;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistroProyResource extends Resource
{
    protected static ?string $model = RegistroProy::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('TIPO_REG')->required(),
                Forms\Components\TextInput::make('INSTITUCION')->required(),
                Forms\Components\TextInput::make('TIPO_INST')->required(),
                Forms\Components\TextInput::make('NOMBRE_CONT')->required(),
                Forms\Components\TextInput::make('APELLIDO_CONT')->required(),
                Forms\Components\TextInput::make('CARGO')->required(),
                Forms\Components\TextInput::make('DIRECCION')->required(),
                Forms\Components\TextInput::make('CIUDAD')->required(),
                Forms\Components\TextInput::make('TELF')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TIPO_REG'),
                Tables\Columns\TextColumn::make('INSTITUCION'),
                Tables\Columns\TextColumn::make('TIPO_INST'),
                Tables\Columns\TextColumn::make('NOMBRE_CONT'),
                Tables\Columns\TextColumn::make('APELLIDO_CONT'),
                Tables\Columns\TextColumn::make('CARGO'),
                Tables\Columns\TextColumn::make('DIRECCION'),
                Tables\Columns\TextColumn::make('CIUDAD'),
                Tables\Columns\TextColumn::make('TELF'),
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
            'index' => Pages\ListRegistroProys::route('/'),
            'create' => Pages\CreateRegistroProy::route('/create'),
            'edit' => Pages\EditRegistroProy::route('/{record}/edit'),
        ];
    }    
}
