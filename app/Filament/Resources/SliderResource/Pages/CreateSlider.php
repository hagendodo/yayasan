<?php

namespace App\Filament\Resources\SliderResource\Pages;

use App\Filament\Resources\SliderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSlider extends CreateRecord
{
    protected static string $resource = SliderResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        if($data['publish_status']){
            $data['published_at'] = now();
        }
        return parent::mutateFormDataBeforeCreate($data); // TODO: Change the autogenerated stub
    }
}
