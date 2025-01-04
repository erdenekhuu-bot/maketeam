<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoResource\Pages;
use App\Filament\Resources\InfoResource\RelationManagers;
use App\Models\Info;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfoResource extends Resource
{
    protected static ?string $model = Info::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationGroup = 'Company';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                    ->label('Компани')
                    ->options(
                        \App\Models\Company::pluck('name', 'id')->toArray()
                    )
                    ->columnSpan('full')
                    ->required(),


                Forms\Components\Datepicker::make('created')
                    ->label('Цаг хугацаа')
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\Select::make('type')
                    ->label('Vertical')
                    ->options([
                        'startup' => 'Гарааны бизнес',
                        'enterprise' => 'Төрийн байгууллага',
                        'event' => 'Буяны байгууллага',
                    ])
                    ->placeholder('Select one')
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\Checkbox::make('is_donate')
                    ->label('Хандив цуглуулдаг эсэх')
                    ->columnSpan('full')
                    ->required(),

                Forms\Components\Select::make('oportunity')
                    ->label('Үйл ажиллагааны төрөл')
                    ->options([
                        'contact' => 'Хувийн',
                        'education' => 'Боловсрол',
                        'advice' => 'Зөвлөгөө',
                    ])
                    ->placeholder('Select one')
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
            'index' => Pages\ListInfos::route('/'),
            'create' => Pages\CreateInfo::route('/create'),
            'edit' => Pages\EditInfo::route('/{record}/edit'),
        ];
    }
}
