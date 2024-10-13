<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Property, Buyer, Seller Selection in one line
                Grid::make(3)->schema([
                    Select::make('property_id')
                        ->relationship('property', 'title')
                        ->required()
                        ->label('Property'),

                    Select::make('buyer_id')
                        ->options(User::where('role', 'user')->pluck('name', 'id')) // Only users with 'user' role
                        ->required()
                        ->label('Buyer'),

                    Select::make('seller_id')
                        ->options(User::where('role', 'agent')->pluck('name', 'id')) // Only users with 'agent' role
                        ->required()
                        ->label('Seller'),
                ]),

                // Transaction Type
                Radio::make('type')
                    ->options([
                        'buy' => 'Buy',
                        'rent' => 'Rent',
                    ])
                    ->label('Transaction Type')
                    ->required(),

                // Price Input
                TextInput::make('price')
                    ->numeric()
                    ->required()
                    ->label('Price'),

                // Currency Selection
                Radio::make('currency')
                    ->options([
                        'USD' => 'USD',
                        'EUR' => 'EUR',
                        'NIS' => 'NIS',
                    ])
                    ->default('NIS')
                    ->label('Currency')
                    ->required(),

                // Transaction Status
                Radio::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->label('Transaction Status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('property.title')->sortable()->searchable(), // Display property title
                TextColumn::make('buyer.name')->sortable()->searchable(), // Display buyer's name
                TextColumn::make('seller.name')->sortable()->searchable(), // Display seller's name
                TextColumn::make('type')->sortable(),
                TextColumn::make('price')->sortable(),
                TextColumn::make('currency')->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'warning',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                    }),
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
