<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages;
use App\Models\Asset;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section as ComponentsSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('products_name')
                            ->label('Name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('products_price')
                            ->label('Price')
                            ->required()
                            ->numeric(),
                        TextInput::make('products_serial_number')
                            ->label('Serial Number')
                            ->unique(),
                        TextInput::make('products_stock')
                            ->label('Stock')
                            ->required()
                            ->numeric(),
                        MarkdownEditor::make('description')
                            ->label('Description')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('products_name')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('products_price')
                    ->label('Product Price')
                    ->sortable(),
                TextColumn::make('products_serial_number')
                    ->label('Product Serial Number')
                    ->searchable(),
                TextColumn::make('products_stock')
                    ->label('Product Stock')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                ComponentsSection::make()
                    ->schema([
                        TextEntry::make('products_name')
                            ->label('Name'),
                        TextEntry::make('products_price')
                            ->label('Price'),
                        TextEntry::make('products_serial_number')
                            ->label('Serial Number'),
                        TextEntry::make('products_stock')
                            ->label('Stock'),
                        TextEntry::make('description')
                            ->label('Description')
                            ->html()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'view' => Pages\ViewAsset::route('/{record}'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}
