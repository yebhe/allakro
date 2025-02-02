<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeceResource\Pages;
use App\Filament\Resources\DeceResource\RelationManagers;
use App\Models\Dece;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
class DeceResource extends Resource
{
    protected static ?string $model = Dece::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('nom du decede'),
                TextInput::make('tuteur')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la tutrice du decede'),
                TextInput::make('tutrice')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la tutrice du decede'),
                TextInput::make('sexe')
                    ->autofocus()
                    ->required()
                    ->placeholder('Sexe du decede'),
                TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('Profession du decede'),
                TextInput::make('dateNaissance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date de decès'),
                TextInput::make('provenance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Provenance du decede'),
                TextInput::make('destination')
                    ->autofocus()
                    ->required()
                    ->placeholder('Destination du decede'),

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
            'index' => Pages\ListDeces::route('/'),
            'create' => Pages\CreateDece::route('/create'),
            'view' => Pages\ViewDece::route('/{record}'),
            'edit' => Pages\EditDece::route('/{record}/edit'),
        ];
    }
}
