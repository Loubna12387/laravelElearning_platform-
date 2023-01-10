<?php

namespace App\Filament\Resources;
use Filament\Forms;
use Filament\Tables;
use App\Models\Education;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EducationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\EducationResource\RelationManagers;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form


            ->schema([
                Card::make()
                ->schema([
                TextInput::make('titre'),
                TextInput::make('description'), 
                TextInput::make('prix'),
                TextInput::make('type_education_id')->label('Type Education'),
                 ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('titre')->sortable()->searchable(),
                TextColumn::make('description')->sortable()->searchable(),
                SpatieMediaLibraryImageColumn::make('image')->collection('courses'),
                TextColumn::make('prix')->sortable()->searchable(),
                TextColumn::make('type_education_id')->sortable(),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
