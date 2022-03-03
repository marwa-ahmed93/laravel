<?php

use Illuminate\Database\Seeder;
use App\Test;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Test::create([
            'name' => 'marwa ahmed',
            'spec' => 'web development',
            'desc' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
             more-or-less normal distribution of letters, ',
            'img' => '1.png'
            
                    ]);
            
                    Test::create([
                        'name' => 'wageeh kamal',
                        'spec' => 'civil enginnering',
                        'desc' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
             more-or-less normal distribution of letters, ',
                        'img' => '2.png'
                        
                                ]);
            
                                Test::create([
                                    'name' => 'ahmed hussein',
                                    'spec' => 'dentist',
                                    'desc' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
             more-or-less normal distribution of letters, ',
                                    'img' => '3.png'
                                    
                                            ]);
    }
}
