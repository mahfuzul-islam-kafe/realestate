<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('profile_image')
                    ->label('Profile Image')
                    ->nullable()
                    ->maxSize(1024)
                    ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/gif'])
                    ->directory('profile-images')
                    ->preserveFilenames()
                    ->required(false),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                TextInput::make('password')
                    ->required()
                    ->minLength(8)
                    ->maxLength(255)
                    ->dehydrated(fn($state) => filled($state)),
                TextInput::make('phone')
                    ->nullable()
                    ->maxLength(15),
                Select::make('role')
                    ->options([
                        'user' => 'User',
                        'agent' => 'Agent',
                        'admin' => 'Admin',
                    ])
                    ->required()
                    ->default('user'),
                Radio::make('is_subscribed')->label('Is Subscribed?')
                    ->boolean()
                    ->inline()
                    ->default(false),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('role')->sortable(),
                ToggleColumn::make('is_subscribed')->sortable(),
                TextColumn::make('created_at')->date(),
                TextColumn::make('updated_at')->date(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
