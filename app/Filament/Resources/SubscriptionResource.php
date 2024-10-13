<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use App\Models\Subscription;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // User Selection
                Select::make('user_id')
                    ->relationship('user', 'name') // Assuming 'name' is a field in your users table
                    ->required()
                    ->label('User'),

                // Plan Input
                TextInput::make('plan')
                    ->required()
                    ->label('Plan'),

                // Start Date
                DatePicker::make('start_date')
                    ->required()
                    ->label('Start Date'),

                // End Date
                DatePicker::make('end_date')
                    ->required()
                    ->label('End Date'),

                // Price Input
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->label('Price'),

                // Currency Selection
                Select::make('currency')
                    ->options([
                        'USD' => 'USD',
                        'EUR' => 'EUR',
                        'NIS' => 'NIS',
                    ])
                    ->default('NIS')
                    ->label('Currency'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name') // Assuming there's a relationship called 'user'
                    ->label('User')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('plan')
                    ->label('Plan')
                    ->sortable(),

                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->date()
                    ->sortable(),

                TextColumn::make('end_date')
                    ->label('End Date')
                    ->date()
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Price')
                    ->sortable(),

                TextColumn::make('currency')
                    ->label('Currency')
                    ->sortable()
                    ->badge()
                    ->color(fn($state): string => match ($state) {
                        'USD' => 'success',
                        'EUR' => 'warning',
                        'NIS' => 'danger',
                        default => 'gray',
                    })

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
            'index' => Pages\ListSubscriptions::route('/'),
            'create' => Pages\CreateSubscription::route('/create'),
            'edit' => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }
}
