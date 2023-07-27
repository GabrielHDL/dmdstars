<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state38TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of OR - Oregon.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Baker City', 'state_id' => 38],
                ['name' => 'Bridgeport', 'state_id' => 38],
                ['name' => 'Haines', 'state_id' => 38],
                ['name' => 'Halfway', 'state_id' => 38],
                ['name' => 'Hereford', 'state_id' => 38],
                ['name' => 'Oxbow', 'state_id' => 38],
                ['name' => 'Richland', 'state_id' => 38],
                ['name' => 'Sumpter', 'state_id' => 38],
                ['name' => 'Unity', 'state_id' => 38],
                ['name' => 'Durkee', 'state_id' => 38],
                ['name' => 'Huntington', 'state_id' => 38],
                ['name' => 'Alsea', 'state_id' => 38],
                ['name' => 'Blodgett', 'state_id' => 38],
                ['name' => 'Corvallis', 'state_id' => 38],
                ['name' => 'Philomath', 'state_id' => 38],
                ['name' => 'Monroe', 'state_id' => 38],
                ['name' => 'Beavercreek', 'state_id' => 38],
                ['name' => 'Boring', 'state_id' => 38],
                ['name' => 'Brightwood', 'state_id' => 38],
                ['name' => 'Canby', 'state_id' => 38],
                ['name' => 'Clackamas', 'state_id' => 38],
                ['name' => 'Colton', 'state_id' => 38],
                ['name' => 'Eagle Creek', 'state_id' => 38],
                ['name' => 'Estacada', 'state_id' => 38],
                ['name' => 'Gladstone', 'state_id' => 38],
                ['name' => 'Government Camp', 'state_id' => 38],
                ['name' => 'Lake Oswego', 'state_id' => 38],
                ['name' => 'Marylhurst', 'state_id' => 38],
                ['name' => 'Molalla', 'state_id' => 38],
                ['name' => 'Mulino', 'state_id' => 38],
                ['name' => 'Oregon City', 'state_id' => 38],
                ['name' => 'Rhododendron', 'state_id' => 38],
                ['name' => 'Sandy', 'state_id' => 38],
                ['name' => 'Welches', 'state_id' => 38],
                ['name' => 'West Linn', 'state_id' => 38],
                ['name' => 'Wilsonville', 'state_id' => 38],
                ['name' => 'Damascus', 'state_id' => 38],
                ['name' => 'Portland', 'state_id' => 38],
                ['name' => 'Arch Cape', 'state_id' => 38],
                ['name' => 'Astoria', 'state_id' => 38],
                ['name' => 'Cannon Beach', 'state_id' => 38],
                ['name' => 'Hammond', 'state_id' => 38],
                ['name' => 'Seaside', 'state_id' => 38],
                ['name' => 'Tolovana Park', 'state_id' => 38],
                ['name' => 'Warrenton', 'state_id' => 38],
                ['name' => 'Clatskanie', 'state_id' => 38],
                ['name' => 'Columbia City', 'state_id' => 38],
                ['name' => 'Rainier', 'state_id' => 38],
                ['name' => 'Saint Helens', 'state_id' => 38],
                ['name' => 'Warren', 'state_id' => 38],
                ['name' => 'Deer Island', 'state_id' => 38],
                ['name' => 'Scappoose', 'state_id' => 38],
                ['name' => 'Vernonia', 'state_id' => 38],
                ['name' => 'Allegany', 'state_id' => 38],
                ['name' => 'Bandon', 'state_id' => 38],
                ['name' => 'Broadbent', 'state_id' => 38],
                ['name' => 'Coos Bay', 'state_id' => 38],
                ['name' => 'Coquille', 'state_id' => 38],
                ['name' => 'Lakeside', 'state_id' => 38],
                ['name' => 'Myrtle Point', 'state_id' => 38],
                ['name' => 'North Bend', 'state_id' => 38],
                ['name' => 'Powers', 'state_id' => 38],
                ['name' => 'Paulina', 'state_id' => 38],
                ['name' => 'Post', 'state_id' => 38],
                ['name' => 'Powell Butte', 'state_id' => 38],
                ['name' => 'Prineville', 'state_id' => 38],
                ['name' => 'Agness', 'state_id' => 38],
                ['name' => 'Brookings', 'state_id' => 38],
                ['name' => 'Gold Beach', 'state_id' => 38],
                ['name' => 'Langlois', 'state_id' => 38],
                ['name' => 'Ophir', 'state_id' => 38],
                ['name' => 'Port Orford', 'state_id' => 38],
                ['name' => 'Sixes', 'state_id' => 38],
                ['name' => 'Wedderburn', 'state_id' => 38],
                ['name' => 'Bend', 'state_id' => 38],
                ['name' => 'Brothers', 'state_id' => 38],
                ['name' => 'La Pine', 'state_id' => 38],
                ['name' => 'Redmond', 'state_id' => 38],
                ['name' => 'Sisters', 'state_id' => 38],
                ['name' => 'Terrebonne', 'state_id' => 38],
                ['name' => 'Azalea', 'state_id' => 38],
                ['name' => 'Camas Valley', 'state_id' => 38],
                ['name' => 'Canyonville', 'state_id' => 38],
                ['name' => 'Days Creek', 'state_id' => 38],
                ['name' => 'Dillard', 'state_id' => 38],
                ['name' => 'Drain', 'state_id' => 38],
                ['name' => 'Elkton', 'state_id' => 38],
                ['name' => 'Gardiner', 'state_id' => 38],
                ['name' => 'Glendale', 'state_id' => 38],
                ['name' => 'Glide', 'state_id' => 38],
                ['name' => 'Idleyld Park', 'state_id' => 38],
                ['name' => 'Myrtle Creek', 'state_id' => 38],
                ['name' => 'Oakland', 'state_id' => 38],
                ['name' => 'Reedsport', 'state_id' => 38],
                ['name' => 'Riddle', 'state_id' => 38],
                ['name' => 'Roseburg', 'state_id' => 38],
                ['name' => 'Scottsburg', 'state_id' => 38],
                ['name' => 'Sutherlin', 'state_id' => 38],
                ['name' => 'Tenmile', 'state_id' => 38],
                ['name' => 'Tiller', 'state_id' => 38],
                ['name' => 'Umpqua', 'state_id' => 38],
                ['name' => 'Wilbur', 'state_id' => 38],
                ['name' => 'Winchester', 'state_id' => 38],
                ['name' => 'Winston', 'state_id' => 38],
                ['name' => 'Yoncalla', 'state_id' => 38],
                ['name' => 'Arlington', 'state_id' => 38],
                ['name' => 'Condon', 'state_id' => 38],
                ['name' => 'Mikkalo', 'state_id' => 38],
                ['name' => 'Bates', 'state_id' => 38],
                ['name' => 'Canyon City', 'state_id' => 38],
                ['name' => 'Dayville', 'state_id' => 38],
                ['name' => 'John Day', 'state_id' => 38],
                ['name' => 'Kimberly', 'state_id' => 38],
                ['name' => 'Long Creek', 'state_id' => 38],
                ['name' => 'Monument', 'state_id' => 38],
                ['name' => 'Mount Vernon', 'state_id' => 38],
                ['name' => 'Prairie City', 'state_id' => 38],
                ['name' => 'Seneca', 'state_id' => 38],
                ['name' => 'Fields', 'state_id' => 38],
                ['name' => 'Burns', 'state_id' => 38],
                ['name' => 'Princeton', 'state_id' => 38],
                ['name' => 'Diamond', 'state_id' => 38],
                ['name' => 'Crane', 'state_id' => 38],
                ['name' => 'Frenchglen', 'state_id' => 38],
                ['name' => 'Hines', 'state_id' => 38],
                ['name' => 'Riley', 'state_id' => 38],
                ['name' => 'Drewsey', 'state_id' => 38],
                ['name' => 'Cascade Locks', 'state_id' => 38],
                ['name' => 'Hood River', 'state_id' => 38],
                ['name' => 'Mount Hood Parkdale', 'state_id' => 38],
                ['name' => 'Odell', 'state_id' => 38],
                ['name' => 'Medford', 'state_id' => 38],
                ['name' => 'Central Point', 'state_id' => 38],
                ['name' => 'White City', 'state_id' => 38],
                ['name' => 'Ashland', 'state_id' => 38],
                ['name' => 'Butte Falls', 'state_id' => 38],
                ['name' => 'Eagle Point', 'state_id' => 38],
                ['name' => 'Gold Hill', 'state_id' => 38],
                ['name' => 'Jacksonville', 'state_id' => 38],
                ['name' => 'Phoenix', 'state_id' => 38],
                ['name' => 'Prospect', 'state_id' => 38],
                ['name' => 'Rogue River', 'state_id' => 38],
                ['name' => 'Shady Cove', 'state_id' => 38],
                ['name' => 'Talent', 'state_id' => 38],
                ['name' => 'Trail', 'state_id' => 38],
                ['name' => 'Ashwood', 'state_id' => 38],
                ['name' => 'Camp Sherman', 'state_id' => 38],
                ['name' => 'Culver', 'state_id' => 38],
                ['name' => 'Madras', 'state_id' => 38],
                ['name' => 'Warm Springs', 'state_id' => 38],
                ['name' => 'Wolf Creek', 'state_id' => 38],
                ['name' => 'Cave Junction', 'state_id' => 38],
                ['name' => 'Grants Pass', 'state_id' => 38],
                ['name' => 'Kerby', 'state_id' => 38],
                ['name' => 'Merlin', 'state_id' => 38],
                ['name' => 'Murphy', 'state_id' => 38],
                ['name' => 'O Brien', 'state_id' => 38],
                ['name' => 'Selma', 'state_id' => 38],
                ['name' => 'Wilderville', 'state_id' => 38],
                ['name' => 'Williams', 'state_id' => 38],
                ['name' => 'Klamath Falls', 'state_id' => 38],
                ['name' => 'Crater Lake', 'state_id' => 38],
                ['name' => 'Beatty', 'state_id' => 38],
                ['name' => 'Bly', 'state_id' => 38],
                ['name' => 'Bonanza', 'state_id' => 38],
                ['name' => 'Chiloquin', 'state_id' => 38],
                ['name' => 'Dairy', 'state_id' => 38],
                ['name' => 'Fort Klamath', 'state_id' => 38],
                ['name' => 'Keno', 'state_id' => 38],
                ['name' => 'Malin', 'state_id' => 38],
                ['name' => 'Merrill', 'state_id' => 38],
                ['name' => 'Midland', 'state_id' => 38],
                ['name' => 'Sprague River', 'state_id' => 38],
                ['name' => 'Chemult', 'state_id' => 38],
                ['name' => 'Crescent', 'state_id' => 38],
                ['name' => 'Gilchrist', 'state_id' => 38],
                ['name' => 'Adel', 'state_id' => 38],
                ['name' => 'Lakeview', 'state_id' => 38],
                ['name' => 'New Pine Creek', 'state_id' => 38],
                ['name' => 'Paisley', 'state_id' => 38],
                ['name' => 'Plush', 'state_id' => 38],
                ['name' => 'Silver Lake', 'state_id' => 38],
                ['name' => 'Summer Lake', 'state_id' => 38],
                ['name' => 'Christmas Valley', 'state_id' => 38],
                ['name' => 'Fort Rock', 'state_id' => 38],
                ['name' => 'Eugene', 'state_id' => 38],
                ['name' => 'Alvadore', 'state_id' => 38],
                ['name' => 'Blachly', 'state_id' => 38],
                ['name' => 'Blue River', 'state_id' => 38],
                ['name' => 'Cheshire', 'state_id' => 38],
                ['name' => 'Cottage Grove', 'state_id' => 38],
                ['name' => 'Creswell', 'state_id' => 38],
                ['name' => 'Deadwood', 'state_id' => 38],
                ['name' => 'Dexter', 'state_id' => 38],
                ['name' => 'Dorena', 'state_id' => 38],
                ['name' => 'Elmira', 'state_id' => 38],
                ['name' => 'Fall Creek', 'state_id' => 38],
                ['name' => 'Florence', 'state_id' => 38],
                ['name' => 'Junction City', 'state_id' => 38],
                ['name' => 'Lorane', 'state_id' => 38],
                ['name' => 'Lowell', 'state_id' => 38],
                ['name' => 'Mapleton', 'state_id' => 38],
                ['name' => 'Marcola', 'state_id' => 38],
                ['name' => 'Pleasant Hill', 'state_id' => 38],
                ['name' => 'Noti', 'state_id' => 38],
                ['name' => 'Oakridge', 'state_id' => 38],
                ['name' => 'Springfield', 'state_id' => 38],
                ['name' => 'Swisshome', 'state_id' => 38],
                ['name' => 'Veneta', 'state_id' => 38],
                ['name' => 'Vida', 'state_id' => 38],
                ['name' => 'Walterville', 'state_id' => 38],
                ['name' => 'Walton', 'state_id' => 38],
                ['name' => 'Westfir', 'state_id' => 38],
                ['name' => 'Westlake', 'state_id' => 38],
                ['name' => 'Depoe Bay', 'state_id' => 38],
                ['name' => 'Eddyville', 'state_id' => 38],
                ['name' => 'Logsden', 'state_id' => 38],
                ['name' => 'Neotsu', 'state_id' => 38],
                ['name' => 'Newport', 'state_id' => 38],
                ['name' => 'South Beach', 'state_id' => 38],
                ['name' => 'Lincoln City', 'state_id' => 38],
                ['name' => 'Otis', 'state_id' => 38],
                ['name' => 'Otter Rock', 'state_id' => 38],
                ['name' => 'Seal Rock', 'state_id' => 38],
                ['name' => 'Siletz', 'state_id' => 38],
                ['name' => 'Gleneden Beach', 'state_id' => 38],
                ['name' => 'Tidewater', 'state_id' => 38],
                ['name' => 'Toledo', 'state_id' => 38],
                ['name' => 'Waldport', 'state_id' => 38],
                ['name' => 'Yachats', 'state_id' => 38],
                ['name' => 'Albany', 'state_id' => 38],
                ['name' => 'Brownsville', 'state_id' => 38],
                ['name' => 'Cascadia', 'state_id' => 38],
                ['name' => 'Crabtree', 'state_id' => 38],
                ['name' => 'Crawfordsville', 'state_id' => 38],
                ['name' => 'Foster', 'state_id' => 38],
                ['name' => 'Halsey', 'state_id' => 38],
                ['name' => 'Lebanon', 'state_id' => 38],
                ['name' => 'Lyons', 'state_id' => 38],
                ['name' => 'Mill City', 'state_id' => 38],
                ['name' => 'Scio', 'state_id' => 38],
                ['name' => 'Shedd', 'state_id' => 38],
                ['name' => 'Sweet Home', 'state_id' => 38],
                ['name' => 'Tangent', 'state_id' => 38],
                ['name' => 'Harrisburg', 'state_id' => 38],
                ['name' => 'Adrian', 'state_id' => 38],
                ['name' => 'Arock', 'state_id' => 38],
                ['name' => 'Brogan', 'state_id' => 38],
                ['name' => 'Harper', 'state_id' => 38],
                ['name' => 'Ironside', 'state_id' => 38],
                ['name' => 'Jamieson', 'state_id' => 38],
                ['name' => 'Jordan Valley', 'state_id' => 38],
                ['name' => 'Juntura', 'state_id' => 38],
                ['name' => 'Nyssa', 'state_id' => 38],
                ['name' => 'Ontario', 'state_id' => 38],
                ['name' => 'Riverside', 'state_id' => 38],
                ['name' => 'Vale', 'state_id' => 38],
                ['name' => 'Westfall', 'state_id' => 38],
                ['name' => 'Aurora', 'state_id' => 38],
                ['name' => 'Donald', 'state_id' => 38],
                ['name' => 'Gervais', 'state_id' => 38],
                ['name' => 'Hubbard', 'state_id' => 38],
                ['name' => 'Woodburn', 'state_id' => 38],
                ['name' => 'Saint Paul', 'state_id' => 38],
                ['name' => 'Salem', 'state_id' => 38],
                ['name' => 'Keizer', 'state_id' => 38],
                ['name' => 'Aumsville', 'state_id' => 38],
                ['name' => 'Detroit', 'state_id' => 38],
                ['name' => 'Gates', 'state_id' => 38],
                ['name' => 'Idanha', 'state_id' => 38],
                ['name' => 'Jefferson', 'state_id' => 38],
                ['name' => 'Mount Angel', 'state_id' => 38],
                ['name' => 'Saint Benedict', 'state_id' => 38],
                ['name' => 'Scotts Mills', 'state_id' => 38],
                ['name' => 'Silverton', 'state_id' => 38],
                ['name' => 'Stayton', 'state_id' => 38],
                ['name' => 'Mehama', 'state_id' => 38],
                ['name' => 'Sublimity', 'state_id' => 38],
                ['name' => 'Turner', 'state_id' => 38],
                ['name' => 'Boardman', 'state_id' => 38],
                ['name' => 'Heppner', 'state_id' => 38],
                ['name' => 'Lexington', 'state_id' => 38],
                ['name' => 'Ione', 'state_id' => 38],
                ['name' => 'Irrigon', 'state_id' => 38],
                ['name' => 'Bridal Veil', 'state_id' => 38],
                ['name' => 'Corbett', 'state_id' => 38],
                ['name' => 'Fairview', 'state_id' => 38],
                ['name' => 'Gresham', 'state_id' => 38],
                ['name' => 'Troutdale', 'state_id' => 38],
                ['name' => 'Happy Valley', 'state_id' => 38],
                ['name' => 'Dallas', 'state_id' => 38],
                ['name' => 'Falls City', 'state_id' => 38],
                ['name' => 'Grand Ronde', 'state_id' => 38],
                ['name' => 'Independence', 'state_id' => 38],
                ['name' => 'Monmouth', 'state_id' => 38],
                ['name' => 'Rickreall', 'state_id' => 38],
                ['name' => 'Grass Valley', 'state_id' => 38],
                ['name' => 'Kent', 'state_id' => 38],
                ['name' => 'Moro', 'state_id' => 38],
                ['name' => 'Rufus', 'state_id' => 38],
                ['name' => 'Wasco', 'state_id' => 38],
                ['name' => 'Bay City', 'state_id' => 38],
                ['name' => 'Beaver', 'state_id' => 38],
                ['name' => 'Cloverdale', 'state_id' => 38],
                ['name' => 'Garibaldi', 'state_id' => 38],
                ['name' => 'Hebo', 'state_id' => 38],
                ['name' => 'Manzanita', 'state_id' => 38],
                ['name' => 'Nehalem', 'state_id' => 38],
                ['name' => 'Oceanside', 'state_id' => 38],
                ['name' => 'Pacific City', 'state_id' => 38],
                ['name' => 'Rockaway Beach', 'state_id' => 38],
                ['name' => 'Tillamook', 'state_id' => 38],
                ['name' => 'Netarts', 'state_id' => 38],
                ['name' => 'Wheeler', 'state_id' => 38],
                ['name' => 'Neskowin', 'state_id' => 38],
                ['name' => 'Pendleton', 'state_id' => 38],
                ['name' => 'Adams', 'state_id' => 38],
                ['name' => 'Athena', 'state_id' => 38],
                ['name' => 'Echo', 'state_id' => 38],
                ['name' => 'Helix', 'state_id' => 38],
                ['name' => 'Hermiston', 'state_id' => 38],
                ['name' => 'Meacham', 'state_id' => 38],
                ['name' => 'Milton Freewater', 'state_id' => 38],
                ['name' => 'Pilot Rock', 'state_id' => 38],
                ['name' => 'Stanfield', 'state_id' => 38],
                ['name' => 'Ukiah', 'state_id' => 38],
                ['name' => 'Umatilla', 'state_id' => 38],
                ['name' => 'Weston', 'state_id' => 38],
                ['name' => 'Cove', 'state_id' => 38],
                ['name' => 'Elgin', 'state_id' => 38],
                ['name' => 'Imbler', 'state_id' => 38],
                ['name' => 'La Grande', 'state_id' => 38],
                ['name' => 'North Powder', 'state_id' => 38],
                ['name' => 'Summerville', 'state_id' => 38],
                ['name' => 'Union', 'state_id' => 38],
                ['name' => 'Enterprise', 'state_id' => 38],
                ['name' => 'Imnaha', 'state_id' => 38],
                ['name' => 'Joseph', 'state_id' => 38],
                ['name' => 'Lostine', 'state_id' => 38],
                ['name' => 'Wallowa', 'state_id' => 38],
                ['name' => 'Antelope', 'state_id' => 38],
                ['name' => 'Dufur', 'state_id' => 38],
                ['name' => 'Maupin', 'state_id' => 38],
                ['name' => 'Mosier', 'state_id' => 38],
                ['name' => 'Shaniko', 'state_id' => 38],
                ['name' => 'The Dalles', 'state_id' => 38],
                ['name' => 'Tygh Valley', 'state_id' => 38],
                ['name' => 'Beaverton', 'state_id' => 38],
                ['name' => 'Tualatin', 'state_id' => 38],
                ['name' => 'Banks', 'state_id' => 38],
                ['name' => 'Buxton', 'state_id' => 38],
                ['name' => 'Cornelius', 'state_id' => 38],
                ['name' => 'Forest Grove', 'state_id' => 38],
                ['name' => 'Gales Creek', 'state_id' => 38],
                ['name' => 'Gaston', 'state_id' => 38],
                ['name' => 'Hillsboro', 'state_id' => 38],
                ['name' => 'Manning', 'state_id' => 38],
                ['name' => 'North Plains', 'state_id' => 38],
                ['name' => 'Sherwood', 'state_id' => 38],
                ['name' => 'Timber', 'state_id' => 38],
                ['name' => 'Mitchell', 'state_id' => 38],
                ['name' => 'Fossil', 'state_id' => 38],
                ['name' => 'Spray', 'state_id' => 38],
                ['name' => 'Amity', 'state_id' => 38],
                ['name' => 'Carlton', 'state_id' => 38],
                ['name' => 'Dayton', 'state_id' => 38],
                ['name' => 'Dundee', 'state_id' => 38],
                ['name' => 'Lafayette', 'state_id' => 38],
                ['name' => 'Mcminnville', 'state_id' => 38],
                ['name' => 'Newberg', 'state_id' => 38],
                ['name' => 'Yamhill', 'state_id' => 38],
                ['name' => 'Sheridan', 'state_id' => 38],
                ['name' => 'Willamina', 'state_id' => 38]
            ]);
        }
    }
}