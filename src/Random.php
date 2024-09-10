<?php

require_once '../vendor/autoload.php';

class Random
{
    public static function generateRandomData($numRecords = 300)
    {
        $faker = Faker\Factory::create('en_PH');
        $data = [];
        
        $data[] = [
            'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay', 
            'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number', 
            'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 'Birthdate', 
            'Email Address', 'Password'
        ];

    
        for ($i = 0; $i < $numRecords; $i++) {
            $data[] = [
                $faker->uuid,
                $faker->title,
                $faker->firstName,
                $faker->lastName,
                $faker->streetAddress,
                $faker->barangay, 
                $faker->city,
                $faker->province,
                'Philippines',
                $faker->phoneNumber,
                $faker->mobileNumber, 
                $faker->company,
                $faker->url,
                $faker->jobTitle,
                $faker->safeColorName,
                $faker->date('Y-m-d'),
                $faker->email,
                $faker->password
            ];
        }

        return $data;
    }
}
?>
