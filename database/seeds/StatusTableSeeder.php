<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Active',
            'Suspended',
            'Running',
            'Started',
            'Stopped',
            'Restarting',
            'Processing',
            'Downloading',
            'Ready',
            'Pending',
            'Scheduled',
            'Success',
            'Error',
            'Warning',
        ];

        foreach ($statuses as $key => $status) {
            $s = new Status();
            $s->value = $status;
            $s->code = 1000 + $key;
            $s->save();
        }
    }
}
