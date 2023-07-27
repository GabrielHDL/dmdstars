<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state47TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Create Cities for the state of VT - Vermont.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                [  'name' => 'Bristol', 'state_id' => 47],
                [  'name' => 'Ferrisburgh', 'state_id' => 47],
                [  'name' => 'Monkton', 'state_id' => 47],
                [  'name' => 'New Haven', 'state_id' => 47],
                [  'name' => 'North Ferrisburgh', 'state_id' => 47],
                [  'name' => 'Starksboro', 'state_id' => 47],
                [  'name' => 'Vergennes', 'state_id' => 47],
                [  'name' => 'Roxbury', 'state_id' => 47],
                [  'name' => 'Bridport', 'state_id' => 47],
                [  'name' => 'East Middlebury', 'state_id' => 47],
                [  'name' => 'Granville', 'state_id' => 47],
                [  'name' => 'Hancock', 'state_id' => 47],
                [  'name' => 'Middlebury', 'state_id' => 47],
                [  'name' => 'Orwell', 'state_id' => 47],
                [  'name' => 'Ripton', 'state_id' => 47],
                [  'name' => 'Salisbury', 'state_id' => 47],
                [  'name' => 'Shoreham', 'state_id' => 47],
                [  'name' => 'Whiting', 'state_id' => 47],
                [  'name' => 'Peru', 'state_id' => 47],
                [  'name' => 'Bennington', 'state_id' => 47],
                [  'name' => 'Arlington', 'state_id' => 47],
                [  'name' => 'Dorset', 'state_id' => 47],
                [  'name' => 'East Arlington', 'state_id' => 47],
                [  'name' => 'East Dorset', 'state_id' => 47],
                [  'name' => 'Manchester', 'state_id' => 47],
                [  'name' => 'Manchester Center', 'state_id' => 47],
                [  'name' => 'North Bennington', 'state_id' => 47],
                [  'name' => 'North Pownal', 'state_id' => 47],
                [  'name' => 'Pownal', 'state_id' => 47],
                [  'name' => 'Shaftsbury', 'state_id' => 47],
                [  'name' => 'Bondville', 'state_id' => 47],
                [  'name' => 'Readsboro', 'state_id' => 47],
                [  'name' => 'Stamford', 'state_id' => 47],
                [  'name' => 'Rupert', 'state_id' => 47],
                [  'name' => 'West Rupert', 'state_id' => 47],
                [  'name' => 'East Ryegate', 'state_id' => 47],
                [  'name' => 'Groton', 'state_id' => 47],
                [  'name' => 'Mc Indoe Falls', 'state_id' => 47],
                [  'name' => 'South Ryegate', 'state_id' => 47],
                [  'name' => 'Saint Johnsbury', 'state_id' => 47],
                [  'name' => 'Barnet', 'state_id' => 47],
                [  'name' => 'Danville', 'state_id' => 47],
                [  'name' => 'East Burke', 'state_id' => 47],
                [  'name' => 'East Hardwick', 'state_id' => 47],
                [  'name' => 'East Saint Johnsbury', 'state_id' => 47],
                [  'name' => 'Hardwick', 'state_id' => 47],
                [  'name' => 'Lower Waterford', 'state_id' => 47],
                [  'name' => 'Lyndon', 'state_id' => 47],
                [  'name' => 'Lyndon Center', 'state_id' => 47],
                [  'name' => 'Lyndonville', 'state_id' => 47],
                [  'name' => 'Passumpsic', 'state_id' => 47],
                [  'name' => 'Peacham', 'state_id' => 47],
                [  'name' => 'Saint Johnsbury Center', 'state_id' => 47],
                [  'name' => 'Sheffield', 'state_id' => 47],
                [  'name' => 'Sutton', 'state_id' => 47],
                [  'name' => 'West Burke', 'state_id' => 47],
                [  'name' => 'West Danville', 'state_id' => 47],
                [  'name' => 'Burlington', 'state_id' => 47],
                [  'name' => 'South Burlington', 'state_id' => 47],
                [  'name' => 'Winooski', 'state_id' => 47],
                [  'name' => 'Colchester', 'state_id' => 47],
                [  'name' => 'Charlotte', 'state_id' => 47],
                [  'name' => 'Essex', 'state_id' => 47],
                [  'name' => 'Essex Junction', 'state_id' => 47],
                [  'name' => 'Hinesburg', 'state_id' => 47],
                [  'name' => 'Huntington', 'state_id' => 47],
                [  'name' => 'Jericho', 'state_id' => 47],
                [  'name' => 'Jonesville', 'state_id' => 47],
                [  'name' => 'Milton', 'state_id' => 47],
                [  'name' => 'Richmond', 'state_id' => 47],
                [  'name' => 'Shelburne', 'state_id' => 47],
                [  'name' => 'Underhill', 'state_id' => 47],
                [  'name' => 'Underhill Center', 'state_id' => 47],
                [  'name' => 'Westford', 'state_id' => 47],
                [  'name' => 'Williston', 'state_id' => 47],
                [  'name' => 'Concord', 'state_id' => 47],
                [  'name' => 'East Haven', 'state_id' => 47],
                [  'name' => 'Granby', 'state_id' => 47],
                [  'name' => 'Island Pond', 'state_id' => 47],
                [  'name' => 'North Concord', 'state_id' => 47],
                [  'name' => 'Averill', 'state_id' => 47],
                [  'name' => 'Beecher Falls', 'state_id' => 47],
                [  'name' => 'Canaan', 'state_id' => 47],
                [  'name' => 'Gilman', 'state_id' => 47],
                [  'name' => 'Guildhall', 'state_id' => 47],
                [  'name' => 'Lunenburg', 'state_id' => 47],
                [  'name' => 'Norton', 'state_id' => 47],
                [  'name' => 'Bakersfield', 'state_id' => 47],
                [  'name' => 'East Berkshire', 'state_id' => 47],
                [  'name' => 'East Fairfield', 'state_id' => 47],
                [  'name' => 'Enosburg Falls', 'state_id' => 47],
                [  'name' => 'Fairfax', 'state_id' => 47],
                [  'name' => 'Fairfield', 'state_id' => 47],
                [  'name' => 'Franklin', 'state_id' => 47],
                [  'name' => 'Highgate Center', 'state_id' => 47],
                [  'name' => 'Highgate Springs', 'state_id' => 47],
                [  'name' => 'Montgomery', 'state_id' => 47],
                [  'name' => 'Montgomery Center', 'state_id' => 47],
                [  'name' => 'Richford', 'state_id' => 47],
                [  'name' => 'Saint Albans', 'state_id' => 47],
                [  'name' => 'Saint Albans Bay', 'state_id' => 47],
                [  'name' => 'Sheldon', 'state_id' => 47],
                [  'name' => 'Sheldon Springs', 'state_id' => 47],
                [  'name' => 'Swanton', 'state_id' => 47],
                [  'name' => 'Alburgh', 'state_id' => 47],
                [  'name' => 'Grand Isle', 'state_id' => 47],
                [  'name' => 'Isle La Motte', 'state_id' => 47],
                [  'name' => 'North Hero', 'state_id' => 47],
                [  'name' => 'South Hero', 'state_id' => 47],
                [  'name' => 'Belvidere Center', 'state_id' => 47],
                [  'name' => 'Cambridge', 'state_id' => 47],
                [  'name' => 'Jeffersonville', 'state_id' => 47],
                [  'name' => 'Waterville', 'state_id' => 47],
                [  'name' => 'Eden', 'state_id' => 47],
                [  'name' => 'Eden Mills', 'state_id' => 47],
                [  'name' => 'Hyde Park', 'state_id' => 47],
                [  'name' => 'Johnson', 'state_id' => 47],
                [  'name' => 'Lake Elmore', 'state_id' => 47],
                [  'name' => 'Morrisville', 'state_id' => 47],
                [  'name' => 'Moscow', 'state_id' => 47],
                [  'name' => 'North Hyde Park', 'state_id' => 47],
                [  'name' => 'Stowe', 'state_id' => 47],
                [  'name' => 'Wolcott', 'state_id' => 47],
                [  'name' => 'Bradford', 'state_id' => 47],
                [  'name' => 'Brookfield', 'state_id' => 47],
                [  'name' => 'Chelsea', 'state_id' => 47],
                [  'name' => 'Corinth', 'state_id' => 47],
                [  'name' => 'East Corinth', 'state_id' => 47],
                [  'name' => 'East Randolph', 'state_id' => 47],
                [  'name' => 'East Thetford', 'state_id' => 47],
                [  'name' => 'Fairlee', 'state_id' => 47],
                [  'name' => 'Newbury', 'state_id' => 47],
                [  'name' => 'North Thetford', 'state_id' => 47],
                [  'name' => 'Post Mills', 'state_id' => 47],
                [  'name' => 'Randolph', 'state_id' => 47],
                [  'name' => 'Randolph Center', 'state_id' => 47],
                [  'name' => 'South Strafford', 'state_id' => 47],
                [  'name' => 'Strafford', 'state_id' => 47],
                [  'name' => 'Thetford', 'state_id' => 47],
                [  'name' => 'Thetford Center', 'state_id' => 47],
                [  'name' => 'Topsham', 'state_id' => 47],
                [  'name' => 'Tunbridge', 'state_id' => 47],
                [  'name' => 'Vershire', 'state_id' => 47],
                [  'name' => 'Wells River', 'state_id' => 47],
                [  'name' => 'West Fairlee', 'state_id' => 47],
                [  'name' => 'West Newbury', 'state_id' => 47],
                [  'name' => 'West Topsham', 'state_id' => 47],
                [  'name' => 'Washington', 'state_id' => 47],
                [  'name' => 'Williamstown', 'state_id' => 47],
                [  'name' => 'Albany', 'state_id' => 47],
                [  'name' => 'Barton', 'state_id' => 47],
                [  'name' => 'Beebe Plain', 'state_id' => 47],
                [  'name' => 'Coventry', 'state_id' => 47],
                [  'name' => 'Craftsbury', 'state_id' => 47],
                [  'name' => 'Craftsbury Common', 'state_id' => 47],
                [  'name' => 'Derby', 'state_id' => 47],
                [  'name' => 'Derby Line', 'state_id' => 47],
                [  'name' => 'East Charleston', 'state_id' => 47],
                [  'name' => 'Glover', 'state_id' => 47],
                [  'name' => 'Greensboro', 'state_id' => 47],
                [  'name' => 'Greensboro Bend', 'state_id' => 47],
                [  'name' => 'Irasburg', 'state_id' => 47],
                [  'name' => 'Lowell', 'state_id' => 47],
                [  'name' => 'Morgan', 'state_id' => 47],
                [  'name' => 'Newport', 'state_id' => 47],
                [  'name' => 'Newport Center', 'state_id' => 47],
                [  'name' => 'North Troy', 'state_id' => 47],
                [  'name' => 'Orleans', 'state_id' => 47],
                [  'name' => 'Troy', 'state_id' => 47],
                [  'name' => 'West Charleston', 'state_id' => 47],
                [  'name' => 'Westfield', 'state_id' => 47],
                [  'name' => 'Rutland', 'state_id' => 47],
                [  'name' => 'Belmont', 'state_id' => 47],
                [  'name' => 'Benson', 'state_id' => 47],
                [  'name' => 'Bomoseen', 'state_id' => 47],
                [  'name' => 'Brandon', 'state_id' => 47],
                [  'name' => 'Castleton', 'state_id' => 47],
                [  'name' => 'Center Rutland', 'state_id' => 47],
                [  'name' => 'Chittenden', 'state_id' => 47],
                [  'name' => 'Cuttingsville', 'state_id' => 47],
                [  'name' => 'Danby', 'state_id' => 47],
                [  'name' => 'East Poultney', 'state_id' => 47],
                [  'name' => 'East Wallingford', 'state_id' => 47],
                [  'name' => 'Fair Haven', 'state_id' => 47],
                [  'name' => 'Florence', 'state_id' => 47],
                [  'name' => 'Forest Dale', 'state_id' => 47],
                [  'name' => 'Hydeville', 'state_id' => 47],
                [  'name' => 'Killington', 'state_id' => 47],
                [  'name' => 'Middletown Springs', 'state_id' => 47],
                [  'name' => 'Mount Holly', 'state_id' => 47],
                [  'name' => 'North Clarendon', 'state_id' => 47],
                [  'name' => 'Pawlet', 'state_id' => 47],
                [  'name' => 'Pittsfield', 'state_id' => 47],
                [  'name' => 'Pittsford', 'state_id' => 47],
                [  'name' => 'Poultney', 'state_id' => 47],
                [  'name' => 'Proctor', 'state_id' => 47],
                [  'name' => 'Wallingford', 'state_id' => 47],
                [  'name' => 'Wells', 'state_id' => 47],
                [  'name' => 'West Pawlet', 'state_id' => 47],
                [  'name' => 'West Rutland', 'state_id' => 47],
                [  'name' => 'Montpelier', 'state_id' => 47],
                [  'name' => 'Adamant', 'state_id' => 47],
                [  'name' => 'Barre', 'state_id' => 47],
                [  'name' => 'Cabot', 'state_id' => 47],
                [  'name' => 'Calais', 'state_id' => 47],
                [  'name' => 'East Barre', 'state_id' => 47],
                [  'name' => 'East Calais', 'state_id' => 47],
                [  'name' => 'East Montpelier', 'state_id' => 47],
                [  'name' => 'Graniteville', 'state_id' => 47],
                [  'name' => 'Marshfield', 'state_id' => 47],
                [  'name' => 'Moretown', 'state_id' => 47],
                [  'name' => 'Northfield', 'state_id' => 47],
                [  'name' => 'Northfield Falls', 'state_id' => 47],
                [  'name' => 'North Montpelier', 'state_id' => 47],
                [  'name' => 'Plainfield', 'state_id' => 47],
                [  'name' => 'South Barre', 'state_id' => 47],
                [  'name' => 'Waterbury', 'state_id' => 47],
                [  'name' => 'Waitsfield', 'state_id' => 47],
                [  'name' => 'Warren', 'state_id' => 47],
                [  'name' => 'Waterbury Center', 'state_id' => 47],
                [  'name' => 'Websterville', 'state_id' => 47],
                [  'name' => 'Woodbury', 'state_id' => 47],
                [  'name' => 'Worcester', 'state_id' => 47],
                [  'name' => 'Bellows Falls', 'state_id' => 47],
                [  'name' => 'Cambridgeport', 'state_id' => 47],
                [  'name' => 'Grafton', 'state_id' => 47],
                [  'name' => 'Londonderry', 'state_id' => 47],
                [  'name' => 'Saxtons River', 'state_id' => 47],
                [  'name' => 'South Londonderry', 'state_id' => 47],
                [  'name' => 'Westminster', 'state_id' => 47],
                [  'name' => 'Westminster Station', 'state_id' => 47],
                [  'name' => 'Brattleboro', 'state_id' => 47],
                [  'name' => 'East Dover', 'state_id' => 47],
                [  'name' => 'Jacksonville', 'state_id' => 47],
                [  'name' => 'Jamaica', 'state_id' => 47],
                [  'name' => 'Marlboro', 'state_id' => 47],
                [  'name' => 'Newfane', 'state_id' => 47],
                [  'name' => 'Putney', 'state_id' => 47],
                [  'name' => 'South Newfane', 'state_id' => 47],
                [  'name' => 'Townshend', 'state_id' => 47],
                [  'name' => 'Vernon', 'state_id' => 47],
                [  'name' => 'Wardsboro', 'state_id' => 47],
                [  'name' => 'West Dover', 'state_id' => 47],
                [  'name' => 'West Dummerston', 'state_id' => 47],
                [  'name' => 'West Halifax', 'state_id' => 47],
                [  'name' => 'West Townshend', 'state_id' => 47],
                [  'name' => 'West Wardsboro', 'state_id' => 47],
                [  'name' => 'Whitingham', 'state_id' => 47],
                [  'name' => 'Williamsville', 'state_id' => 47],
                [  'name' => 'Wilmington', 'state_id' => 47],
                [  'name' => 'White River Junction', 'state_id' => 47],
                [  'name' => 'Ascutney', 'state_id' => 47],
                [  'name' => 'Barnard', 'state_id' => 47],
                [  'name' => 'Bethel', 'state_id' => 47],
                [  'name' => 'Bridgewater', 'state_id' => 47],
                [  'name' => 'Bridgewater Corners', 'state_id' => 47],
                [  'name' => 'Brownsville', 'state_id' => 47],
                [  'name' => 'Hartford', 'state_id' => 47],
                [  'name' => 'Hartland', 'state_id' => 47],
                [  'name' => 'Hartland Four Corners', 'state_id' => 47],
                [  'name' => 'North Hartland', 'state_id' => 47],
                [  'name' => 'North Pomfret', 'state_id' => 47],
                [  'name' => 'Norwich', 'state_id' => 47],
                [  'name' => 'Plymouth', 'state_id' => 47],
                [  'name' => 'Quechee', 'state_id' => 47],
                [  'name' => 'Reading', 'state_id' => 47],
                [  'name' => 'Sharon', 'state_id' => 47],
                [  'name' => 'South Pomfret', 'state_id' => 47],
                [  'name' => 'South Royalton', 'state_id' => 47],
                [  'name' => 'South Woodstock', 'state_id' => 47],
                [  'name' => 'Taftsville', 'state_id' => 47],
                [  'name' => 'West Hartford', 'state_id' => 47],
                [  'name' => 'Wilder', 'state_id' => 47],
                [  'name' => 'Windsor', 'state_id' => 47],
                [  'name' => 'Woodstock', 'state_id' => 47],
                [  'name' => 'Cavendish', 'state_id' => 47],
                [  'name' => 'Chester', 'state_id' => 47],
                [  'name' => 'Ludlow', 'state_id' => 47],
                [  'name' => 'North Springfield', 'state_id' => 47],
                [  'name' => 'Perkinsville', 'state_id' => 47],
                [  'name' => 'Proctorsville', 'state_id' => 47],
                [  'name' => 'Springfield', 'state_id' => 47],
                [  'name' => 'Weston', 'state_id' => 47],
                [  'name' => 'Gaysville', 'state_id' => 47],
                [  'name' => 'Rochester', 'state_id' => 47],
                [  'name' => 'Stockbridge', 'state_id' => 47],
            ]);
       }
    }
}
