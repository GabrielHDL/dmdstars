<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state48TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of WA - Washington.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Benge', 'state_id' => 48],
                ['name' => 'Ritzville', 'state_id' => 48],
                ['name' => 'Lind', 'state_id' => 48],
                ['name' => 'Othello', 'state_id' => 48],
                ['name' => 'Washtucna', 'state_id' => 48],
                ['name' => 'Anatone', 'state_id' => 48],
                ['name' => 'Asotin', 'state_id' => 48],
                ['name' => 'Clarkston', 'state_id' => 48],
                ['name' => 'Benton City', 'state_id' => 48],
                ['name' => 'Kennewick', 'state_id' => 48],
                ['name' => 'Paterson', 'state_id' => 48],
                ['name' => 'Plymouth', 'state_id' => 48],
                ['name' => 'Prosser', 'state_id' => 48],
                ['name' => 'Richland', 'state_id' => 48],
                ['name' => 'West Richland', 'state_id' => 48],
                ['name' => 'Wenatchee', 'state_id' => 48],
                ['name' => 'Ardenvoir', 'state_id' => 48],
                ['name' => 'Cashmere', 'state_id' => 48],
                ['name' => 'Chelan', 'state_id' => 48],
                ['name' => 'Chelan Falls', 'state_id' => 48],
                ['name' => 'Dryden', 'state_id' => 48],
                ['name' => 'Entiat', 'state_id' => 48],
                ['name' => 'Leavenworth', 'state_id' => 48],
                ['name' => 'Malaga', 'state_id' => 48],
                ['name' => 'Manson', 'state_id' => 48],
                ['name' => 'Monitor', 'state_id' => 48],
                ['name' => 'Peshastin', 'state_id' => 48],
                ['name' => 'Stehekin', 'state_id' => 48],
                ['name' => 'Beaver', 'state_id' => 48],
                ['name' => 'Carlsborg', 'state_id' => 48],
                ['name' => 'Clallam Bay', 'state_id' => 48],
                ['name' => 'Forks', 'state_id' => 48],
                ['name' => 'Joyce', 'state_id' => 48],
                ['name' => 'La Push', 'state_id' => 48],
                ['name' => 'Neah Bay', 'state_id' => 48],
                ['name' => 'Port Angeles', 'state_id' => 48],
                ['name' => 'Sekiu', 'state_id' => 48],
                ['name' => 'Sequim', 'state_id' => 48],
                ['name' => 'Amboy', 'state_id' => 48],
                ['name' => 'Battle Ground', 'state_id' => 48],
                ['name' => 'Brush Prairie', 'state_id' => 48],
                ['name' => 'Camas', 'state_id' => 48],
                ['name' => 'Heisson', 'state_id' => 48],
                ['name' => 'La Center', 'state_id' => 48],
                ['name' => 'Ridgefield', 'state_id' => 48],
                ['name' => 'Vancouver', 'state_id' => 48],
                ['name' => 'Washougal', 'state_id' => 48],
                ['name' => 'Yacolt', 'state_id' => 48],
                ['name' => 'Dayton', 'state_id' => 48],
                ['name' => 'Starbuck', 'state_id' => 48],
                ['name' => 'Ryderwood', 'state_id' => 48],
                ['name' => 'Ariel', 'state_id' => 48],
                ['name' => 'Carrolls', 'state_id' => 48],
                ['name' => 'Castle Rock', 'state_id' => 48],
                ['name' => 'Cougar', 'state_id' => 48],
                ['name' => 'Kalama', 'state_id' => 48],
                ['name' => 'Kelso', 'state_id' => 48],
                ['name' => 'Longview', 'state_id' => 48],
                ['name' => 'Silverlake', 'state_id' => 48],
                ['name' => 'Toutle', 'state_id' => 48],
                ['name' => 'Woodland', 'state_id' => 48],
                ['name' => 'East Wenatchee', 'state_id' => 48],
                ['name' => 'Bridgeport', 'state_id' => 48],
                ['name' => 'Mansfield', 'state_id' => 48],
                ['name' => 'Orondo', 'state_id' => 48],
                ['name' => 'Palisades', 'state_id' => 48],
                ['name' => 'Rock Island', 'state_id' => 48],
                ['name' => 'Waterville', 'state_id' => 48],
                ['name' => 'Boyds', 'state_id' => 48],
                ['name' => 'Curlew', 'state_id' => 48],
                ['name' => 'Danville', 'state_id' => 48],
                ['name' => 'Inchelium', 'state_id' => 48],
                ['name' => 'Keller', 'state_id' => 48],
                ['name' => 'Laurier', 'state_id' => 48],
                ['name' => 'Malo', 'state_id' => 48],
                ['name' => 'Orient', 'state_id' => 48],
                ['name' => 'Republic', 'state_id' => 48],
                ['name' => 'Pasco', 'state_id' => 48],
                ['name' => 'Connell', 'state_id' => 48],
                ['name' => 'Eltopia', 'state_id' => 48],
                ['name' => 'Kahlotus', 'state_id' => 48],
                ['name' => 'Mesa', 'state_id' => 48],
                ['name' => 'Pomeroy', 'state_id' => 48],
                ['name' => 'Ephrata', 'state_id' => 48],
                ['name' => 'George', 'state_id' => 48],
                ['name' => 'Marlin', 'state_id' => 48],
                ['name' => 'Moses Lake', 'state_id' => 48],
                ['name' => 'Quincy', 'state_id' => 48],
                ['name' => 'Soap Lake', 'state_id' => 48],
                ['name' => 'Stratford', 'state_id' => 48],
                ['name' => 'Warden', 'state_id' => 48],
                ['name' => 'Wilson Creek', 'state_id' => 48],
                ['name' => 'Coulee City', 'state_id' => 48],
                ['name' => 'Electric City', 'state_id' => 48],
                ['name' => 'Grand Coulee', 'state_id' => 48],
                ['name' => 'Hartline', 'state_id' => 48],
                ['name' => 'Beverly', 'state_id' => 48],
                ['name' => 'Mattawa', 'state_id' => 48],
                ['name' => 'Royal City', 'state_id' => 48],
                ['name' => 'Aberdeen', 'state_id' => 48],
                ['name' => 'Amanda Park', 'state_id' => 48],
                ['name' => 'Copalis Beach', 'state_id' => 48],
                ['name' => 'Copalis Crossing', 'state_id' => 48],
                ['name' => 'Cosmopolis', 'state_id' => 48],
                ['name' => 'Elma', 'state_id' => 48],
                ['name' => 'Grayland', 'state_id' => 48],
                ['name' => 'Hoquiam', 'state_id' => 48],
                ['name' => 'Humptulips', 'state_id' => 48],
                ['name' => 'Mccleary', 'state_id' => 48],
                ['name' => 'Malone', 'state_id' => 48],
                ['name' => 'Moclips', 'state_id' => 48],
                ['name' => 'Montesano', 'state_id' => 48],
                ['name' => 'Neilton', 'state_id' => 48],
                ['name' => 'Oakville', 'state_id' => 48],
                ['name' => 'Ocean Shores', 'state_id' => 48],
                ['name' => 'Pacific Beach', 'state_id' => 48],
                ['name' => 'Quinault', 'state_id' => 48],
                ['name' => 'Satsop', 'state_id' => 48],
                ['name' => 'Taholah', 'state_id' => 48],
                ['name' => 'Westport', 'state_id' => 48],
                ['name' => 'Clinton', 'state_id' => 48],
                ['name' => 'Coupeville', 'state_id' => 48],
                ['name' => 'Freeland', 'state_id' => 48],
                ['name' => 'Greenbank', 'state_id' => 48],
                ['name' => 'Langley', 'state_id' => 48],
                ['name' => 'Oak Harbor', 'state_id' => 48],
                ['name' => 'Brinnon', 'state_id' => 48],
                ['name' => 'Chimacum', 'state_id' => 48],
                ['name' => 'Port Hadlock', 'state_id' => 48],
                ['name' => 'Nordland', 'state_id' => 48],
                ['name' => 'Port Ludlow', 'state_id' => 48],
                ['name' => 'Port Townsend', 'state_id' => 48],
                ['name' => 'Quilcene', 'state_id' => 48],
                ['name' => 'Auburn', 'state_id' => 48],
                ['name' => 'Federal Way', 'state_id' => 48],
                ['name' => 'Bellevue', 'state_id' => 48],
                ['name' => 'Black Diamond', 'state_id' => 48],
                ['name' => 'Bothell', 'state_id' => 48],
                ['name' => 'Burton', 'state_id' => 48],
                ['name' => 'Carnation', 'state_id' => 48],
                ['name' => 'Duvall', 'state_id' => 48],
                ['name' => 'Enumclaw', 'state_id' => 48],
                ['name' => 'Fall City', 'state_id' => 48],
                ['name' => 'Hobart', 'state_id' => 48],
                ['name' => 'Issaquah', 'state_id' => 48],
                ['name' => 'Kenmore', 'state_id' => 48],
                ['name' => 'Kent', 'state_id' => 48],
                ['name' => 'Kirkland', 'state_id' => 48],
                ['name' => 'Maple Valley', 'state_id' => 48],
                ['name' => 'Medina', 'state_id' => 48],
                ['name' => 'Mercer Island', 'state_id' => 48],
                ['name' => 'North Bend', 'state_id' => 48],
                ['name' => 'Pacific', 'state_id' => 48],
                ['name' => 'Preston', 'state_id' => 48],
                ['name' => 'Ravensdale', 'state_id' => 48],
                ['name' => 'Redmond', 'state_id' => 48],
                ['name' => 'Renton', 'state_id' => 48],
                ['name' => 'Seahurst', 'state_id' => 48],
                ['name' => 'Snoqualmie', 'state_id' => 48],
                ['name' => 'Snoqualmie Pass', 'state_id' => 48],
                ['name' => 'Vashon', 'state_id' => 48],
                ['name' => 'Woodinville', 'state_id' => 48],
                ['name' => 'Sammamish', 'state_id' => 48],
                ['name' => 'Seattle', 'state_id' => 48],
                ['name' => 'Baring', 'state_id' => 48],
                ['name' => 'Skykomish', 'state_id' => 48],
                ['name' => 'Rollingbay', 'state_id' => 48],
                ['name' => 'Bainbridge Island', 'state_id' => 48],
                ['name' => 'Bremerton', 'state_id' => 48],
                ['name' => 'Silverdale', 'state_id' => 48],
                ['name' => 'Burley', 'state_id' => 48],
                ['name' => 'Hansville', 'state_id' => 48],
                ['name' => 'Indianola', 'state_id' => 48],
                ['name' => 'Keyport', 'state_id' => 48],
                ['name' => 'Kingston', 'state_id' => 48],
                ['name' => 'Manchester', 'state_id' => 48],
                ['name' => 'Olalla', 'state_id' => 48],
                ['name' => 'Port Gamble', 'state_id' => 48],
                ['name' => 'Port Orchard', 'state_id' => 48],
                ['name' => 'Poulsbo', 'state_id' => 48],
                ['name' => 'Retsil', 'state_id' => 48],
                ['name' => 'Seabeck', 'state_id' => 48],
                ['name' => 'South Colby', 'state_id' => 48],
                ['name' => 'Southworth', 'state_id' => 48],
                ['name' => 'Suquamish', 'state_id' => 48],
                ['name' => 'Tracyton', 'state_id' => 48],
                ['name' => 'Cle Elum', 'state_id' => 48],
                ['name' => 'Easton', 'state_id' => 48],
                ['name' => 'Ellensburg', 'state_id' => 48],
                ['name' => 'Kittitas', 'state_id' => 48],
                ['name' => 'Ronald', 'state_id' => 48],
                ['name' => 'Roslyn', 'state_id' => 48],
                ['name' => 'South Cle Elum', 'state_id' => 48],
                ['name' => 'Thorp', 'state_id' => 48],
                ['name' => 'Vantage', 'state_id' => 48],
                ['name' => 'Appleton', 'state_id' => 48],
                ['name' => 'Bingen', 'state_id' => 48],
                ['name' => 'Centerville', 'state_id' => 48],
                ['name' => 'Dallesport', 'state_id' => 48],
                ['name' => 'Glenwood', 'state_id' => 48],
                ['name' => 'Goldendale', 'state_id' => 48],
                ['name' => 'Husum', 'state_id' => 48],
                ['name' => 'Klickitat', 'state_id' => 48],
                ['name' => 'Lyle', 'state_id' => 48],
                ['name' => 'Trout Lake', 'state_id' => 48],
                ['name' => 'Wahkiacus', 'state_id' => 48],
                ['name' => 'White Salmon', 'state_id' => 48],
                ['name' => 'Wishram', 'state_id' => 48],
                ['name' => 'Bickleton', 'state_id' => 48],
                ['name' => 'Roosevelt', 'state_id' => 48],
                ['name' => 'Glenoma', 'state_id' => 48],
                ['name' => 'Mineral', 'state_id' => 48],
                ['name' => 'Morton', 'state_id' => 48],
                ['name' => 'Packwood', 'state_id' => 48],
                ['name' => 'Randle', 'state_id' => 48],
                ['name' => 'Adna', 'state_id' => 48],
                ['name' => 'Centralia', 'state_id' => 48],
                ['name' => 'Chehalis', 'state_id' => 48],
                ['name' => 'Cinebar', 'state_id' => 48],
                ['name' => 'Curtis', 'state_id' => 48],
                ['name' => 'Doty', 'state_id' => 48],
                ['name' => 'Ethel', 'state_id' => 48],
                ['name' => 'Galvin', 'state_id' => 48],
                ['name' => 'Mossyrock', 'state_id' => 48],
                ['name' => 'Napavine', 'state_id' => 48],
                ['name' => 'Onalaska', 'state_id' => 48],
                ['name' => 'Pe Ell', 'state_id' => 48],
                ['name' => 'Salkum', 'state_id' => 48],
                ['name' => 'Silver Creek', 'state_id' => 48],
                ['name' => 'Toledo', 'state_id' => 48],
                ['name' => 'Vader', 'state_id' => 48],
                ['name' => 'Winlock', 'state_id' => 48],
                ['name' => 'Edwall', 'state_id' => 48],
                ['name' => 'Sprague', 'state_id' => 48],
                ['name' => 'Almira', 'state_id' => 48],
                ['name' => 'Creston', 'state_id' => 48],
                ['name' => 'Davenport', 'state_id' => 48],
                ['name' => 'Harrington', 'state_id' => 48],
                ['name' => 'Lamona', 'state_id' => 48],
                ['name' => 'Lincoln', 'state_id' => 48],
                ['name' => 'Mohler', 'state_id' => 48],
                ['name' => 'Odessa', 'state_id' => 48],
                ['name' => 'Wilbur', 'state_id' => 48],
                ['name' => 'Allyn', 'state_id' => 48],
                ['name' => 'Belfair', 'state_id' => 48],
                ['name' => 'Grapeview', 'state_id' => 48],
                ['name' => 'Hoodsport', 'state_id' => 48],
                ['name' => 'Lilliwaup', 'state_id' => 48],
                ['name' => 'Matlock', 'state_id' => 48],
                ['name' => 'Shelton', 'state_id' => 48],
                ['name' => 'Tahuya', 'state_id' => 48],
                ['name' => 'Union', 'state_id' => 48],
                ['name' => 'Brewster', 'state_id' => 48],
                ['name' => 'Carlton', 'state_id' => 48],
                ['name' => 'Conconully', 'state_id' => 48],
                ['name' => 'Loomis', 'state_id' => 48],
                ['name' => 'Malott', 'state_id' => 48],
                ['name' => 'Mazama', 'state_id' => 48],
                ['name' => 'Methow', 'state_id' => 48],
                ['name' => 'Okanogan', 'state_id' => 48],
                ['name' => 'Omak', 'state_id' => 48],
                ['name' => 'Oroville', 'state_id' => 48],
                ['name' => 'Pateros', 'state_id' => 48],
                ['name' => 'Riverside', 'state_id' => 48],
                ['name' => 'Tonasket', 'state_id' => 48],
                ['name' => 'Twisp', 'state_id' => 48],
                ['name' => 'Wauconda', 'state_id' => 48],
                ['name' => 'Winthrop', 'state_id' => 48],
                ['name' => 'Coulee Dam', 'state_id' => 48],
                ['name' => 'Elmer City', 'state_id' => 48],
                ['name' => 'Nespelem', 'state_id' => 48],
                ['name' => 'Bay Center', 'state_id' => 48],
                ['name' => 'Lebam', 'state_id' => 48],
                ['name' => 'Menlo', 'state_id' => 48],
                ['name' => 'Raymond', 'state_id' => 48],
                ['name' => 'South Bend', 'state_id' => 48],
                ['name' => 'Tokeland', 'state_id' => 48],
                ['name' => 'Chinook', 'state_id' => 48],
                ['name' => 'Ilwaco', 'state_id' => 48],
                ['name' => 'Long Beach', 'state_id' => 48],
                ['name' => 'Nahcotta', 'state_id' => 48],
                ['name' => 'Naselle', 'state_id' => 48],
                ['name' => 'Ocean Park', 'state_id' => 48],
                ['name' => 'Oysterville', 'state_id' => 48],
                ['name' => 'Seaview', 'state_id' => 48],
                ['name' => 'Cusick', 'state_id' => 48],
                ['name' => 'Ione', 'state_id' => 48],
                ['name' => 'Metaline', 'state_id' => 48],
                ['name' => 'Metaline Falls', 'state_id' => 48],
                ['name' => 'Newport', 'state_id' => 48],
                ['name' => 'Usk', 'state_id' => 48],
                ['name' => 'Anderson Island', 'state_id' => 48],
                ['name' => 'Ashford', 'state_id' => 48],
                ['name' => 'Buckley', 'state_id' => 48],
                ['name' => 'Carbonado', 'state_id' => 48],
                ['name' => 'Dupont', 'state_id' => 48],
                ['name' => 'Eatonville', 'state_id' => 48],
                ['name' => 'Gig Harbor', 'state_id' => 48],
                ['name' => 'Elbe', 'state_id' => 48],
                ['name' => 'Fox Island', 'state_id' => 48],
                ['name' => 'Graham', 'state_id' => 48],
                ['name' => 'Kapowsin', 'state_id' => 48],
                ['name' => 'La Grande', 'state_id' => 48],
                ['name' => 'Lakebay', 'state_id' => 48],
                ['name' => 'Longbranch', 'state_id' => 48],
                ['name' => 'Sumner', 'state_id' => 48],
                ['name' => 'Milton', 'state_id' => 48],
                ['name' => 'Orting', 'state_id' => 48],
                ['name' => 'Puyallup', 'state_id' => 48],
                ['name' => 'South Prairie', 'state_id' => 48],
                ['name' => 'Spanaway', 'state_id' => 48],
                ['name' => 'Steilacoom', 'state_id' => 48],
                ['name' => 'Bonney Lake', 'state_id' => 48],
                ['name' => 'Vaughn', 'state_id' => 48],
                ['name' => 'Wauna', 'state_id' => 48],
                ['name' => 'Wilkeson', 'state_id' => 48],
                ['name' => 'Longmire', 'state_id' => 48],
                ['name' => 'Paradise Inn', 'state_id' => 48],
                ['name' => 'Tacoma', 'state_id' => 48],
                ['name' => 'Camp Murray', 'state_id' => 48],
                ['name' => 'Mcchord Afb', 'state_id' => 48],
                ['name' => 'Lakewood', 'state_id' => 48],
                ['name' => 'University Place', 'state_id' => 48],
                ['name' => 'Mckenna', 'state_id' => 48],
                ['name' => 'Roy', 'state_id' => 48],
                ['name' => 'Blakely Island', 'state_id' => 48],
                ['name' => 'Deer Harbor', 'state_id' => 48],
                ['name' => 'Eastsound', 'state_id' => 48],
                ['name' => 'Friday Harbor', 'state_id' => 48],
                ['name' => 'Lopez Island', 'state_id' => 48],
                ['name' => 'Olga', 'state_id' => 48],
                ['name' => 'Orcas', 'state_id' => 48],
                ['name' => 'Shaw Island', 'state_id' => 48],
                ['name' => 'Waldron', 'state_id' => 48],
                ['name' => 'Anacortes', 'state_id' => 48],
                ['name' => 'Bow', 'state_id' => 48],
                ['name' => 'Burlington', 'state_id' => 48],
                ['name' => 'Clearlake', 'state_id' => 48],
                ['name' => 'Concrete', 'state_id' => 48],
                ['name' => 'Conway', 'state_id' => 48],
                ['name' => 'Hamilton', 'state_id' => 48],
                ['name' => 'La Conner', 'state_id' => 48],
                ['name' => 'Lyman', 'state_id' => 48],
                ['name' => 'Marblemount', 'state_id' => 48],
                ['name' => 'Mount Vernon', 'state_id' => 48],
                ['name' => 'Rockport', 'state_id' => 48],
                ['name' => 'Sedro Woolley', 'state_id' => 48],
                ['name' => 'Carson', 'state_id' => 48],
                ['name' => 'North Bonneville', 'state_id' => 48],
                ['name' => 'Stevenson', 'state_id' => 48],
                ['name' => 'Underwood', 'state_id' => 48],
                ['name' => 'Edmonds', 'state_id' => 48],
                ['name' => 'Lynnwood', 'state_id' => 48],
                ['name' => 'Mountlake Terrace', 'state_id' => 48],
                ['name' => 'Mill Creek', 'state_id' => 48],
                ['name' => 'Everett', 'state_id' => 48],
                ['name' => 'Arlington', 'state_id' => 48],
                ['name' => 'Darrington', 'state_id' => 48],
                ['name' => 'Gold Bar', 'state_id' => 48],
                ['name' => 'Granite Falls', 'state_id' => 48],
                ['name' => 'Index', 'state_id' => 48],
                ['name' => 'Lake Stevens', 'state_id' => 48],
                ['name' => 'North Lakewood', 'state_id' => 48],
                ['name' => 'Marysville', 'state_id' => 48],
                ['name' => 'Monroe', 'state_id' => 48],
                ['name' => 'Mukilteo', 'state_id' => 48],
                ['name' => 'Camano Island', 'state_id' => 48],
                ['name' => 'Silvana', 'state_id' => 48],
                ['name' => 'Snohomish', 'state_id' => 48],
                ['name' => 'Stanwood', 'state_id' => 48],
                ['name' => 'Startup', 'state_id' => 48],
                ['name' => 'Sultan', 'state_id' => 48],
                ['name' => 'Airway Heights', 'state_id' => 48],
                ['name' => 'Chattaroy', 'state_id' => 48],
                ['name' => 'Cheney', 'state_id' => 48],
                ['name' => 'Colbert', 'state_id' => 48],
                ['name' => 'Deer Park', 'state_id' => 48],
                ['name' => 'Elk', 'state_id' => 48],
                ['name' => 'Fairchild Air Force Base', 'state_id' => 48],
                ['name' => 'Fairfield', 'state_id' => 48],
                ['name' => 'Four Lakes', 'state_id' => 48],
                ['name' => 'Greenacres', 'state_id' => 48],
                ['name' => 'Latah', 'state_id' => 48],
                ['name' => 'Liberty Lake', 'state_id' => 48],
                ['name' => 'Marshall', 'state_id' => 48],
                ['name' => 'Mead', 'state_id' => 48],
                ['name' => 'Medical Lake', 'state_id' => 48],
                ['name' => 'Mica', 'state_id' => 48],
                ['name' => 'Newman Lake', 'state_id' => 48],
                ['name' => 'Nine Mile Falls', 'state_id' => 48],
                ['name' => 'Otis Orchards', 'state_id' => 48],
                ['name' => 'Reardan', 'state_id' => 48],
                ['name' => 'Rockford', 'state_id' => 48],
                ['name' => 'Spangle', 'state_id' => 48],
                ['name' => 'Valleyford', 'state_id' => 48],
                ['name' => 'Veradale', 'state_id' => 48],
                ['name' => 'Waverly', 'state_id' => 48],
                ['name' => 'Spokane', 'state_id' => 48],
                ['name' => 'Ford', 'state_id' => 48],
                ['name' => 'Tumtum', 'state_id' => 48],
                ['name' => 'Wellpinit', 'state_id' => 48],
                ['name' => 'Addy', 'state_id' => 48],
                ['name' => 'Chewelah', 'state_id' => 48],
                ['name' => 'Clayton', 'state_id' => 48],
                ['name' => 'Colville', 'state_id' => 48],
                ['name' => 'Evans', 'state_id' => 48],
                ['name' => 'Fruitland', 'state_id' => 48],
                ['name' => 'Gifford', 'state_id' => 48],
                ['name' => 'Hunters', 'state_id' => 48],
                ['name' => 'Kettle Falls', 'state_id' => 48],
                ['name' => 'Loon Lake', 'state_id' => 48],
                ['name' => 'Marcus', 'state_id' => 48],
                ['name' => 'Northport', 'state_id' => 48],
                ['name' => 'Rice', 'state_id' => 48],
                ['name' => 'Springdale', 'state_id' => 48],
                ['name' => 'Valley', 'state_id' => 48],
                ['name' => 'Olympia', 'state_id' => 48],
                ['name' => 'Lacey', 'state_id' => 48],
                ['name' => 'Tumwater', 'state_id' => 48],
                ['name' => 'Bucoda', 'state_id' => 48],
                ['name' => 'East Olympia', 'state_id' => 48],
                ['name' => 'Littlerock', 'state_id' => 48],
                ['name' => 'Rainier', 'state_id' => 48],
                ['name' => 'Rochester', 'state_id' => 48],
                ['name' => 'Tenino', 'state_id' => 48],
                ['name' => 'Yelm', 'state_id' => 48],
                ['name' => 'Cathlamet', 'state_id' => 48],
                ['name' => 'Grays River', 'state_id' => 48],
                ['name' => 'Rosburg', 'state_id' => 48],
                ['name' => 'Skamokawa', 'state_id' => 48],
                ['name' => 'Burbank', 'state_id' => 48],
                ['name' => 'College Place', 'state_id' => 48],
                ['name' => 'Dixie', 'state_id' => 48],
                ['name' => 'Prescott', 'state_id' => 48],
                ['name' => 'Touchet', 'state_id' => 48],
                ['name' => 'Waitsburg', 'state_id' => 48],
                ['name' => 'Walla Walla', 'state_id' => 48],
                ['name' => 'Wallula', 'state_id' => 48],
                ['name' => 'Acme', 'state_id' => 48],
                ['name' => 'Bellingham', 'state_id' => 48],
                ['name' => 'Blaine', 'state_id' => 48],
                ['name' => 'Custer', 'state_id' => 48],
                ['name' => 'Deming', 'state_id' => 48],
                ['name' => 'Everson', 'state_id' => 48],
                ['name' => 'Ferndale', 'state_id' => 48],
                ['name' => 'Lummi Island', 'state_id' => 48],
                ['name' => 'Lynden', 'state_id' => 48],
                ['name' => 'Maple Falls', 'state_id' => 48],
                ['name' => 'Nooksack', 'state_id' => 48],
                ['name' => 'Point Roberts', 'state_id' => 48],
                ['name' => 'Sumas', 'state_id' => 48],
                ['name' => 'Lamont', 'state_id' => 48],
                ['name' => 'Tekoa', 'state_id' => 48],
                ['name' => 'Albion', 'state_id' => 48],
                ['name' => 'Belmont', 'state_id' => 48],
                ['name' => 'Colfax', 'state_id' => 48],
                ['name' => 'Colton', 'state_id' => 48],
                ['name' => 'Endicott', 'state_id' => 48],
                ['name' => 'Farmington', 'state_id' => 48],
                ['name' => 'Garfield', 'state_id' => 48],
                ['name' => 'Hay', 'state_id' => 48],
                ['name' => 'Lacrosse', 'state_id' => 48],
                ['name' => 'Malden', 'state_id' => 48],
                ['name' => 'Oakesdale', 'state_id' => 48],
                ['name' => 'Palouse', 'state_id' => 48],
                ['name' => 'Pullman', 'state_id' => 48],
                ['name' => 'Rosalia', 'state_id' => 48],
                ['name' => 'Saint John', 'state_id' => 48],
                ['name' => 'Steptoe', 'state_id' => 48],
                ['name' => 'Thornton', 'state_id' => 48],
                ['name' => 'Uniontown', 'state_id' => 48],
                ['name' => 'Hooper', 'state_id' => 48],
                ['name' => 'Yakima', 'state_id' => 48],
                ['name' => 'Brownstown', 'state_id' => 48],
                ['name' => 'Buena', 'state_id' => 48],
                ['name' => 'Cowiche', 'state_id' => 48],
                ['name' => 'Grandview', 'state_id' => 48],
                ['name' => 'Granger', 'state_id' => 48],
                ['name' => 'Harrah', 'state_id' => 48],
                ['name' => 'Mabton', 'state_id' => 48],
                ['name' => 'Moxee', 'state_id' => 48],
                ['name' => 'Naches', 'state_id' => 48],
                ['name' => 'Outlook', 'state_id' => 48],
                ['name' => 'Parker', 'state_id' => 48],
                ['name' => 'Selah', 'state_id' => 48],
                ['name' => 'Sunnyside', 'state_id' => 48],
                ['name' => 'Tieton', 'state_id' => 48],
                ['name' => 'Toppenish', 'state_id' => 48],
                ['name' => 'Wapato', 'state_id' => 48],
                ['name' => 'White Swan', 'state_id' => 48],
                ['name' => 'Zillah', 'state_id' => 48]
            ]);
        }
    }
}