<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NaissanceResource\Pages;
use App\Filament\Resources\NaissanceResource\RelationManagers;
use App\Models\Naissance;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
class NaissanceResource extends Resource
{
    protected static ?string $model = Naissance::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du nouveau ne'),
                TextInput::make('tuteur')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du tuteur'),
                TextInput::make('tutrice')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la tutrice'),
                TextInput::make('sexe')
                    ->autofocus()
                    ->required()
                    ->placeholder('Sexe'),
                TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('Profession de la tutrice'),
                TextInput::make('dateNaissance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date de naissance'),
                TextInput::make('dateDemenagement')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date de baptême'),
                TextInput::make('provenance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Provenance'),
                TextInput::make('destination')
                    ->autofocus()
                    ->required()
                    ->placeholder('lieu de naissance'),


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
            'index' => Pages\ListNaissances::route('/'),
            'create' => Pages\CreateNaissance::route('/create'),
            'view' => Pages\ViewNaissance::route('/{record}'),
            'edit' => Pages\EditNaissance::route('/{record}/edit'),
        ];
    }
}
