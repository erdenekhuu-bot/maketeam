<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Forms\Components\TextInput::make('fullname')
                        ->label('Full Name')
                        ->placeholder('John Doe')
                        ->required(),
                    Forms\Components\FileUpload::make('profile')
                        ->label('Profile Picture')
                        ->image()
                        ->avatar()
                        ->required(),
                    Forms\Components\Textarea::make('about')
                        ->label('About')
                        ->placeholder('A longer description of the profile')
                        ->required(),
                    Forms\Components\TextInput::make('linkedin')
                        ->label('LinkedIn')
                        ->placeholder('https://www.linkedin.com/in/johndoe'),
                    Forms\Components\TextInput::make('twitter')
                        ->label('Twitter')
                        ->placeholder('https://twitter.com/johndoe'),
                    Forms\Components\TextInput::make('facebook')
                        ->label('Facebook')
                        ->placeholder('https://www.facebook.com/johndoe'),
                ]),
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
