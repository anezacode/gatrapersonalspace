<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\App;
use App\Models\Main;
use App\Models\Project;
use App\Models\Tag;
use App\Models\Protag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gatra',
            'email' => 'anezacode@proton.me',
            'password' => Hash::make('gatrarmx'),
            'email_verified_at' => now(),
            'created_at' => now()
        ]);

        App::insert([
            'app_title' => 'Gatra Personal Space',
            'app_description' => 'You have entered Gatra\'s private zone',
            'app_favicon' => 'favicon.ico',
            'created_at' => now()
        ]);

        Main::insert([
            'name' => 'gatra.',
            'background' => 'images/background.png',
            'url_github' => 'https://github.com/anezacode/',
            'url_linkedin' => 'https://www.linkedin.com/in/gatrasatya',
            'url_whatsapp' => '#',
            'created_at' => now()
        ]);

        About::insert([
            [
                'title' => 'I\'m A Web Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.',
                'icon' => 'images/icons8-inspect-code.png',
                'created_at' => now()
            ],
            [
                'title' => 'I\'m A Music Producer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.',
                'icon' => 'images/icons8-electronic-music.png',
                'created_at' => now()
            ],
            [
                'title' => 'I\'m A Gamer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.',
                'icon' => 'images/icons8-game-console.png',
                'created_at' => now()
            ],
        ]);

        Tag::insert([
            [
                'id' => 1,
                'name' => 'Laravel',
                'is_active' => true,
                'bgcolor' => 'red',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Tailwind',
                'is_active' => true,
                'bgcolor' => 'blue',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Roblox',
                'is_active' => true,
                'bgcolor' => 'gray',
                'created_at' => now()
            ],
        ]);

        Project::insert([
            [
                'id' => '550e8400-e29b-41d4-a716-446655440000',
                'title' => 'Hello World',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.',
                'cover' => 'images/project-profile.png',
                'created_at' => '2025-07-01'
            ],
            [
                'id' => '0895eb9d-857a-4bcf-910d-3901e5b13db1',
                'title' => 'Hello World',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.',
                'cover' => 'images/project-profile.png',
                'created_at' => '2025-07-13'
            ],
            [
                'id' => '8afad888-ed98-48ab-ad70-967fbab4d0c2',
                'title' => 'Hello World',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.',
                'cover' => 'images/project-profile.png',
                'created_at' => '2025-07-28'
            ],
        ]);
        
        Protag::insert([
            [
                'project_id' => '550e8400-e29b-41d4-a716-446655440000',
                'tag_id' => 1,
                'created_at' => now()
            ],
            [
                'project_id' => '0895eb9d-857a-4bcf-910d-3901e5b13db1',
                'tag_id' => 1,
                'created_at' => now()
            ],
            [
                'project_id' => '8afad888-ed98-48ab-ad70-967fbab4d0c2',
                'tag_id' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
