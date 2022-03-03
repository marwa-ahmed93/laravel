<?php

use Illuminate\Database\Seeder;
use App\Trainer;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Trainer::create([
'name' => 'marwa ahmed',
'speciality' => 'web development',
'img' => '1.png'

        ]);

        Trainer::create([
            'name' => 'wageeh kamal',
            'speciality' => 'civil enginnering',
            'img' => '2.png'
            
                    ]);

                    Trainer::create([
                        'name' => 'ahmed hussein',
                        'speciality' => 'dentist',
                        'img' => '3.png'
                        
                                ]);

                                Trainer::create([
                                    'name' => 'mohamed ahmed',
                                    'speciality' => 'doctor',
                                    'img' => '4.png'
                                    
                                            ]);

                                            Trainer::create([
                                                'name' => 'ahmed yousef',
                                                'speciality' => 'english teacher',
                                                'img' => '5.png'
                                                
                                                        ]);
    }
}
