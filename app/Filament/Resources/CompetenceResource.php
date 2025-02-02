<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompetenceResource\Pages;
use App\Filament\Resources\CompetenceResource\RelationManagers;
use App\Models\Competence;
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
class CompetenceResource extends Resource
{
    protected static ?string $model = Competence::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la competence'),
                TextInput::make('service')
                    ->autofocus()
                    ->required()
                    ->placeholder('Service'),
                TextInput::make('lieu')
                        ->autofocus()
                    ->required()
                    ->placeholder('Lieu'),
                TextInput::make('contact')
                    ->autofocus()
                    ->required()
                    ->placeholder('Contact'),
                TextInput::make('email')
                    ->autofocus()
                    ->required()
                    ->placeholder('Email'),
                TextInput::make('description')
                    ->autofocus()
                    ->required()
                    ->placeholder('Description'),
                TextInput::make('prix')
                    ->autofocus()
                    ->required()
                    ->placeholder('Prix'),
                FileUpload::make('image')
                    ->autofocus()
                    ->required()
                    ->placeholder('Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('service')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('lieu')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('contact')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('prix')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
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
            'index' => Pages\ListCompetences::route('/'),
            'create' => Pages\CreateCompetence::route('/create'),
            'view' => Pages\ViewCompetence::route('/{record}'),
            'edit' => Pages\EditCompetence::route('/{record}/edit'),
        ];
    }
}
