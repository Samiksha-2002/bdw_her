<?php

namespace Modules\Videos\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->delete();
        DB::table('videos')->insert([
            [
                'id' => 9,
                'type_id' => 3,
                'name' => null,
                'title' => 'Secrets of Time Travel Unveiled: A Journey Beyond the Clock',
                'video' => 'http://localhost:8080/storage/videos%2Fzpu5yp1rTjrBhbNsEXBLoMIjFEEea8vA3E9GrqvL.bin',
                'description' => '🕰️ Step into the extraordinary realm of time travel! Embark on an epic odyssey through the corridors of time, unraveling the intricate threads that bind past, present, and future. From the theoretical frameworks to mind-boggling paradoxes, this video plunges deep into the fascinating concept of time manipulation. Prepare to challenge your perceptions and explore the tantalizing possibilities that the mysteries of time hold for humanity\'s future. Get ready to unlock the secrets of temporal exploration! ⏳🚀',
                'image' => 'http://localhost:8080/storage/images%2FBkYf74UhYHyZE11HktX2ZUiM0HkryC6HcSj1IOm3.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'type_id' => 3,
                'name' => null,
                'title' => 'Exploring Quantum Realms: Unraveling the Unseen Universe',
                'video' => 'http://localhost:8080/storage/videos%2FgbZWJwdT42wC5iWumUH1qnyaLL7bzr0ByBdB88xw.bin',
                'description' => '🌌 Dive into the enigmatic world of quantum physics! Join us on an exhilarating journey as we peel back the layers of reality to explore the mind-bending concepts of quantum mechanics. From wave-particle duality to the mysteries of entanglement, this video will take you on a visual tour through the astonishing landscapes of the quantum realm. Get ready to expand your understanding of the universe in ways you never thought possible! 🚀✨',
                'image' => 'http://localhost:8080/storage/images%2FBPjYiAW0O62UmsUlgUsNJqDqGyo8QfxPZjQd8mqy.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'type_id' => 3,
                'name' => null,
                'title' => 'Eternal Wanderlust: Quest for the Lost City of Mythos',
                'video' => 'http://localhost:8080/storage/videos%2FzzWKtE75xWYALFSFQYZIGHqQVd8ezDEIpZ57u1r0.bin',
                'description' => '🌟 Embark on a daring expedition to unearth the mythical Lost City of Mythos! Join our intrepid adventurers as they traverse treacherous landscapes and decode ancient riddles in pursuit of this fabled realm. This video chronicles their thrilling journey, showcasing the untold stories, legends, and mysteries surrounding this elusive city. From cryptic ruins to forgotten artifacts, get ready for an immersive experience that blurs the lines between history and legend. Prepare to be spellbound by the allure of the unknown! 🔍✨',
                'image' => 'http://localhost:8080/storage/images%2Ft2wASUFcO5JaCuqe3diBXm3kjtGcZWin8fnCd07S.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
