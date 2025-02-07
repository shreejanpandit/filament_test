<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgencyResource\Pages;
use App\Filament\Resources\AgencyResource\RelationManagers;
use App\Filament\Resources\AgencyResource\RelationManagers\ContactsRelationManager;
use App\Filament\Resources\ClientResource\Pages\ManageAgencyContacts;
use App\Models\Agency;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AgencyResource extends Resource
{
    protected static ?string $model = Agency::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('email')->email(),
                Forms\Components\TextInput::make('address'),
                Forms\Components\TextInput::make('website')->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('phone')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('address')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('website')->sortable()->searchable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
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
    /**
     * @return array<mixed>
     */
    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            ManageAgencyContacts::class
        ]);
    }
    public static function getRelations(): array
    {
        return [
            // ContactsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAgencies::route('/'),
            'create' => Pages\CreateAgency::route('/create'),
            'edit' => Pages\EditAgency::route('/{record}/edit'),
            'contacts' => ManageAgencyContacts::route('/{record}/contacts')
        ];
    }
}
