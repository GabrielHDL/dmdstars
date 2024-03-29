<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state43TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of TN - Tennessee.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Andersonville', 'state_id' => 43],
                ['name' => 'Briceville', 'state_id' => 43],
                ['name' => 'Clinton', 'state_id' => 43],
                ['name' => 'Lake City', 'state_id' => 43],
                ['name' => 'Norris', 'state_id' => 43],
                ['name' => 'Oak Ridge', 'state_id' => 43],
                ['name' => 'Bell Buckle', 'state_id' => 43],
                ['name' => 'Shelbyville', 'state_id' => 43],
                ['name' => 'Unionville', 'state_id' => 43],
                ['name' => 'Wartrace', 'state_id' => 43],
                ['name' => 'Normandy', 'state_id' => 43],
                ['name' => 'Big Sandy', 'state_id' => 43],
                ['name' => 'Camden', 'state_id' => 43],
                ['name' => 'Eva', 'state_id' => 43],
                ['name' => 'Holladay', 'state_id' => 43],
                ['name' => 'Pikeville', 'state_id' => 43],
                ['name' => 'Alcoa', 'state_id' => 43],
                ['name' => 'Friendsville', 'state_id' => 43],
                ['name' => 'Louisville', 'state_id' => 43],
                ['name' => 'Maryville', 'state_id' => 43],
                ['name' => 'Rockford', 'state_id' => 43],
                ['name' => 'Tallassee', 'state_id' => 43],
                ['name' => 'Townsend', 'state_id' => 43],
                ['name' => 'Walland', 'state_id' => 43],
                ['name' => 'Charleston', 'state_id' => 43],
                ['name' => 'Cleveland', 'state_id' => 43],
                ['name' => 'Mc Donald', 'state_id' => 43],
                ['name' => 'Caryville', 'state_id' => 43],
                ['name' => 'Duff', 'state_id' => 43],
                ['name' => 'Jacksboro', 'state_id' => 43],
                ['name' => 'Jellico', 'state_id' => 43],
                ['name' => 'La Follette', 'state_id' => 43],
                ['name' => 'Newcomb', 'state_id' => 43],
                ['name' => 'Pioneer', 'state_id' => 43],
                ['name' => 'Auburntown', 'state_id' => 43],
                ['name' => 'Bradyville', 'state_id' => 43],
                ['name' => 'Readyville', 'state_id' => 43],
                ['name' => 'Woodbury', 'state_id' => 43],
                ['name' => 'Mc Kenzie', 'state_id' => 43],
                ['name' => 'Atwood', 'state_id' => 43],
                ['name' => 'Mc Lemoresville', 'state_id' => 43],
                ['name' => 'Trezevant', 'state_id' => 43],
                ['name' => 'Bruceton', 'state_id' => 43],
                ['name' => 'Buena Vista', 'state_id' => 43],
                ['name' => 'Cedar Grove', 'state_id' => 43],
                ['name' => 'Clarksburg', 'state_id' => 43],
                ['name' => 'Hollow Rock', 'state_id' => 43],
                ['name' => 'Huntingdon', 'state_id' => 43],
                ['name' => 'Lavinia', 'state_id' => 43],
                ['name' => 'Westport', 'state_id' => 43],
                ['name' => 'Yuma', 'state_id' => 43],
                ['name' => 'Elizabethton', 'state_id' => 43],
                ['name' => 'Hampton', 'state_id' => 43],
                ['name' => 'Milligan College', 'state_id' => 43],
                ['name' => 'Roan Mountain', 'state_id' => 43],
                ['name' => 'Watauga', 'state_id' => 43],
                ['name' => 'Ashland City', 'state_id' => 43],
                ['name' => 'Chapmansboro', 'state_id' => 43],
                ['name' => 'Kingston Springs', 'state_id' => 43],
                ['name' => 'Pegram', 'state_id' => 43],
                ['name' => 'Pleasant View', 'state_id' => 43],
                ['name' => 'Enville', 'state_id' => 43],
                ['name' => 'Henderson', 'state_id' => 43],
                ['name' => 'Jacks Creek', 'state_id' => 43],
                ['name' => 'Luray', 'state_id' => 43],
                ['name' => 'Arthur', 'state_id' => 43],
                ['name' => 'Clairfield', 'state_id' => 43],
                ['name' => 'Cumberland Gap', 'state_id' => 43],
                ['name' => 'Eagan', 'state_id' => 43],
                ['name' => 'Harrogate', 'state_id' => 43],
                ['name' => 'Lone Mountain', 'state_id' => 43],
                ['name' => 'New Tazewell', 'state_id' => 43],
                ['name' => 'Pruden', 'state_id' => 43],
                ['name' => 'Shawanee', 'state_id' => 43],
                ['name' => 'Speedwell', 'state_id' => 43],
                ['name' => 'Tazewell', 'state_id' => 43],
                ['name' => 'Celina', 'state_id' => 43],
                ['name' => 'Moss', 'state_id' => 43],
                ['name' => 'Bybee', 'state_id' => 43],
                ['name' => 'Cosby', 'state_id' => 43],
                ['name' => 'Del Rio', 'state_id' => 43],
                ['name' => 'Hartford', 'state_id' => 43],
                ['name' => 'Newport', 'state_id' => 43],
                ['name' => 'Parrottsville', 'state_id' => 43],
                ['name' => 'Beechgrove', 'state_id' => 43],
                ['name' => 'Hillsboro', 'state_id' => 43],
                ['name' => 'Manchester', 'state_id' => 43],
                ['name' => 'Summitville', 'state_id' => 43],
                ['name' => 'Tullahoma', 'state_id' => 43],
                ['name' => 'Arnold Afb', 'state_id' => 43],
                ['name' => 'Alamo', 'state_id' => 43],
                ['name' => 'Bells', 'state_id' => 43],
                ['name' => 'Crockett Mills', 'state_id' => 43],
                ['name' => 'Friendship', 'state_id' => 43],
                ['name' => 'Maury City', 'state_id' => 43],
                ['name' => 'Fruitvale', 'state_id' => 43],
                ['name' => 'Gadsden', 'state_id' => 43],
                ['name' => 'Crab Orchard', 'state_id' => 43],
                ['name' => 'Crossville', 'state_id' => 43],
                ['name' => 'Pleasant Hill', 'state_id' => 43],
                ['name' => 'Antioch', 'state_id' => 43],
                ['name' => 'Goodlettsville', 'state_id' => 43],
                ['name' => 'Hermitage', 'state_id' => 43],
                ['name' => 'Joelton', 'state_id' => 43],
                ['name' => 'Madison', 'state_id' => 43],
                ['name' => 'Old Hickory', 'state_id' => 43],
                ['name' => 'Whites Creek', 'state_id' => 43],
                ['name' => 'Nashville', 'state_id' => 43],
                ['name' => 'Bath Springs', 'state_id' => 43],
                ['name' => 'Decaturville', 'state_id' => 43],
                ['name' => 'Parsons', 'state_id' => 43],
                ['name' => 'Scotts Hill', 'state_id' => 43],
                ['name' => 'Sugar Tree', 'state_id' => 43],
                ['name' => 'Alexandria', 'state_id' => 43],
                ['name' => 'Dowelltown', 'state_id' => 43],
                ['name' => 'Liberty', 'state_id' => 43],
                ['name' => 'Smithville', 'state_id' => 43],
                ['name' => 'Burns', 'state_id' => 43],
                ['name' => 'Charlotte', 'state_id' => 43],
                ['name' => 'Cumberland Furnace', 'state_id' => 43],
                ['name' => 'Dickson', 'state_id' => 43],
                ['name' => 'Slayden', 'state_id' => 43],
                ['name' => 'Vanleer', 'state_id' => 43],
                ['name' => 'White Bluff', 'state_id' => 43],
                ['name' => 'Bogota', 'state_id' => 43],
                ['name' => 'Dyersburg', 'state_id' => 43],
                ['name' => 'Finley', 'state_id' => 43],
                ['name' => 'Lenox', 'state_id' => 43],
                ['name' => 'Newbern', 'state_id' => 43],
                ['name' => 'Tigrett', 'state_id' => 43],
                ['name' => 'Trimble', 'state_id' => 43],
                ['name' => 'Braden', 'state_id' => 43],
                ['name' => 'Gallaway', 'state_id' => 43],
                ['name' => 'Laconia', 'state_id' => 43],
                ['name' => 'La Grange', 'state_id' => 43],
                ['name' => 'Macon', 'state_id' => 43],
                ['name' => 'Moscow', 'state_id' => 43],
                ['name' => 'Oakland', 'state_id' => 43],
                ['name' => 'Rossville', 'state_id' => 43],
                ['name' => 'Somerville', 'state_id' => 43],
                ['name' => 'Williston', 'state_id' => 43],
                ['name' => 'Allardt', 'state_id' => 43],
                ['name' => 'Clarkrange', 'state_id' => 43],
                ['name' => 'Jamestown', 'state_id' => 43],
                ['name' => 'Grimsley', 'state_id' => 43],
                ['name' => 'Pall Mall', 'state_id' => 43],
                ['name' => 'Wilder', 'state_id' => 43],
                ['name' => 'Belvidere', 'state_id' => 43],
                ['name' => 'Cowan', 'state_id' => 43],
                ['name' => 'Decherd', 'state_id' => 43],
                ['name' => 'Estill Springs', 'state_id' => 43],
                ['name' => 'Huntland', 'state_id' => 43],
                ['name' => 'Sewanee', 'state_id' => 43],
                ['name' => 'Sherwood', 'state_id' => 43],
                ['name' => 'Winchester', 'state_id' => 43],
                ['name' => 'Kenton', 'state_id' => 43],
                ['name' => 'Bradford', 'state_id' => 43],
                ['name' => 'Dyer', 'state_id' => 43],
                ['name' => 'Eaton', 'state_id' => 43],
                ['name' => 'Gibson', 'state_id' => 43],
                ['name' => 'Humboldt', 'state_id' => 43],
                ['name' => 'Idlewild', 'state_id' => 43],
                ['name' => 'Medina', 'state_id' => 43],
                ['name' => 'Milan', 'state_id' => 43],
                ['name' => 'Rutherford', 'state_id' => 43],
                ['name' => 'Trenton', 'state_id' => 43],
                ['name' => 'Yorkville', 'state_id' => 43],
                ['name' => 'Ardmore', 'state_id' => 43],
                ['name' => 'Elkton', 'state_id' => 43],
                ['name' => 'Frankewing', 'state_id' => 43],
                ['name' => 'Goodspring', 'state_id' => 43],
                ['name' => 'Lynnville', 'state_id' => 43],
                ['name' => 'Minor Hill', 'state_id' => 43],
                ['name' => 'Prospect', 'state_id' => 43],
                ['name' => 'Pulaski', 'state_id' => 43],
                ['name' => 'Bean Station', 'state_id' => 43],
                ['name' => 'Blaine', 'state_id' => 43],
                ['name' => 'Powder Springs', 'state_id' => 43],
                ['name' => 'Rutledge', 'state_id' => 43],
                ['name' => 'Thorn Hill', 'state_id' => 43],
                ['name' => 'Washburn', 'state_id' => 43],
                ['name' => 'Afton', 'state_id' => 43],
                ['name' => 'Chuckey', 'state_id' => 43],
                ['name' => 'Greeneville', 'state_id' => 43],
                ['name' => 'Midway', 'state_id' => 43],
                ['name' => 'Mohawk', 'state_id' => 43],
                ['name' => 'Mosheim', 'state_id' => 43],
                ['name' => 'Altamont', 'state_id' => 43],
                ['name' => 'Beersheba Springs', 'state_id' => 43],
                ['name' => 'Coalmont', 'state_id' => 43],
                ['name' => 'Gruetli Laager', 'state_id' => 43],
                ['name' => 'Monteagle', 'state_id' => 43],
                ['name' => 'Palmer', 'state_id' => 43],
                ['name' => 'Pelham', 'state_id' => 43],
                ['name' => 'Tracy City', 'state_id' => 43],
                ['name' => 'Lowland', 'state_id' => 43],
                ['name' => 'Morristown', 'state_id' => 43],
                ['name' => 'Russellville', 'state_id' => 43],
                ['name' => 'Talbott', 'state_id' => 43],
                ['name' => 'Whitesburg', 'state_id' => 43],
                ['name' => 'Apison', 'state_id' => 43],
                ['name' => 'Bakewell', 'state_id' => 43],
                ['name' => 'Birchwood', 'state_id' => 43],
                ['name' => 'Collegedale', 'state_id' => 43],
                ['name' => 'Harrison', 'state_id' => 43],
                ['name' => 'Hixson', 'state_id' => 43],
                ['name' => 'Lookout Mountain', 'state_id' => 43],
                ['name' => 'Lupton City', 'state_id' => 43],
                ['name' => 'Ooltewah', 'state_id' => 43],
                ['name' => 'Sale Creek', 'state_id' => 43],
                ['name' => 'Signal Mountain', 'state_id' => 43],
                ['name' => 'Soddy Daisy', 'state_id' => 43],
                ['name' => 'Chattanooga', 'state_id' => 43],
                ['name' => 'Kyles Ford', 'state_id' => 43],
                ['name' => 'Sneedville', 'state_id' => 43],
                ['name' => 'Bolivar', 'state_id' => 43],
                ['name' => 'Grand Junction', 'state_id' => 43],
                ['name' => 'Hickory Valley', 'state_id' => 43],
                ['name' => 'Hornsby', 'state_id' => 43],
                ['name' => 'Middleton', 'state_id' => 43],
                ['name' => 'Pocahontas', 'state_id' => 43],
                ['name' => 'Saulsbury', 'state_id' => 43],
                ['name' => 'Whiteville', 'state_id' => 43],
                ['name' => 'Silerton', 'state_id' => 43],
                ['name' => 'Toone', 'state_id' => 43],
                ['name' => 'Counce', 'state_id' => 43],
                ['name' => 'Crump', 'state_id' => 43],
                ['name' => 'Morris Chapel', 'state_id' => 43],
                ['name' => 'Pickwick Dam', 'state_id' => 43],
                ['name' => 'Saltillo', 'state_id' => 43],
                ['name' => 'Savannah', 'state_id' => 43],
                ['name' => 'Shiloh', 'state_id' => 43],
                ['name' => 'Olivehill', 'state_id' => 43],
                ['name' => 'Church Hill', 'state_id' => 43],
                ['name' => 'Mount Carmel', 'state_id' => 43],
                ['name' => 'Bulls Gap', 'state_id' => 43],
                ['name' => 'Eidson', 'state_id' => 43],
                ['name' => 'Mooresburg', 'state_id' => 43],
                ['name' => 'Rogersville', 'state_id' => 43],
                ['name' => 'Surgoinsville', 'state_id' => 43],
                ['name' => 'Brownsville', 'state_id' => 43],
                ['name' => 'Stanton', 'state_id' => 43],
                ['name' => 'Darden', 'state_id' => 43],
                ['name' => 'Huron', 'state_id' => 43],
                ['name' => 'Lexington', 'state_id' => 43],
                ['name' => 'Reagan', 'state_id' => 43],
                ['name' => 'Sardis', 'state_id' => 43],
                ['name' => 'Wildersville', 'state_id' => 43],
                ['name' => 'Buchanan', 'state_id' => 43],
                ['name' => 'Como', 'state_id' => 43],
                ['name' => 'Cottage Grove', 'state_id' => 43],
                ['name' => 'Henry', 'state_id' => 43],
                ['name' => 'Mansfield', 'state_id' => 43],
                ['name' => 'Paris', 'state_id' => 43],
                ['name' => 'Puryear', 'state_id' => 43],
                ['name' => 'Springville', 'state_id' => 43],
                ['name' => 'Bon Aqua', 'state_id' => 43],
                ['name' => 'Centerville', 'state_id' => 43],
                ['name' => 'Lyles', 'state_id' => 43],
                ['name' => 'Nunnelly', 'state_id' => 43],
                ['name' => 'Only', 'state_id' => 43],
                ['name' => 'Duck River', 'state_id' => 43],
                ['name' => 'Primm Springs', 'state_id' => 43],
                ['name' => 'Erin', 'state_id' => 43],
                ['name' => 'Stewart', 'state_id' => 43],
                ['name' => 'Tennessee Ridge', 'state_id' => 43],
                ['name' => 'Hurricane Mills', 'state_id' => 43],
                ['name' => 'Mc Ewen', 'state_id' => 43],
                ['name' => 'New Johnsonville', 'state_id' => 43],
                ['name' => 'Waverly', 'state_id' => 43],
                ['name' => 'Gainesboro', 'state_id' => 43],
                ['name' => 'Granville', 'state_id' => 43],
                ['name' => 'Whitleyville', 'state_id' => 43],
                ['name' => 'Dandridge', 'state_id' => 43],
                ['name' => 'Jefferson City', 'state_id' => 43],
                ['name' => 'New Market', 'state_id' => 43],
                ['name' => 'Strawberry Plains', 'state_id' => 43],
                ['name' => 'White Pine', 'state_id' => 43],
                ['name' => 'Butler', 'state_id' => 43],
                ['name' => 'Laurel Bloomery', 'state_id' => 43],
                ['name' => 'Mountain City', 'state_id' => 43],
                ['name' => 'Shady Valley', 'state_id' => 43],
                ['name' => 'Trade', 'state_id' => 43],
                ['name' => 'Corryton', 'state_id' => 43],
                ['name' => 'Heiskell', 'state_id' => 43],
                ['name' => 'Mascot', 'state_id' => 43],
                ['name' => 'Powell', 'state_id' => 43],
                ['name' => 'Knoxville', 'state_id' => 43],
                ['name' => 'Wynnburg', 'state_id' => 43],
                ['name' => 'Tiptonville', 'state_id' => 43],
                ['name' => 'Ridgely', 'state_id' => 43],
                ['name' => 'Gates', 'state_id' => 43],
                ['name' => 'Halls', 'state_id' => 43],
                ['name' => 'Henning', 'state_id' => 43],
                ['name' => 'Ripley', 'state_id' => 43],
                ['name' => 'Ethridge', 'state_id' => 43],
                ['name' => 'Five Points', 'state_id' => 43],
                ['name' => 'Iron City', 'state_id' => 43],
                ['name' => 'Lawrenceburg', 'state_id' => 43],
                ['name' => 'Leoma', 'state_id' => 43],
                ['name' => 'Loretto', 'state_id' => 43],
                ['name' => 'Saint Joseph', 'state_id' => 43],
                ['name' => 'Summertown', 'state_id' => 43],
                ['name' => 'Westpoint', 'state_id' => 43],
                ['name' => 'Hohenwald', 'state_id' => 43],
                ['name' => 'Petersburg', 'state_id' => 43],
                ['name' => 'Elora', 'state_id' => 43],
                ['name' => 'Fayetteville', 'state_id' => 43],
                ['name' => 'Flintville', 'state_id' => 43],
                ['name' => 'Kelso', 'state_id' => 43],
                ['name' => 'Mulberry', 'state_id' => 43],
                ['name' => 'Dellrose', 'state_id' => 43],
                ['name' => 'Taft', 'state_id' => 43],
                ['name' => 'Greenback', 'state_id' => 43],
                ['name' => 'Lenoir City', 'state_id' => 43],
                ['name' => 'Loudon', 'state_id' => 43],
                ['name' => 'Philadelphia', 'state_id' => 43],
                ['name' => 'Athens', 'state_id' => 43],
                ['name' => 'Calhoun', 'state_id' => 43],
                ['name' => 'Englewood', 'state_id' => 43],
                ['name' => 'Etowah', 'state_id' => 43],
                ['name' => 'Riceville', 'state_id' => 43],
                ['name' => 'Niota', 'state_id' => 43],
                ['name' => 'Adamsville', 'state_id' => 43],
                ['name' => 'Bethel Springs', 'state_id' => 43],
                ['name' => 'Finger', 'state_id' => 43],
                ['name' => 'Guys', 'state_id' => 43],
                ['name' => 'Michie', 'state_id' => 43],
                ['name' => 'Milledgeville', 'state_id' => 43],
                ['name' => 'Ramer', 'state_id' => 43],
                ['name' => 'Selmer', 'state_id' => 43],
                ['name' => 'Stantonville', 'state_id' => 43],
                ['name' => 'Chewalla', 'state_id' => 43],
                ['name' => 'Lafayette', 'state_id' => 43],
                ['name' => 'Red Boiling Springs', 'state_id' => 43],
                ['name' => 'Jackson', 'state_id' => 43],
                ['name' => 'Beech Bluff', 'state_id' => 43],
                ['name' => 'Medon', 'state_id' => 43],
                ['name' => 'Oakfield', 'state_id' => 43],
                ['name' => 'Pinson', 'state_id' => 43],
                ['name' => 'Spring Creek', 'state_id' => 43],
                ['name' => 'Denmark', 'state_id' => 43],
                ['name' => 'Mercer', 'state_id' => 43],
                ['name' => 'Guild', 'state_id' => 43],
                ['name' => 'Jasper', 'state_id' => 43],
                ['name' => 'Sequatchie', 'state_id' => 43],
                ['name' => 'South Pittsburg', 'state_id' => 43],
                ['name' => 'Whiteside', 'state_id' => 43],
                ['name' => 'Whitwell', 'state_id' => 43],
                ['name' => 'Belfast', 'state_id' => 43],
                ['name' => 'Chapel Hill', 'state_id' => 43],
                ['name' => 'Cornersville', 'state_id' => 43],
                ['name' => 'Lewisburg', 'state_id' => 43],
                ['name' => 'Spring Hill', 'state_id' => 43],
                ['name' => 'Columbia', 'state_id' => 43],
                ['name' => 'Culleoka', 'state_id' => 43],
                ['name' => 'Hampshire', 'state_id' => 43],
                ['name' => 'Mount Pleasant', 'state_id' => 43],
                ['name' => 'Santa Fe', 'state_id' => 43],
                ['name' => 'Williamsport', 'state_id' => 43],
                ['name' => 'Decatur', 'state_id' => 43],
                ['name' => 'Georgetown', 'state_id' => 43],
                ['name' => 'Ten Mile', 'state_id' => 43],
                ['name' => 'Cokercreek', 'state_id' => 43],
                ['name' => 'Madisonville', 'state_id' => 43],
                ['name' => 'Tellico Plains', 'state_id' => 43],
                ['name' => 'Sweetwater', 'state_id' => 43],
                ['name' => 'Vonore', 'state_id' => 43],
                ['name' => 'Clarksville', 'state_id' => 43],
                ['name' => 'Cunningham', 'state_id' => 43],
                ['name' => 'Palmyra', 'state_id' => 43],
                ['name' => 'Southside', 'state_id' => 43],
                ['name' => 'Woodlawn', 'state_id' => 43],
                ['name' => 'Lynchburg', 'state_id' => 43],
                ['name' => 'Coalfield', 'state_id' => 43],
                ['name' => 'Deer Lodge', 'state_id' => 43],
                ['name' => 'Rugby', 'state_id' => 43],
                ['name' => 'Lancing', 'state_id' => 43],
                ['name' => 'Oakdale', 'state_id' => 43],
                ['name' => 'Oliver Springs', 'state_id' => 43],
                ['name' => 'Petros', 'state_id' => 43],
                ['name' => 'Sunbright', 'state_id' => 43],
                ['name' => 'Wartburg', 'state_id' => 43],
                ['name' => 'Hornbeak', 'state_id' => 43],
                ['name' => 'Obion', 'state_id' => 43],
                ['name' => 'Rives', 'state_id' => 43],
                ['name' => 'Samburg', 'state_id' => 43],
                ['name' => 'South Fulton', 'state_id' => 43],
                ['name' => 'Troy', 'state_id' => 43],
                ['name' => 'Union City', 'state_id' => 43],
                ['name' => 'Woodland Mills', 'state_id' => 43],
                ['name' => 'Allons', 'state_id' => 43],
                ['name' => 'Allred', 'state_id' => 43],
                ['name' => 'Alpine', 'state_id' => 43],
                ['name' => 'Crawford', 'state_id' => 43],
                ['name' => 'Hilham', 'state_id' => 43],
                ['name' => 'Livingston', 'state_id' => 43],
                ['name' => 'Monroe', 'state_id' => 43],
                ['name' => 'Rickman', 'state_id' => 43],
                ['name' => 'Linden', 'state_id' => 43],
                ['name' => 'Lobelville', 'state_id' => 43],
                ['name' => 'Byrdstown', 'state_id' => 43],
                ['name' => 'Benton', 'state_id' => 43],
                ['name' => 'Conasauga', 'state_id' => 43],
                ['name' => 'Copperhill', 'state_id' => 43],
                ['name' => 'Delano', 'state_id' => 43],
                ['name' => 'Ducktown', 'state_id' => 43],
                ['name' => 'Farner', 'state_id' => 43],
                ['name' => 'Ocoee', 'state_id' => 43],
                ['name' => 'Old Fort', 'state_id' => 43],
                ['name' => 'Reliance', 'state_id' => 43],
                ['name' => 'Turtletown', 'state_id' => 43],
                ['name' => 'Cookeville', 'state_id' => 43],
                ['name' => 'Baxter', 'state_id' => 43],
                ['name' => 'Bloomington Springs', 'state_id' => 43],
                ['name' => 'Buffalo Valley', 'state_id' => 43],
                ['name' => 'Monterey', 'state_id' => 43],
                ['name' => 'Silver Point', 'state_id' => 43],
                ['name' => 'Dayton', 'state_id' => 43],
                ['name' => 'Evensville', 'state_id' => 43],
                ['name' => 'Grandview', 'state_id' => 43],
                ['name' => 'Graysville', 'state_id' => 43],
                ['name' => 'Spring City', 'state_id' => 43],
                ['name' => 'Harriman', 'state_id' => 43],
                ['name' => 'Kingston', 'state_id' => 43],
                ['name' => 'Rockwood', 'state_id' => 43],
                ['name' => 'Adams', 'state_id' => 43],
                ['name' => 'Cedar Hill', 'state_id' => 43],
                ['name' => 'Cross Plains', 'state_id' => 43],
                ['name' => 'Greenbrier', 'state_id' => 43],
                ['name' => 'Orlinda', 'state_id' => 43],
                ['name' => 'Ridgetop', 'state_id' => 43],
                ['name' => 'Springfield', 'state_id' => 43],
                ['name' => 'White House', 'state_id' => 43],
                ['name' => 'Christiana', 'state_id' => 43],
                ['name' => 'Eagleville', 'state_id' => 43],
                ['name' => 'Fosterville', 'state_id' => 43],
                ['name' => 'Lascassas', 'state_id' => 43],
                ['name' => 'La Vergne', 'state_id' => 43],
                ['name' => 'Milton', 'state_id' => 43],
                ['name' => 'Murfreesboro', 'state_id' => 43],
                ['name' => 'Rockvale', 'state_id' => 43],
                ['name' => 'Smyrna', 'state_id' => 43],
                ['name' => 'Elgin', 'state_id' => 43],
                ['name' => 'Helenwood', 'state_id' => 43],
                ['name' => 'Huntsville', 'state_id' => 43],
                ['name' => 'Oneida', 'state_id' => 43],
                ['name' => 'Robbins', 'state_id' => 43],
                ['name' => 'Winfield', 'state_id' => 43],
                ['name' => 'Dunlap', 'state_id' => 43],
                ['name' => 'Gatlinburg', 'state_id' => 43],
                ['name' => 'Kodak', 'state_id' => 43],
                ['name' => 'Sevierville', 'state_id' => 43],
                ['name' => 'Pigeon Forge', 'state_id' => 43],
                ['name' => 'Seymour', 'state_id' => 43],
                ['name' => 'Memphis', 'state_id' => 43],
                ['name' => 'Arlington', 'state_id' => 43],
                ['name' => 'Brunswick', 'state_id' => 43],
                ['name' => 'Cordova', 'state_id' => 43],
                ['name' => 'Collierville', 'state_id' => 43],
                ['name' => 'Eads', 'state_id' => 43],
                ['name' => 'Ellendale', 'state_id' => 43],
                ['name' => 'Millington', 'state_id' => 43],
                ['name' => 'Germantown', 'state_id' => 43],
                ['name' => 'Carthage', 'state_id' => 43],
                ['name' => 'Dixon Springs', 'state_id' => 43],
                ['name' => 'Pleasant Shade', 'state_id' => 43],
                ['name' => 'Riddleton', 'state_id' => 43],
                ['name' => 'Brush Creek', 'state_id' => 43],
                ['name' => 'Chestnut Mound', 'state_id' => 43],
                ['name' => 'Elmwood', 'state_id' => 43],
                ['name' => 'Gordonsville', 'state_id' => 43],
                ['name' => 'Hickman', 'state_id' => 43],
                ['name' => 'Lancaster', 'state_id' => 43],
                ['name' => 'Big Rock', 'state_id' => 43],
                ['name' => 'Bumpus Mills', 'state_id' => 43],
                ['name' => 'Cumberland City', 'state_id' => 43],
                ['name' => 'Dover', 'state_id' => 43],
                ['name' => 'Indian Mound', 'state_id' => 43],
                ['name' => 'Blountville', 'state_id' => 43],
                ['name' => 'Bluff City', 'state_id' => 43],
                ['name' => 'Bristol', 'state_id' => 43],
                ['name' => 'Kingsport', 'state_id' => 43],
                ['name' => 'Piney Flats', 'state_id' => 43],
                ['name' => 'Bethpage', 'state_id' => 43],
                ['name' => 'Castalian Springs', 'state_id' => 43],
                ['name' => 'Cottontown', 'state_id' => 43],
                ['name' => 'Gallatin', 'state_id' => 43],
                ['name' => 'Hendersonville', 'state_id' => 43],
                ['name' => 'Mitchellville', 'state_id' => 43],
                ['name' => 'Portland', 'state_id' => 43],
                ['name' => 'Westmoreland', 'state_id' => 43],
                ['name' => 'Atoka', 'state_id' => 43],
                ['name' => 'Brighton', 'state_id' => 43],
                ['name' => 'Burlison', 'state_id' => 43],
                ['name' => 'Covington', 'state_id' => 43],
                ['name' => 'Drummonds', 'state_id' => 43],
                ['name' => 'Mason', 'state_id' => 43],
                ['name' => 'Munford', 'state_id' => 43],
                ['name' => 'Tipton', 'state_id' => 43],
                ['name' => 'Hartsville', 'state_id' => 43],
                ['name' => 'Erwin', 'state_id' => 43],
                ['name' => 'Flag Pond', 'state_id' => 43],
                ['name' => 'Unicoi', 'state_id' => 43],
                ['name' => 'Luttrell', 'state_id' => 43],
                ['name' => 'Maynardville', 'state_id' => 43],
                ['name' => 'Sharps Chapel', 'state_id' => 43],
                ['name' => 'Spencer', 'state_id' => 43],
                ['name' => 'Mcminnville', 'state_id' => 43],
                ['name' => 'Morrison', 'state_id' => 43],
                ['name' => 'Smartt', 'state_id' => 43],
                ['name' => 'Viola', 'state_id' => 43],
                ['name' => 'Campaign', 'state_id' => 43],
                ['name' => 'Rock Island', 'state_id' => 43],
                ['name' => 'Johnson City', 'state_id' => 43],
                ['name' => 'Fall Branch', 'state_id' => 43],
                ['name' => 'Jonesborough', 'state_id' => 43],
                ['name' => 'Limestone', 'state_id' => 43],
                ['name' => 'Mountain Home', 'state_id' => 43],
                ['name' => 'Telford', 'state_id' => 43],
                ['name' => 'Clifton', 'state_id' => 43],
                ['name' => 'Collinwood', 'state_id' => 43],
                ['name' => 'Cypress Inn', 'state_id' => 43],
                ['name' => 'Lutts', 'state_id' => 43],
                ['name' => 'Waynesboro', 'state_id' => 43],
                ['name' => 'Dresden', 'state_id' => 43],
                ['name' => 'Dukedom', 'state_id' => 43],
                ['name' => 'Gleason', 'state_id' => 43],
                ['name' => 'Greenfield', 'state_id' => 43],
                ['name' => 'Martin', 'state_id' => 43],
                ['name' => 'Palmersville', 'state_id' => 43],
                ['name' => 'Sharon', 'state_id' => 43],
                ['name' => 'Doyle', 'state_id' => 43],
                ['name' => 'Quebeck', 'state_id' => 43],
                ['name' => 'Sparta', 'state_id' => 43],
                ['name' => 'Walling', 'state_id' => 43],
                ['name' => 'Arrington', 'state_id' => 43],
                ['name' => 'Brentwood', 'state_id' => 43],
                ['name' => 'College Grove', 'state_id' => 43],
                ['name' => 'Fairview', 'state_id' => 43],
                ['name' => 'Franklin', 'state_id' => 43],
                ['name' => 'Nolensville', 'state_id' => 43],
                ['name' => 'Thompsons Station', 'state_id' => 43],
                ['name' => 'Gladeville', 'state_id' => 43],
                ['name' => 'Lebanon', 'state_id' => 43],
                ['name' => 'Mount Juliet', 'state_id' => 43],
                ['name' => 'Norene', 'state_id' => 43],
                ['name' => 'Watertown', 'state_id' => 43]
            ]);
        }
    }
}
