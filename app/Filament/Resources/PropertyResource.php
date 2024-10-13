<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Textarea::make('description')->required(),
                TextInput::make('price')->numeric()->required(),
                Select::make('currency')
                    ->options([
                        'USD' => 'USD',
                        'EUR' => 'EUR',
                        'NIS' => 'NIS',
                    ])->default('NIS'),
                TextInput::make('surface_area')->numeric(),
                TextInput::make('rooms')->numeric()->required(),
                TextInput::make('bedrooms')->numeric()->required(),
                TextInput::make('bathrooms')->numeric()->required(),
                TextInput::make('toilets')->numeric()->required(),
                TextInput::make('construction_year')->numeric()->nullable(),
                DatePicker::make('free_date')->nullable(),
                Select::make('type')
                    ->options([
                        'Apartment' => 'Apartment',
                        'Villa' => 'Villa',
                        'Duplex' => 'Duplex',
                        'Triplex' => 'Triplex',
                        'Penthouse' => 'Penthouse',
                        'Cottage/House' => 'Cottage/House',
                    ])->required(),
                Toggle::make('is_rented')->default(false),
                Toggle::make('is_sold')->default(false),
                TextInput::make('city')->required(),
                TextInput::make('region')->nullable(),
                TextInput::make('address')->required(),
                Toggle::make('is_exact_address')->default(true),
                Toggle::make('parking')->default(false),
                Toggle::make('balcony')->default(false),
                Toggle::make('terrace')->default(false),
                Toggle::make('elevator')->default(false),
                Toggle::make('accessible')->default(false),
                Toggle::make('air_conditioner')->default(false),
                Toggle::make('pool')->default(false),
                Toggle::make('furnished')->default(false),
                Toggle::make('exclusivity')->default(false),
                Toggle::make('is_exceptional')->default(false),
                Select::make('agent_id')
                    ->relationship('agent', 'name')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('price')->sortable(),
                TextColumn::make('currency')->sortable(),
                TextColumn::make('city')->sortable(),
                ToggleColumn::make('is_rented')->sortable(),
                ToggleColumn::make('is_sold')->sortable(),
                ToggleColumn::make('parking')->sortable(),
                ToggleColumn::make('balcony')->sortable(),
                ToggleColumn::make('terrace')->sortable(),
                ToggleColumn::make('pool')->sortable(),
                TextColumn::make('created_at')->date(),
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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
