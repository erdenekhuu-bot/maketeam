<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->options(
                        \App\Models\User::pluck('name', 'id')->toArray()
                    )
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\TextInput::make('fullname')
                    ->label('Нэр')
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\FileUpload::make('profile')
                    ->label('Профайл зураг')
                    ->avatar()
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\Textarea::make('about')
                    ->label('Миний тухай')
                    ->columnSpan('full')
                    ->rows(10)
                    ->required(),

                Forms\Components\TextInput::make('linkedin')
                    ->label('LinkedIn')
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\TextInput::make('twitter')
                    ->label('Twitter')
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\TextInput::make('facebook')
                    ->label('Facebook')
                    ->columnSpan('full')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
