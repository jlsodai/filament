<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Imports\PostImporter;
use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Tables\Actions\ImportAction;

class ManagePosts extends ManageRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\ImportAction::make()
                ->importer(PostImporter::class)
        ];
    }
}
