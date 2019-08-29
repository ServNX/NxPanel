<?php

use App\Template;
use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $templates = [
            'Default',
            'Laravel'
        ];

        foreach ($templates as $template) {
            $t = new Template();
            $t->name = $template;
            $t->save();
        }
    }
}
