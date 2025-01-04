<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Company';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\TextInput::make('web')
                    ->label('Web')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Select::make('city')
                    ->label('City')
                    ->options([
                        'Jakarta' => 'Jakarta',
                        'Bandung' => 'Bandung',
                        'Surabaya' => 'Surabaya',
                        'Yogyakarta' => 'Yogyakarta',
                        'Semarang' => 'Semarang',
                        'Malang' => 'Malang',
                    ])
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->avatar()
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\FileUpload::make('cover')
                    ->label('Cover')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\FileUpload::make('gallery')
                    ->label('Gallery')
                    ->columnSpan('full')
                    ->multiple()
                    ->required(),
                Forms\Components\Textarea::make('about')
                    ->label('About')
                    ->columnSpan('full')
                    ->rows(10)
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->columnSpan('full')
                    ->rows(10)
                    ->required(),
                Forms\Components\TextInput::make('linkedin')
                    ->label('Linkedin')
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
