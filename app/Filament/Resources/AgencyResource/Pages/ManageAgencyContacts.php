<?php

namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\AgencyResource;
use App\Filament\Resources\ClientResource;
use App\Filament\Resources\ContactResource\Tables\ContactResourceTable;
use Filament\Forms\Form;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class ManageAgencyContacts extends ManageRelatedRecords
{
    protected static string $resource = AgencyResource::class;

    protected static string $relationship = 'contacts'; // The relationship name on the Client model

    public static function getNavigationIcon(): string|Htmlable|null
    {
        return __('heroicon-o-paper-clip'); // Use an appropriate icon
    }

    public static function getNavigationLabel(): string
    {
        return 'Contacts'; // Navigation label
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\TextInput::make('name')->required(),
                \Filament\Forms\Components\TextInput::make('phone'),
                \Filament\Forms\Components\TextInput::make('email')->email(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns(ContactResourceTable::getFields()) // Reuse the table fields
            ->filters([
                // Add filters if needed
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add Contact')
                    ->modalHeading('Add New Contact')
                    ->modalWidth('lg'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->modalHeading('Edit Contact')
                    ->modalWidth('lg'),
                Tables\Actions\DeleteAction::make()
                    ->label('Delete')
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Delete Selected')
                        ->requiresConfirmation(),
                ]),
            ]);
    }
}
