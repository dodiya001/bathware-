<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaultResource\Pages;
use App\Models\Fault;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FaultResource extends Resource
{
    protected static ?string $model = Fault::class;
    protected static ?string $navigationIcon = 'heroicon-o-exclamation-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fault_name')
                    ->label('Fault Name')
                    ->required(),
                Forms\Components\Select::make('desi_ids')
                    ->label('Designation')
                    ->relationship('designation', 'desi_name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fault_id')->label('ID'),
                Tables\Columns\TextColumn::make('fault_name')->label('Fault Name'),
                Tables\Columns\TextColumn::make('desi_ids')->label('Designation ID'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaults::route('/'),
            'create' => Pages\CreateFault::route('/create'),
            'edit' => Pages\EditFault::route('/{record}/edit'),
        ];
    }
}