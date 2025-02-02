<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmenagementResource\Pages;
use App\Filament\Resources\AmenagementResource\RelationManagers;
use App\Models\Amenagement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;


class AmenagementResource extends Resource
{
    protected static ?string $model = Amenagement::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de l\'amenagement'),
                TextInput::make('tuteur')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du tuteur'),
                TextInput::make('tutrice')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la tutrice'),
                Select::make('sexe')
                    ->options([
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ])
                    ->placeholder('Sexe'),
                TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('Profession'),
                TextInput::make('dateAmenagement')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date d\'amenagement'),
                TextInput::make('provenance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Provenance'),
                TextInput::make('destination')
                    ->autofocus()
                    ->required()
                    ->placeholder('Destination'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tuteur')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tutrice')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('sexe')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('profession')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dateAmenagement')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('provenance')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('destination')
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
            'index' => Pages\ListAmenagements::route('/'),
            'create' => Pages\CreateAmenagement::route('/create'),
            'view' => Pages\ViewAmenagement::route('/{record}'),
            'edit' => Pages\EditAmenagement::route('/{record}/edit'),
        ];
    }
}
