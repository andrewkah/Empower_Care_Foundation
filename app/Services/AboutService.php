<?php

namespace App\Services;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutService
{
    public function getAboutUs(): array
    {
        $about_us = AboutUs::find(1);

        return [
            'about_intro' =>  json_decode($about_us->about_intro, true),
            'about_intro_images' => json_decode($about_us->about_intro_images, true),
            'about_title' => $about_us->about_title,
            'about_content' => $about_us->about_content,
            'about_content_images' => json_decode($about_us->about_content_images, true),
        ];
    }
    public function storeAboutUs(Request $request): bool
    {
        $about_us = AboutUs::find(1);
        $data = $request->all();
        // $record['about_title'] = $data['title'];
        $record['mission'] = $data['mission'];
        $record['vision'] = $data['vision'];
        $record['value'] = $data['value'];

        $about_us->update([
            'about_intro' => json_encode($record),
            // 'about_intro_images' => json_encode($data['about_intro_images']),
            'about_title' => $data['title'],
            'about_content' => $data['description'],
            // 'about_content_images' => json_encode($data['about_content_images']),
        ]);
        if ($about_us){
            return true;
        }
        return false;
        if ($request->hasFile('about_intro_images')) {
            $about_intro_images = $request->file('about_intro_images');
            $about_intro_images_path = [];
            foreach ($about_intro_images as $image) {
                $image_path = $image->store('about_intro_images');
                $about_intro_images_path[] = $image_path;
            }
            $about_us->update([
                'about_intro_images' => json_encode($about_intro_images_path),
            ]);
        }
    }

}