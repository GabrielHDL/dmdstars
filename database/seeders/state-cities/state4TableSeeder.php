<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of AZ - Arizona.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Alpine', 'state_id' => 4],
                ['name' => 'Concho', 'state_id' => 4],
                ['name' => 'Eagar', 'state_id' => 4],
                ['name' => 'Greer', 'state_id' => 4],
                ['name' => 'Mcnary', 'state_id' => 4],
                ['name' => 'Nutrioso', 'state_id' => 4],
                ['name' => 'Saint Johns', 'state_id' => 4],
                ['name' => 'Springerville', 'state_id' => 4],
                ['name' => 'Vernon', 'state_id' => 4],
                ['name' => 'Petrified Forest Natl Pk', 'state_id' => 4],
                ['name' => 'Chambers', 'state_id' => 4],
                ['name' => 'Chinle', 'state_id' => 4],
                ['name' => 'Fort Defiance', 'state_id' => 4],
                ['name' => 'Ganado', 'state_id' => 4],
                ['name' => 'Houck', 'state_id' => 4],
                ['name' => 'Lukachukai', 'state_id' => 4],
                ['name' => 'Lupton', 'state_id' => 4],
                ['name' => 'Saint Michaels', 'state_id' => 4],
                ['name' => 'Sanders', 'state_id' => 4],
                ['name' => 'Teec Nos Pos', 'state_id' => 4],
                ['name' => 'Window Rock', 'state_id' => 4],
                ['name' => 'Dennehotso', 'state_id' => 4],
                ['name' => 'Many Farms', 'state_id' => 4],
                ['name' => 'Nazlini', 'state_id' => 4],
                ['name' => 'Red Valley', 'state_id' => 4],
                ['name' => 'Rock Point', 'state_id' => 4],
                ['name' => 'Round Rock', 'state_id' => 4],
                ['name' => 'Tsaile', 'state_id' => 4],
                ['name' => 'Benson', 'state_id' => 4],
                ['name' => 'Bisbee', 'state_id' => 4],
                ['name' => 'Bowie', 'state_id' => 4],
                ['name' => 'Cochise', 'state_id' => 4],
                ['name' => 'Douglas', 'state_id' => 4],
                ['name' => 'Dragoon', 'state_id' => 4],
                ['name' => 'Elfrida', 'state_id' => 4],
                ['name' => 'Fort Huachuca', 'state_id' => 4],
                ['name' => 'Hereford', 'state_id' => 4],
                ['name' => 'Huachuca City', 'state_id' => 4],
                ['name' => 'Mc Neal', 'state_id' => 4],
                ['name' => 'Naco', 'state_id' => 4],
                ['name' => 'Pearce', 'state_id' => 4],
                ['name' => 'Pirtleville', 'state_id' => 4],
                ['name' => 'Pomerene', 'state_id' => 4],
                ['name' => 'Saint David', 'state_id' => 4],
                ['name' => 'San Simon', 'state_id' => 4],
                ['name' => 'Sierra Vista', 'state_id' => 4],
                ['name' => 'Tombstone', 'state_id' => 4],
                ['name' => 'Willcox', 'state_id' => 4],
                ['name' => 'Forest Lakes', 'state_id' => 4],
                ['name' => 'Flagstaff', 'state_id' => 4],
                ['name' => 'Bellemont', 'state_id' => 4],
                ['name' => 'Gray Mountain', 'state_id' => 4],
                ['name' => 'Munds Park', 'state_id' => 4],
                ['name' => 'Parks', 'state_id' => 4],
                ['name' => 'Cameron', 'state_id' => 4],
                ['name' => 'Fredonia', 'state_id' => 4],
                ['name' => 'Grand Canyon', 'state_id' => 4],
                ['name' => 'Happy Jack', 'state_id' => 4],
                ['name' => 'Leupp', 'state_id' => 4],
                ['name' => 'Marble Canyon', 'state_id' => 4],
                ['name' => 'Mormon Lake', 'state_id' => 4],
                ['name' => 'Page', 'state_id' => 4],
                ['name' => 'Tonalea', 'state_id' => 4],
                ['name' => 'Tuba City', 'state_id' => 4],
                ['name' => 'Williams', 'state_id' => 4],
                ['name' => 'North Rim', 'state_id' => 4],
                ['name' => 'Kaibeto', 'state_id' => 4],
                ['name' => 'Sedona', 'state_id' => 4],
                ['name' => 'Supai', 'state_id' => 4],
                ['name' => 'Hayden', 'state_id' => 4],
                ['name' => 'Winkelman', 'state_id' => 4],
                ['name' => 'Globe', 'state_id' => 4],
                ['name' => 'Claypool', 'state_id' => 4],
                ['name' => 'Miami', 'state_id' => 4],
                ['name' => 'Payson', 'state_id' => 4],
                ['name' => 'Peridot', 'state_id' => 4],
                ['name' => 'Pine', 'state_id' => 4],
                ['name' => 'Roosevelt', 'state_id' => 4],
                ['name' => 'San Carlos', 'state_id' => 4],
                ['name' => 'Tonto Basin', 'state_id' => 4],
                ['name' => 'Young', 'state_id' => 4],
                ['name' => 'Bylas', 'state_id' => 4],
                ['name' => 'Central', 'state_id' => 4],
                ['name' => 'Eden', 'state_id' => 4],
                ['name' => 'Fort Thomas', 'state_id' => 4],
                ['name' => 'Pima', 'state_id' => 4],
                ['name' => 'Safford', 'state_id' => 4],
                ['name' => 'Solomon', 'state_id' => 4],
                ['name' => 'Thatcher', 'state_id' => 4],
                ['name' => 'Clifton', 'state_id' => 4],
                ['name' => 'Duncan', 'state_id' => 4],
                ['name' => 'Morenci', 'state_id' => 4],
                ['name' => 'Blue', 'state_id' => 4],
                ['name' => 'Bouse', 'state_id' => 4],
                ['name' => 'Cibola', 'state_id' => 4],
                ['name' => 'Ehrenberg', 'state_id' => 4],
                ['name' => 'Parker', 'state_id' => 4],
                ['name' => 'Quartzsite', 'state_id' => 4],
                ['name' => 'Salome', 'state_id' => 4],
                ['name' => 'Wenden', 'state_id' => 4],
                ['name' => 'Poston', 'state_id' => 4],
                ['name' => 'Phoenix', 'state_id' => 4],
                ['name' => 'New River', 'state_id' => 4],
                ['name' => 'Chandler Heights', 'state_id' => 4],
                ['name' => 'Queen Creek', 'state_id' => 4],
                ['name' => 'Tortilla Flat', 'state_id' => 4],
                ['name' => 'Mesa', 'state_id' => 4],
                ['name' => 'Chandler', 'state_id' => 4],
                ['name' => 'Gilbert', 'state_id' => 4],
                ['name' => 'Higley', 'state_id' => 4],
                ['name' => 'Scottsdale', 'state_id' => 4],
                ['name' => 'Paradise Valley', 'state_id' => 4],
                ['name' => 'Rio Verde', 'state_id' => 4],
                ['name' => 'Fort Mcdowell', 'state_id' => 4],
                ['name' => 'Fountain Hills', 'state_id' => 4],
                ['name' => 'Tempe', 'state_id' => 4],
                ['name' => 'Glendale', 'state_id' => 4],
                ['name' => 'Luke Air Force Base', 'state_id' => 4],
                ['name' => 'Aguila', 'state_id' => 4],
                ['name' => 'Arlington', 'state_id' => 4],
                ['name' => 'Avondale', 'state_id' => 4],
                ['name' => 'Buckeye', 'state_id' => 4],
                ['name' => 'Cave Creek', 'state_id' => 4],
                ['name' => 'Cashion', 'state_id' => 4],
                ['name' => 'El Mirage', 'state_id' => 4],
                ['name' => 'Gila Bend', 'state_id' => 4],
                ['name' => 'Goodyear', 'state_id' => 4],
                ['name' => 'Laveen', 'state_id' => 4],
                ['name' => 'Litchfield Park', 'state_id' => 4],
                ['name' => 'Morristown', 'state_id' => 4],
                ['name' => 'Palo Verde', 'state_id' => 4],
                ['name' => 'Peoria', 'state_id' => 4],
                ['name' => 'Sun City', 'state_id' => 4],
                ['name' => 'Tolleson', 'state_id' => 4],
                ['name' => 'Tonopah', 'state_id' => 4],
                ['name' => 'Waddell', 'state_id' => 4],
                ['name' => 'Wickenburg', 'state_id' => 4],
                ['name' => 'Wittmann', 'state_id' => 4],
                ['name' => 'Youngtown', 'state_id' => 4],
                ['name' => 'Surprise', 'state_id' => 4],
                ['name' => 'Sun City West', 'state_id' => 4],
                ['name' => 'Carefree', 'state_id' => 4],
                ['name' => 'Wikieup', 'state_id' => 4],
                ['name' => 'Colorado City', 'state_id' => 4],
                ['name' => 'Kingman', 'state_id' => 4],
                ['name' => 'Lake Havasu City', 'state_id' => 4],
                ['name' => 'Hackberry', 'state_id' => 4],
                ['name' => 'Hualapai', 'state_id' => 4],
                ['name' => 'Golden Valley', 'state_id' => 4],
                ['name' => 'Fort Mohave', 'state_id' => 4],
                ['name' => 'Bullhead City', 'state_id' => 4],
                ['name' => 'Chloride', 'state_id' => 4],
                ['name' => 'Littlefield', 'state_id' => 4],
                ['name' => 'Oatman', 'state_id' => 4],
                ['name' => 'Peach Springs', 'state_id' => 4],
                ['name' => 'Topock', 'state_id' => 4],
                ['name' => 'Valentine', 'state_id' => 4],
                ['name' => 'Yucca', 'state_id' => 4],
                ['name' => 'Mohave Valley', 'state_id' => 4],
                ['name' => 'Dolan Springs', 'state_id' => 4],
                ['name' => 'Temple Bar Marina', 'state_id' => 4],
                ['name' => 'Meadview', 'state_id' => 4],
                ['name' => 'Willow Beach', 'state_id' => 4],
                ['name' => 'Show Low', 'state_id' => 4],
                ['name' => 'Cibecue', 'state_id' => 4],
                ['name' => 'White Mountain Lake', 'state_id' => 4],
                ['name' => 'Clay Springs', 'state_id' => 4],
                ['name' => 'Fort Apache', 'state_id' => 4],
                ['name' => 'Heber', 'state_id' => 4],
                ['name' => 'Lakeside', 'state_id' => 4],
                ['name' => 'Overgaard', 'state_id' => 4],
                ['name' => 'Pinedale', 'state_id' => 4],
                ['name' => 'Pinetop', 'state_id' => 4],
                ['name' => 'Snowflake', 'state_id' => 4],
                ['name' => 'Taylor', 'state_id' => 4],
                ['name' => 'Whiteriver', 'state_id' => 4],
                ['name' => 'Woodruff', 'state_id' => 4],
                ['name' => 'Holbrook', 'state_id' => 4],
                ['name' => 'Sun Valley', 'state_id' => 4],
                ['name' => 'Hotevilla', 'state_id' => 4],
                ['name' => 'Indian Wells', 'state_id' => 4],
                ['name' => 'Joseph City', 'state_id' => 4],
                ['name' => 'Kayenta', 'state_id' => 4],
                ['name' => 'Keams Canyon', 'state_id' => 4],
                ['name' => 'Kykotsmovi Village', 'state_id' => 4],
                ['name' => 'Polacca', 'state_id' => 4],
                ['name' => 'Second Mesa', 'state_id' => 4],
                ['name' => 'Winslow', 'state_id' => 4],
                ['name' => 'Shonto', 'state_id' => 4],
                ['name' => 'Pinon', 'state_id' => 4],
                ['name' => 'Blue Gap', 'state_id' => 4],
                ['name' => 'Ajo', 'state_id' => 4],
                ['name' => 'Lukeville', 'state_id' => 4],
                ['name' => 'Arivaca', 'state_id' => 4],
                ['name' => 'Green Valley', 'state_id' => 4],
                ['name' => 'Mount Lemmon', 'state_id' => 4],
                ['name' => 'Sahuarita', 'state_id' => 4],
                ['name' => 'Sasabe', 'state_id' => 4],
                ['name' => 'Sells', 'state_id' => 4],
                ['name' => 'Topawa', 'state_id' => 4],
                ['name' => 'Vail', 'state_id' => 4],
                ['name' => 'Cortaro', 'state_id' => 4],
                ['name' => 'Marana', 'state_id' => 4],
                ['name' => 'Rillito', 'state_id' => 4],
                ['name' => 'Tucson', 'state_id' => 4],
                ['name' => 'Catalina', 'state_id' => 4],
                ['name' => 'Apache Junction', 'state_id' => 4],
                ['name' => 'Gold Canyon', 'state_id' => 4],
                ['name' => 'Bapchule', 'state_id' => 4],
                ['name' => 'Casa Grande', 'state_id' => 4],
                ['name' => 'Arizona City', 'state_id' => 4],
                ['name' => 'Coolidge', 'state_id' => 4],
                ['name' => 'Eloy', 'state_id' => 4],
                ['name' => 'Florence', 'state_id' => 4],
                ['name' => 'Kearny', 'state_id' => 4],
                ['name' => 'Maricopa', 'state_id' => 4],
                ['name' => 'San Tan Valley', 'state_id' => 4],
                ['name' => 'Picacho', 'state_id' => 4],
                ['name' => 'Red Rock', 'state_id' => 4],
                ['name' => 'Sacaton', 'state_id' => 4],
                ['name' => 'Stanfield', 'state_id' => 4],
                ['name' => 'Superior', 'state_id' => 4],
                ['name' => 'Valley Farms', 'state_id' => 4],
                ['name' => 'Mammoth', 'state_id' => 4],
                ['name' => 'Oracle', 'state_id' => 4],
                ['name' => 'San Manuel', 'state_id' => 4],
                ['name' => 'Elgin', 'state_id' => 4],
                ['name' => 'Nogales', 'state_id' => 4],
                ['name' => 'Patagonia', 'state_id' => 4],
                ['name' => 'Sonoita', 'state_id' => 4],
                ['name' => 'Tumacacori', 'state_id' => 4],
                ['name' => 'Amado', 'state_id' => 4],
                ['name' => 'Tubac', 'state_id' => 4],
                ['name' => 'Rio Rico', 'state_id' => 4],
                ['name' => 'Black Canyon City', 'state_id' => 4],
                ['name' => 'Congress', 'state_id' => 4],
                ['name' => 'Yarnell', 'state_id' => 4],
                ['name' => 'Prescott', 'state_id' => 4],
                ['name' => 'Prescott Valley', 'state_id' => 4],
                ['name' => 'Ash Fork', 'state_id' => 4],
                ['name' => 'Bagdad', 'state_id' => 4],
                ['name' => 'Camp Verde', 'state_id' => 4],
                ['name' => 'Chino Valley', 'state_id' => 4],
                ['name' => 'Clarkdale', 'state_id' => 4],
                ['name' => 'Cornville', 'state_id' => 4],
                ['name' => 'Cottonwood', 'state_id' => 4],
                ['name' => 'Dewey', 'state_id' => 4],
                ['name' => 'Humboldt', 'state_id' => 4],
                ['name' => 'Jerome', 'state_id' => 4],
                ['name' => 'Kirkland', 'state_id' => 4],
                ['name' => 'Mayer', 'state_id' => 4],
                ['name' => 'Paulden', 'state_id' => 4],
                ['name' => 'Rimrock', 'state_id' => 4],
                ['name' => 'Seligman', 'state_id' => 4],
                ['name' => 'Skull Valley', 'state_id' => 4],
                ['name' => 'Lake Montezuma', 'state_id' => 4],
                ['name' => 'Crown King', 'state_id' => 4],
                ['name' => 'Dateland', 'state_id' => 4],
                ['name' => 'Gadsden', 'state_id' => 4],
                ['name' => 'Roll', 'state_id' => 4],
                ['name' => 'San Luis', 'state_id' => 4],
                ['name' => 'Somerton', 'state_id' => 4],
                ['name' => 'Tacna', 'state_id' => 4],
                ['name' => 'Wellton', 'state_id' => 4],
                ['name' => 'Yuma', 'state_id' => 4]
            ]);
        }
    }
}
