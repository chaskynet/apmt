<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SenariResource\Pages;
use App\Filament\Resources\SenariResource\RelationManagers;
use App\Models\Senari;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SenariResource extends Resource
{
    protected static ?string $model = Senari::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('TITULAR')->required(),
                Forms\Components\TextInput::make('DEPARTAMENTO')->required(),
                Forms\Components\TextInput::make('FUENTE')->required(),
                Forms\Components\TextInput::make('TIPO_FUENTE')->required(),
                Forms\Components\TextInput::make('OBRA')->required(),
                Forms\Components\TextInput::make('TIPO_OBRA')->required(),
                Forms\Components\TextInput::make('SUPERFICIE_HA')->required(),
                Forms\Components\TextInput::make('UTM'),
                Forms\Components\TextInput::make('FAMILIAS')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TITULAR'),
                Tables\Columns\TextColumn::make('DEPARTAMENTO'),
                Tables\Columns\TextColumn::make('FUENTE'),
                Tables\Columns\TextColumn::make('TIPO_FUENTE'),
                Tables\Columns\TextColumn::make('OBRA'),
                Tables\Columns\TextColumn::make('TIPO_OBRA'),
                Tables\Columns\TextColumn::make('SUPERFICIE_HA'),
                Tables\Columns\TextColumn::make('UTM'),
                Tables\Columns\TextColumn::make('FAMILIAS'),

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
            'index' => Pages\ListSenaris::route('/'),
            'create' => Pages\CreateSenari::route('/create'),
            'edit' => Pages\EditSenari::route('/{record}/edit'),
        ];
    }    
}
