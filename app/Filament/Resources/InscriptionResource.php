<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscriptionResource\Pages;
use App\Filament\Resources\InscriptionResource\RelationManagers;
use App\Models\Inscription;
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
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-add';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de l\'inscription'),
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
                TextInput::make('dateNaissance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date de naissance'),
                TextInput::make('dateDemenagement')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date amenagement'),
                TextInput::make('provenance')
                     ->autofocus()
                    ->required()
                    ->placeholder('Provenance'),
                TextInput::make('destination')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nouvelle habitation'),


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
                TextColumn::make('dateNaissance')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dateDemenagement')
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
            'index' => Pages\ListInscriptions::route('/'),
            'create' => Pages\CreateInscription::route('/create'),
            'view' => Pages\ViewInscription::route('/{record}'),
            'edit' => Pages\EditInscription::route('/{record}/edit'),
        ];
    }
}
