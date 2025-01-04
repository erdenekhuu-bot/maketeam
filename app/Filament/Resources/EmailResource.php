<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmailResource\Pages;
use App\Filament\Resources\EmailResource\RelationManagers;
use App\Models\Email;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmailResource extends Resource
{
    protected static ?string $model = Email::class;

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

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
                Forms\Components\Select::make('subscribe')
                    ->options([
                        'daily' => 'Өдөр тутмын тойм',
                        'weekly-startup' => '7 хоног бүрийн стартапууд',
                        'weekly-enterprise' => '7 хоног бүрийн ажлын байр',
                        'weekly-event' => '7 хоног бүрийн арга хэмжээ',
                    ])
                    ->label('Имэйл дохиоллын тохиргоо')
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
            'index' => Pages\ListEmails::route('/'),
            'create' => Pages\CreateEmail::route('/create'),
            'edit' => Pages\EditEmail::route('/{record}/edit'),
        ];
    }
}
