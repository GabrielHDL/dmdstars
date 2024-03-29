<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state7TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of AR - Arkansas.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Botsford', 'state_id' => 7],
                ['name' => 'Hawleyville', 'state_id' => 7],
                ['name' => 'Monroe', 'state_id' => 7],
                ['name' => 'Newtown', 'state_id' => 7],
                ['name' => 'Sandy Hook', 'state_id' => 7],
                ['name' => 'Shelton', 'state_id' => 7],
                ['name' => 'Stevenson', 'state_id' => 7],
                ['name' => 'Bridgeport', 'state_id' => 7],
                ['name' => 'Trumbull', 'state_id' => 7],
                ['name' => 'Easton', 'state_id' => 7],
                ['name' => 'Stratford', 'state_id' => 7],
                ['name' => 'Sherman', 'state_id' => 7],
                ['name' => 'Bethel', 'state_id' => 7],
                ['name' => 'Brookfield', 'state_id' => 7],
                ['name' => 'Cos Cob', 'state_id' => 7],
                ['name' => 'Danbury', 'state_id' => 7],
                ['name' => 'New Fairfield', 'state_id' => 7],
                ['name' => 'Darien', 'state_id' => 7],
                ['name' => 'Fairfield', 'state_id' => 7],
                ['name' => 'Georgetown', 'state_id' => 7],
                ['name' => 'Greenwich', 'state_id' => 7],
                ['name' => 'Greens Farms', 'state_id' => 7],
                ['name' => 'New Canaan', 'state_id' => 7],
                ['name' => 'Norwalk', 'state_id' => 7],
                ['name' => 'Old Greenwich', 'state_id' => 7],
                ['name' => 'Redding Center', 'state_id' => 7],
                ['name' => 'Redding Ridge', 'state_id' => 7],
                ['name' => 'Ridgefield', 'state_id' => 7],
                ['name' => 'Riverside', 'state_id' => 7],
                ['name' => 'Westport', 'state_id' => 7],
                ['name' => 'Weston', 'state_id' => 7],
                ['name' => 'Southport', 'state_id' => 7],
                ['name' => 'Redding', 'state_id' => 7],
                ['name' => 'Wilton', 'state_id' => 7],
                ['name' => 'Stamford', 'state_id' => 7],
                ['name' => 'Avon', 'state_id' => 7],
                ['name' => 'Bloomfield', 'state_id' => 7],
                ['name' => 'Windsor', 'state_id' => 7],
                ['name' => 'Bristol', 'state_id' => 7],
                ['name' => 'Burlington', 'state_id' => 7],
                ['name' => 'Broad Brook', 'state_id' => 7],
                ['name' => 'Canton', 'state_id' => 7],
                ['name' => 'Canton Center', 'state_id' => 7],
                ['name' => 'Collinsville', 'state_id' => 7],
                ['name' => 'East Berlin', 'state_id' => 7],
                ['name' => 'East Glastonbury', 'state_id' => 7],
                ['name' => 'East Granby', 'state_id' => 7],
                ['name' => 'East Hartland', 'state_id' => 7],
                ['name' => 'East Windsor Hill', 'state_id' => 7],
                ['name' => 'Farmington', 'state_id' => 7],
                ['name' => 'Glastonbury', 'state_id' => 7],
                ['name' => 'Granby', 'state_id' => 7],
                ['name' => 'Berlin', 'state_id' => 7],
                ['name' => 'Manchester', 'state_id' => 7],
                ['name' => 'New Britain', 'state_id' => 7],
                ['name' => 'North Canton', 'state_id' => 7],
                ['name' => 'North Granby', 'state_id' => 7],
                ['name' => 'Plainville', 'state_id' => 7],
                ['name' => 'Poquonock', 'state_id' => 7],
                ['name' => 'Rocky Hill', 'state_id' => 7],
                ['name' => 'Simsbury', 'state_id' => 7],
                ['name' => 'South Glastonbury', 'state_id' => 7],
                ['name' => 'South Windsor', 'state_id' => 7],
                ['name' => 'Suffield', 'state_id' => 7],
                ['name' => 'Tariffville', 'state_id' => 7],
                ['name' => 'Enfield', 'state_id' => 7],
                ['name' => 'Unionville', 'state_id' => 7],
                ['name' => 'East Windsor', 'state_id' => 7],
                ['name' => 'Weatogue', 'state_id' => 7],
                ['name' => 'West Granby', 'state_id' => 7],
                ['name' => 'West Hartland', 'state_id' => 7],
                ['name' => 'West Simsbury', 'state_id' => 7],
                ['name' => 'West Suffield', 'state_id' => 7],
                ['name' => 'Windsor Locks', 'state_id' => 7],
                ['name' => 'Hartford', 'state_id' => 7],
                ['name' => 'West Hartford', 'state_id' => 7],
                ['name' => 'East Hartford', 'state_id' => 7],
                ['name' => 'Wethersfield', 'state_id' => 7],
                ['name' => 'Newington', 'state_id' => 7],
                ['name' => 'Marion', 'state_id' => 7],
                ['name' => 'Marlborough', 'state_id' => 7],
                ['name' => 'Milldale', 'state_id' => 7],
                ['name' => 'Plantsville', 'state_id' => 7],
                ['name' => 'Southington', 'state_id' => 7],
                ['name' => 'Canaan', 'state_id' => 7],
                ['name' => 'Colebrook', 'state_id' => 7],
                ['name' => 'East Canaan', 'state_id' => 7],
                ['name' => 'Falls Village', 'state_id' => 7],
                ['name' => 'Lakeville', 'state_id' => 7],
                ['name' => 'New Hartford', 'state_id' => 7],
                ['name' => 'Norfolk', 'state_id' => 7],
                ['name' => 'Pine Meadow', 'state_id' => 7],
                ['name' => 'Barkhamsted', 'state_id' => 7],
                ['name' => 'Riverton', 'state_id' => 7],
                ['name' => 'Salisbury', 'state_id' => 7],
                ['name' => 'Sharon', 'state_id' => 7],
                ['name' => 'Taconic', 'state_id' => 7],
                ['name' => 'Winchester Center', 'state_id' => 7],
                ['name' => 'Winsted', 'state_id' => 7],
                ['name' => 'Bantam', 'state_id' => 7],
                ['name' => 'Bethlehem', 'state_id' => 7],
                ['name' => 'Bridgewater', 'state_id' => 7],
                ['name' => 'Cornwall', 'state_id' => 7],
                ['name' => 'Cornwall Bridge', 'state_id' => 7],
                ['name' => 'Gaylordsville', 'state_id' => 7],
                ['name' => 'Goshen', 'state_id' => 7],
                ['name' => 'Kent', 'state_id' => 7],
                ['name' => 'Lakeside', 'state_id' => 7],
                ['name' => 'Litchfield', 'state_id' => 7],
                ['name' => 'Morris', 'state_id' => 7],
                ['name' => 'New Milford', 'state_id' => 7],
                ['name' => 'New Preston Marble Dale', 'state_id' => 7],
                ['name' => 'Northfield', 'state_id' => 7],
                ['name' => 'Oakville', 'state_id' => 7],
                ['name' => 'Pequabuck', 'state_id' => 7],
                ['name' => 'Plymouth', 'state_id' => 7],
                ['name' => 'Roxbury', 'state_id' => 7],
                ['name' => 'South Kent', 'state_id' => 7],
                ['name' => 'Terryville', 'state_id' => 7],
                ['name' => 'Thomaston', 'state_id' => 7],
                ['name' => 'Torrington', 'state_id' => 7],
                ['name' => 'Harwinton', 'state_id' => 7],
                ['name' => 'Washington', 'state_id' => 7],
                ['name' => 'Washington Depot', 'state_id' => 7],
                ['name' => 'Watertown', 'state_id' => 7],
                ['name' => 'West Cornwall', 'state_id' => 7],
                ['name' => 'Woodbury', 'state_id' => 7],
                ['name' => 'Centerbrook', 'state_id' => 7],
                ['name' => 'Chester', 'state_id' => 7],
                ['name' => 'Clinton', 'state_id' => 7],
                ['name' => 'Cobalt', 'state_id' => 7],
                ['name' => 'Cromwell', 'state_id' => 7],
                ['name' => 'Deep River', 'state_id' => 7],
                ['name' => 'Killingworth', 'state_id' => 7],
                ['name' => 'Durham', 'state_id' => 7],
                ['name' => 'East Haddam', 'state_id' => 7],
                ['name' => 'East Hampton', 'state_id' => 7],
                ['name' => 'Essex', 'state_id' => 7],
                ['name' => 'Haddam', 'state_id' => 7],
                ['name' => 'Higganum', 'state_id' => 7],
                ['name' => 'Ivoryton', 'state_id' => 7],
                ['name' => 'Middlefield', 'state_id' => 7],
                ['name' => 'Middle Haddam', 'state_id' => 7],
                ['name' => 'Middletown', 'state_id' => 7],
                ['name' => 'Moodus', 'state_id' => 7],
                ['name' => 'Old Saybrook', 'state_id' => 7],
                ['name' => 'Portland', 'state_id' => 7],
                ['name' => 'Rockfall', 'state_id' => 7],
                ['name' => 'Westbrook', 'state_id' => 7],
                ['name' => 'Ansonia', 'state_id' => 7],
                ['name' => 'Beacon Falls', 'state_id' => 7],
                ['name' => 'Branford', 'state_id' => 7],
                ['name' => 'Cheshire', 'state_id' => 7],
                ['name' => 'Derby', 'state_id' => 7],
                ['name' => 'Guilford', 'state_id' => 7],
                ['name' => 'Madison', 'state_id' => 7],
                ['name' => 'Meriden', 'state_id' => 7],
                ['name' => 'Milford', 'state_id' => 7],
                ['name' => 'North Branford', 'state_id' => 7],
                ['name' => 'Northford', 'state_id' => 7],
                ['name' => 'North Haven', 'state_id' => 7],
                ['name' => 'Orange', 'state_id' => 7],
                ['name' => 'Oxford', 'state_id' => 7],
                ['name' => 'Seymour', 'state_id' => 7],
                ['name' => 'South Britain', 'state_id' => 7],
                ['name' => 'Southbury', 'state_id' => 7],
                ['name' => 'Wallingford', 'state_id' => 7],
                ['name' => 'New Haven', 'state_id' => 7],
                ['name' => 'Hamden', 'state_id' => 7],
                ['name' => 'West Haven', 'state_id' => 7],
                ['name' => 'Bethany', 'state_id' => 7],
                ['name' => 'Waterbury', 'state_id' => 7],
                ['name' => 'Prospect', 'state_id' => 7],
                ['name' => 'Wolcott', 'state_id' => 7],
                ['name' => 'Middlebury', 'state_id' => 7],
                ['name' => 'Naugatuck', 'state_id' => 7],
                ['name' => 'Lebanon', 'state_id' => 7],
                ['name' => 'North Franklin', 'state_id' => 7],
                ['name' => 'New London', 'state_id' => 7],
                ['name' => 'Baltic', 'state_id' => 7],
                ['name' => 'East Lyme', 'state_id' => 7],
                ['name' => 'Bozrah', 'state_id' => 7],
                ['name' => 'Gales Ferry', 'state_id' => 7],
                ['name' => 'Gilman', 'state_id' => 7],
                ['name' => 'Mashantucket', 'state_id' => 7],
                ['name' => 'Ledyard', 'state_id' => 7],
                ['name' => 'Groton', 'state_id' => 7],
                ['name' => 'Hanover', 'state_id' => 7],
                ['name' => 'Jewett City', 'state_id' => 7],
                ['name' => 'Montville', 'state_id' => 7],
                ['name' => 'Mystic', 'state_id' => 7],
                ['name' => 'Niantic', 'state_id' => 7],
                ['name' => 'North Stonington', 'state_id' => 7],
                ['name' => 'Norwich', 'state_id' => 7],
                ['name' => 'Preston', 'state_id' => 7],
                ['name' => 'Oakdale', 'state_id' => 7],
                ['name' => 'Old Lyme', 'state_id' => 7],
                ['name' => 'Old Mystic', 'state_id' => 7],
                ['name' => 'Quaker Hill', 'state_id' => 7],
                ['name' => 'South Lyme', 'state_id' => 7],
                ['name' => 'Stonington', 'state_id' => 7],
                ['name' => 'Pawcatuck', 'state_id' => 7],
                ['name' => 'Taftville', 'state_id' => 7],
                ['name' => 'Uncasville', 'state_id' => 7],
                ['name' => 'Versailles', 'state_id' => 7],
                ['name' => 'Voluntown', 'state_id' => 7],
                ['name' => 'Waterford', 'state_id' => 7],
                ['name' => 'West Mystic', 'state_id' => 7],
                ['name' => 'Yantic', 'state_id' => 7],
                ['name' => 'Colchester', 'state_id' => 7],
                ['name' => 'Salem', 'state_id' => 7],
                ['name' => 'Hadlyme', 'state_id' => 7],
                ['name' => 'North Westchester', 'state_id' => 7],
                ['name' => 'Ellington', 'state_id' => 7],
                ['name' => 'Bolton', 'state_id' => 7],
                ['name' => 'Vernon Rockville', 'state_id' => 7],
                ['name' => 'Somers', 'state_id' => 7],
                ['name' => 'Somersville', 'state_id' => 7],
                ['name' => 'Stafford', 'state_id' => 7],
                ['name' => 'Stafford Springs', 'state_id' => 7],
                ['name' => 'Staffordville', 'state_id' => 7],
                ['name' => 'Tolland', 'state_id' => 7],
                ['name' => 'Amston', 'state_id' => 7],
                ['name' => 'Andover', 'state_id' => 7],
                ['name' => 'Columbia', 'state_id' => 7],
                ['name' => 'Coventry', 'state_id' => 7],
                ['name' => 'Hebron', 'state_id' => 7],
                ['name' => 'Mansfield Center', 'state_id' => 7],
                ['name' => 'Mansfield Depot', 'state_id' => 7],
                ['name' => 'South Willington', 'state_id' => 7],
                ['name' => 'Storrs Mansfield', 'state_id' => 7],
                ['name' => 'Willington', 'state_id' => 7],
                ['name' => 'Willimantic', 'state_id' => 7],
                ['name' => 'Abington', 'state_id' => 7],
                ['name' => 'Ballouville', 'state_id' => 7],
                ['name' => 'Brooklyn', 'state_id' => 7],
                ['name' => 'Chaplin', 'state_id' => 7],
                ['name' => 'Danielson', 'state_id' => 7],
                ['name' => 'Dayville', 'state_id' => 7],
                ['name' => 'Eastford', 'state_id' => 7],
                ['name' => 'East Killingly', 'state_id' => 7],
                ['name' => 'East Woodstock', 'state_id' => 7],
                ['name' => 'Fabyan', 'state_id' => 7],
                ['name' => 'Grosvenor Dale', 'state_id' => 7],
                ['name' => 'Hampton', 'state_id' => 7],
                ['name' => 'North Grosvenordale', 'state_id' => 7],
                ['name' => 'North Windham', 'state_id' => 7],
                ['name' => 'Pomfret', 'state_id' => 7],
                ['name' => 'Pomfret Center', 'state_id' => 7],
                ['name' => 'Putnam', 'state_id' => 7],
                ['name' => 'Quinebaug', 'state_id' => 7],
                ['name' => 'Rogers', 'state_id' => 7],
                ['name' => 'Scotland', 'state_id' => 7],
                ['name' => 'South Windham', 'state_id' => 7],
                ['name' => 'South Woodstock', 'state_id' => 7],
                ['name' => 'Thompson', 'state_id' => 7],
                ['name' => 'Ashford', 'state_id' => 7],
                ['name' => 'Windham', 'state_id' => 7],
                ['name' => 'Woodstock', 'state_id' => 7],
                ['name' => 'Woodstock Valley', 'state_id' => 7],
                ['name' => 'Canterbury', 'state_id' => 7],
                ['name' => 'Central Village', 'state_id' => 7],
                ['name' => 'Moosup', 'state_id' => 7],
                ['name' => 'Oneco', 'state_id' => 7],
                ['name' => 'Plainfield', 'state_id' => 7],
                ['name' => 'Sterling', 'state_id' => 7],
                ['name' => 'Wauregan', 'state_id' => 7]
            ]);
        }
    }
}
