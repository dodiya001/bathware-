<?php


namespace App\Filament\Resources;

use App\Filament\Resources\ReportingResource\Pages;
use App\Models\Reporting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReportingResource extends Resource
{
    protected static ?string $model = Reporting::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('prod_id')->required(),
                Forms\Components\TextInput::make('qty')->numeric()->required(),
                Forms\Components\Select::make('grade_id')
                    ->label('Grade')
                    ->relationship('grade', 'grade_name')
                    ->required(),
                Forms\Components\Select::make('fault_id')
                    ->label('Fault')
                    ->relationship('fault', 'fault_name')
                    ->required(),
                Forms\Components\Select::make('desi_id')
                    ->label('Designation')
                    ->relationship('designation', 'desi_name')
                    ->required(),
                Forms\Components\Select::make('emp_id')
                    ->label('Employee')
                    ->relationship('employee', 'emp_name')
                    ->required(),
                Forms\Components\Textarea::make('notes')->nullable(),

                Forms\Components\Select::make('prod_id')
                     ->label('Product')
                     ->relationship('product', 'prod_name')
                     ->required(),
            ]);            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('report_id')->label('Report ID'),
                Tables\Columns\TextColumn::make('product.prod_name')->label('Product Name'),                        
                Tables\Columns\TextColumn::make('qty')->label('Quantity'),
                Tables\Columns\TextColumn::make('grade.grade_name')->label('Grade'),
                Tables\Columns\TextColumn::make('fault.fault_name')->label('Fault'),
                Tables\Columns\TextColumn::make('designation.desi_name')->label('Designation'),
                Tables\Columns\TextColumn::make('employee.emp_name')->label('Employee'),
                Tables\Columns\TextColumn::make('notes')->label('Notes'),
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
            'index' => Pages\ListReportings::route('/'),
            'create' => Pages\CreateReporting::route('/create'),
            'edit' => Pages\EditReporting::route('/{record}/edit'),
        ];
    }
}