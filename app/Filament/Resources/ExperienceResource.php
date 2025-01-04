<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    protected static ?string $navigationGroup = 'User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('profile_id')
                    ->options(
                        \App\Models\User::pluck('name', 'id')->toArray()
                    )
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\TextInput::make('company')
                    ->label('Компанид ажилласан туршлага')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\TextInput::make('role')
                    ->label('Үүрэг')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Datepicker::make('started')
                    ->label('Эхэлсэн хугацаа')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Datepicker::make('ended')
                    ->label('Дууссан хугацаа')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Checkbox::make('is_current')
                    ->label('Одоо ажиллаж байгаа эсэх')
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
