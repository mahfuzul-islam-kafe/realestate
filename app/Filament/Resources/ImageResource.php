<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageResource\Pages;
use App\Filament\Resources\ImageResource\RelationManagers;
use App\Models\Image;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageResource extends Resource
{
    protected static ?string $model = Image::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('property_id')
                    ->relationship('property', 'title')
                    ->required()
                    ->label('Property'),

                FileUpload::make('path')
                    ->required()
                    ->label('Image File')
                    ->disk('public')
                    ->directory('images')
                    ->preserveFilenames()
                    ->maxSize(5120),
                Toggle::make('featured')
                    ->label('Featured')
                    ->default(false),

                Toggle::make('three_sixty')
                    ->label('360° View')
                    ->default(false),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('property.title')->label('Property')->sortable()->searchable(),
                TextColumn::make('featured')
                    ->label('Featured')
                    ->getStateUsing(fn($record) => $record->featured ? 'Yes' : 'No') 
                    ->badge()
                    ->color(fn($state) => $state === 'Yes' ? 'success' : 'gray'),
                TextColumn::make('three_sixty')
                    ->label('360° View')
                    ->getStateUsing(fn($record) => $record->three_sixty ? 'Yes' : 'No') 
                    ->badge()
                    ->color(fn($state) => $state === 'Yes' ? 'success' : 'gray'), 
                ImageColumn::make('path')
                    ->label('Image')
                    ->sortable()
                    ->disk('public')
                    ->height(100)
                    ->width(100),
                TextColumn::make('created_at')->date()->label('Created At'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImage::route('/create'),
            'edit' => Pages\EditImage::route('/{record}/edit'),
        ];
    }
}
