<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemenagementResource\Pages;
use App\Filament\Resources\DemenagementResource\RelationManagers;
use App\Models\Demenagement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemenagementResource extends Resource
{
    protected static ?string $model = Demenagement::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du demenagement'),
                Forms\Components\TextInput::make('tuteur')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du tuteur'),
                Forms\Components\TextInput::make('tutrice')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la tutrice'),
                Forms\Components\Select::make('sexe')
                    ->options([
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ])
                    ->placeholder('Sexe'),
                Forms\Components\TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('Profession'),
                Forms\Components\TextInput::make('dateNaissance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date de demenagement'),
                Forms\Components\TextInput::make('dateDemenagement')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date de demenagement'),
                Forms\Components\TextInput::make('provenance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Provenance'),
                Forms\Components\TextInput::make('destination')
                    ->autofocus()
                    ->required()
                    ->placeholder('Destination'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tuteur')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tutrice')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sexe')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('profession')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dateNaissance')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dateDemenagement')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provenance')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('destination')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDemenagements::route('/'),
            'create' => Pages\CreateDemenagement::route('/create'),
            'view' => Pages\ViewDemenagement::route('/{record}'),
            'edit' => Pages\EditDemenagement::route('/{record}/edit'),
        ];
    }
}
