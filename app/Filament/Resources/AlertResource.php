<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlertResource\Pages;
use App\Filament\Resources\AlertResource\RelationManagers;
use App\Models\Alert;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlertResource extends Resource
{
    protected static ?string $model = Alert::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name') // Assuming user model has a 'name' attribute
                    ->required()
                    ->label('User'),
                Textarea::make('criteria')
                    ->required()
                    ->label('Criteria'),
                Select::make('alert_frequency')
                    ->options([
                        'daily' => 'Daily',
                        'weekly' => 'Weekly',
                        'monthly' => 'Monthly',
                    ])
                    ->default('daily')
                    ->label('Alert Frequency'),
                Radio::make('is_active')
                    ->label('Is Active')
                    ->options([
                        true => 'Yes',
                        false => 'No',
                    ])
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name') // Display the user's name
                    ->label('User')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('criteria')
                    ->label('Criteria')
                    ->sortable(),
                TextColumn::make('alert_frequency')
                    ->label('Frequency')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'daily' => 'blue',
                        'weekly' => 'yellow',
                        'monthly' => 'green',
                        default => 'gray',
                    }),
                TextColumn::make('is_active')
                    ->label('Active')
                    ->badge()
                    ->color(fn(bool $state): string => $state ? 'green' : 'red')
                    ->formatStateUsing(fn(bool $state): string => $state ? 'Yes' : 'No'),
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
            'index' => Pages\ListAlerts::route('/'),
            'create' => Pages\CreateAlert::route('/create'),
            'edit' => Pages\EditAlert::route('/{record}/edit'),
        ];
    }
}
