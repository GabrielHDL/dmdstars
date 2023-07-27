<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state31TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of NH - New Hampshire.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Barnstead', 'state_id' => 31],
                ['name' => 'Belmont', 'state_id' => 31],
                ['name' => 'Center Barnstead', 'state_id' => 31],
                ['name' => 'Center Harbor', 'state_id' => 31],
                ['name' => 'Gilmanton', 'state_id' => 31],
                ['name' => 'Laconia', 'state_id' => 31],
                ['name' => 'Gilford', 'state_id' => 31],
                ['name' => 'Lochmere', 'state_id' => 31],
                ['name' => 'Meredith', 'state_id' => 31],
                ['name' => 'New Hampton', 'state_id' => 31],
                ['name' => 'Sanbornton', 'state_id' => 31],
                ['name' => 'Tilton', 'state_id' => 31],
                ['name' => 'Winnisquam', 'state_id' => 31],
                ['name' => 'Alton', 'state_id' => 31],
                ['name' => 'Alton Bay', 'state_id' => 31],
                ['name' => 'Gilmanton Iron Works', 'state_id' => 31],
                ['name' => 'Center Sandwich', 'state_id' => 31],
                ['name' => 'Moultonborough', 'state_id' => 31],
                ['name' => 'North Sandwich', 'state_id' => 31],
                ['name' => 'Bartlett', 'state_id' => 31],
                ['name' => 'Center Conway', 'state_id' => 31],
                ['name' => 'Center Ossipee', 'state_id' => 31],
                ['name' => 'Center Tuftonboro', 'state_id' => 31],
                ['name' => 'Chocorua', 'state_id' => 31],
                ['name' => 'Conway', 'state_id' => 31],
                ['name' => 'East Wakefield', 'state_id' => 31],
                ['name' => 'Eaton Center', 'state_id' => 31],
                ['name' => 'Freedom', 'state_id' => 31],
                ['name' => 'Glen', 'state_id' => 31],
                ['name' => 'Intervale', 'state_id' => 31],
                ['name' => 'Jackson', 'state_id' => 31],
                ['name' => 'Kearsarge', 'state_id' => 31],
                ['name' => 'Madison', 'state_id' => 31],
                ['name' => 'Melvin Village', 'state_id' => 31],
                ['name' => 'Mirror Lake', 'state_id' => 31],
                ['name' => 'North Conway', 'state_id' => 31],
                ['name' => 'Lee', 'state_id' => 31],
                ['name' => 'Ossipee', 'state_id' => 31],
                ['name' => 'Sanbornville', 'state_id' => 31],
                ['name' => 'Silver Lake', 'state_id' => 31],
                ['name' => 'Effingham', 'state_id' => 31],
                ['name' => 'South Tamworth', 'state_id' => 31],
                ['name' => 'Tamworth', 'state_id' => 31],
                ['name' => 'West Ossipee', 'state_id' => 31],
                ['name' => 'Wolfeboro', 'state_id' => 31],
                ['name' => 'Wolfeboro Falls', 'state_id' => 31],
                ['name' => 'Wonalancet', 'state_id' => 31],
                ['name' => 'Keene', 'state_id' => 31],
                ['name' => 'Ashuelot', 'state_id' => 31],
                ['name' => 'Chesterfield', 'state_id' => 31],
                ['name' => 'Dublin', 'state_id' => 31],
                ['name' => 'Sullivan', 'state_id' => 31],
                ['name' => 'Swanzey', 'state_id' => 31],
                ['name' => 'Fitzwilliam', 'state_id' => 31],
                ['name' => 'Gilsum', 'state_id' => 31],
                ['name' => 'Harrisville', 'state_id' => 31],
                ['name' => 'Hinsdale', 'state_id' => 31],
                ['name' => 'Jaffrey', 'state_id' => 31],
                ['name' => 'Marlborough', 'state_id' => 31],
                ['name' => 'Marlow', 'state_id' => 31],
                ['name' => 'Nelson', 'state_id' => 31],
                ['name' => 'Rindge', 'state_id' => 31],
                ['name' => 'Spofford', 'state_id' => 31],
                ['name' => 'Stoddard', 'state_id' => 31],
                ['name' => 'Troy', 'state_id' => 31],
                ['name' => 'West Chesterfield', 'state_id' => 31],
                ['name' => 'Westmoreland', 'state_id' => 31],
                ['name' => 'West Swanzey', 'state_id' => 31],
                ['name' => 'Winchester', 'state_id' => 31],
                ['name' => 'Alstead', 'state_id' => 31],
                ['name' => 'Drewsville', 'state_id' => 31],
                ['name' => 'Walpole', 'state_id' => 31],
                ['name' => 'North Walpole', 'state_id' => 31],
                ['name' => 'Berlin', 'state_id' => 31],
                ['name' => 'Bretton Woods', 'state_id' => 31],
                ['name' => 'Colebrook', 'state_id' => 31],
                ['name' => 'Errol', 'state_id' => 31],
                ['name' => 'Gorham', 'state_id' => 31],
                ['name' => 'Groveton', 'state_id' => 31],
                ['name' => 'Jefferson', 'state_id' => 31],
                ['name' => 'Lancaster', 'state_id' => 31],
                ['name' => 'Milan', 'state_id' => 31],
                ['name' => 'Mount Washington', 'state_id' => 31],
                ['name' => 'North Stratford', 'state_id' => 31],
                ['name' => 'Pittsburg', 'state_id' => 31],
                ['name' => 'Randolph', 'state_id' => 31],
                ['name' => 'Twin Mountain', 'state_id' => 31],
                ['name' => 'West Stewartstown', 'state_id' => 31],
                ['name' => 'Whitefield', 'state_id' => 31],
                ['name' => 'Waterville Valley', 'state_id' => 31],
                ['name' => 'Ashland', 'state_id' => 31],
                ['name' => 'Bristol', 'state_id' => 31],
                ['name' => 'Campton', 'state_id' => 31],
                ['name' => 'Glencliff', 'state_id' => 31],
                ['name' => 'Grafton', 'state_id' => 31],
                ['name' => 'Hebron', 'state_id' => 31],
                ['name' => 'Holderness', 'state_id' => 31],
                ['name' => 'Lincoln', 'state_id' => 31],
                ['name' => 'Chichester', 'state_id' => 31],
                ['name' => 'North Woodstock', 'state_id' => 31],
                ['name' => 'Plymouth', 'state_id' => 31],
                ['name' => 'Rumney', 'state_id' => 31],
                ['name' => 'Warren', 'state_id' => 31],
                ['name' => 'Wentworth', 'state_id' => 31],
                ['name' => 'Thornton', 'state_id' => 31],
                ['name' => 'Woodstock', 'state_id' => 31],
                ['name' => 'Littleton', 'state_id' => 31],
                ['name' => 'Bethlehem', 'state_id' => 31],
                ['name' => 'Franconia', 'state_id' => 31],
                ['name' => 'Lisbon', 'state_id' => 31],
                ['name' => 'Sugar Hill', 'state_id' => 31],
                ['name' => 'Bath', 'state_id' => 31],
                ['name' => 'Canaan', 'state_id' => 31],
                ['name' => 'Enfield', 'state_id' => 31],
                ['name' => 'Enfield Center', 'state_id' => 31],
                ['name' => 'Etna', 'state_id' => 31],
                ['name' => 'Hanover', 'state_id' => 31],
                ['name' => 'Lebanon', 'state_id' => 31],
                ['name' => 'Haverhill', 'state_id' => 31],
                ['name' => 'Lyme', 'state_id' => 31],
                ['name' => 'Lyme Center', 'state_id' => 31],
                ['name' => 'Monroe', 'state_id' => 31],
                ['name' => 'North Haverhill', 'state_id' => 31],
                ['name' => 'Orford', 'state_id' => 31],
                ['name' => 'Piermont', 'state_id' => 31],
                ['name' => 'Pike', 'state_id' => 31],
                ['name' => 'West Lebanon', 'state_id' => 31],
                ['name' => 'Woodsville', 'state_id' => 31],
                ['name' => 'Amherst', 'state_id' => 31],
                ['name' => 'Brookline', 'state_id' => 31],
                ['name' => 'Francestown', 'state_id' => 31],
                ['name' => 'Goffstown', 'state_id' => 31],
                ['name' => 'Greenfield', 'state_id' => 31],
                ['name' => 'Greenville', 'state_id' => 31],
                ['name' => 'Hollis', 'state_id' => 31],
                ['name' => 'Hudson', 'state_id' => 31],
                ['name' => 'Litchfield', 'state_id' => 31],
                ['name' => 'Merrimack', 'state_id' => 31],
                ['name' => 'Milford', 'state_id' => 31],
                ['name' => 'Mont Vernon', 'state_id' => 31],
                ['name' => 'Nashua', 'state_id' => 31],
                ['name' => 'New Boston', 'state_id' => 31],
                ['name' => 'New Ipswich', 'state_id' => 31],
                ['name' => 'Pelham', 'state_id' => 31],
                ['name' => 'Lyndeborough', 'state_id' => 31],
                ['name' => 'Temple', 'state_id' => 31],
                ['name' => 'Wilton', 'state_id' => 31],
                ['name' => 'Manchester', 'state_id' => 31],
                ['name' => 'Bedford', 'state_id' => 31],
                ['name' => 'Hillsborough', 'state_id' => 31],
                ['name' => 'Weare', 'state_id' => 31],
                ['name' => 'Antrim', 'state_id' => 31],
                ['name' => 'Bennington', 'state_id' => 31],
                ['name' => 'Hancock', 'state_id' => 31],
                ['name' => 'Peterborough', 'state_id' => 31],
                ['name' => 'West Peterborough', 'state_id' => 31],
                ['name' => 'Dunbarton', 'state_id' => 31],
                ['name' => 'Hooksett', 'state_id' => 31],
                ['name' => 'Andover', 'state_id' => 31],
                ['name' => 'Bradford', 'state_id' => 31],
                ['name' => 'Canterbury', 'state_id' => 31],
                ['name' => 'Contoocook', 'state_id' => 31],
                ['name' => 'Danbury', 'state_id' => 31],
                ['name' => 'East Andover', 'state_id' => 31],
                ['name' => 'Elkins', 'state_id' => 31],
                ['name' => 'Epsom', 'state_id' => 31],
                ['name' => 'Franklin', 'state_id' => 31],
                ['name' => 'Henniker', 'state_id' => 31],
                ['name' => 'Hill', 'state_id' => 31],
                ['name' => 'Newbury', 'state_id' => 31],
                ['name' => 'New London', 'state_id' => 31],
                ['name' => 'North Sutton', 'state_id' => 31],
                ['name' => 'Pittsfield', 'state_id' => 31],
                ['name' => 'Salisbury', 'state_id' => 31],
                ['name' => 'South Newbury', 'state_id' => 31],
                ['name' => 'South Sutton', 'state_id' => 31],
                ['name' => 'Suncook', 'state_id' => 31],
                ['name' => 'Warner', 'state_id' => 31],
                ['name' => 'Wilmot', 'state_id' => 31],
                ['name' => 'Concord', 'state_id' => 31],
                ['name' => 'Bow', 'state_id' => 31],
                ['name' => 'Loudon', 'state_id' => 31],
                ['name' => 'Auburn', 'state_id' => 31],
                ['name' => 'Candia', 'state_id' => 31],
                ['name' => 'Chester', 'state_id' => 31],
                ['name' => 'Deerfield', 'state_id' => 31],
                ['name' => 'Derry', 'state_id' => 31],
                ['name' => 'East Candia', 'state_id' => 31],
                ['name' => 'East Derry', 'state_id' => 31],
                ['name' => 'Epping', 'state_id' => 31],
                ['name' => 'Fremont', 'state_id' => 31],
                ['name' => 'Londonderry', 'state_id' => 31],
                ['name' => 'North Salem', 'state_id' => 31],
                ['name' => 'Raymond', 'state_id' => 31],
                ['name' => 'Salem', 'state_id' => 31],
                ['name' => 'Windham', 'state_id' => 31],
                ['name' => 'Northwood', 'state_id' => 31],
                ['name' => 'Nottingham', 'state_id' => 31],
                ['name' => 'West Nottingham', 'state_id' => 31],
                ['name' => 'Portsmouth', 'state_id' => 31],
                ['name' => 'Atkinson', 'state_id' => 31],
                ['name' => 'Danville', 'state_id' => 31],
                ['name' => 'East Hampstead', 'state_id' => 31],
                ['name' => 'East Kingston', 'state_id' => 31],
                ['name' => 'Exeter', 'state_id' => 31],
                ['name' => 'Greenland', 'state_id' => 31],
                ['name' => 'Hampstead', 'state_id' => 31],
                ['name' => 'Hampton', 'state_id' => 31],
                ['name' => 'Hampton Falls', 'state_id' => 31],
                ['name' => 'Kingston', 'state_id' => 31],
                ['name' => 'New Castle', 'state_id' => 31],
                ['name' => 'Newfields', 'state_id' => 31],
                ['name' => 'Newmarket', 'state_id' => 31],
                ['name' => 'Newton', 'state_id' => 31],
                ['name' => 'Newton Junction', 'state_id' => 31],
                ['name' => 'North Hampton', 'state_id' => 31],
                ['name' => 'Plaistow', 'state_id' => 31],
                ['name' => 'Rye', 'state_id' => 31],
                ['name' => 'Rye Beach', 'state_id' => 31],
                ['name' => 'Sandown', 'state_id' => 31],
                ['name' => 'Seabrook', 'state_id' => 31],
                ['name' => 'Stratham', 'state_id' => 31],
                ['name' => 'Center Strafford', 'state_id' => 31],
                ['name' => 'Dover', 'state_id' => 31],
                ['name' => 'Madbury', 'state_id' => 31],
                ['name' => 'Durham', 'state_id' => 31],
                ['name' => 'Barrington', 'state_id' => 31],
                ['name' => 'Farmington', 'state_id' => 31],
                ['name' => 'Rochester', 'state_id' => 31],
                ['name' => 'Milton', 'state_id' => 31],
                ['name' => 'Milton Mills', 'state_id' => 31],
                ['name' => 'New Durham', 'state_id' => 31],
                ['name' => 'Rollinsford', 'state_id' => 31],
                ['name' => 'Somersworth', 'state_id' => 31],
                ['name' => 'Strafford', 'state_id' => 31],
                ['name' => 'Union', 'state_id' => 31],
                ['name' => 'Washington', 'state_id' => 31],
                ['name' => 'Springfield', 'state_id' => 31],
                ['name' => 'Acworth', 'state_id' => 31],
                ['name' => 'Charlestown', 'state_id' => 31],
                ['name' => 'Lempster', 'state_id' => 31],
                ['name' => 'South Acworth', 'state_id' => 31],
                ['name' => 'Claremont', 'state_id' => 31],
                ['name' => 'Cornish', 'state_id' => 31],
                ['name' => 'Cornish Flat', 'state_id' => 31],
                ['name' => 'Georges Mills', 'state_id' => 31],
                ['name' => 'Goshen', 'state_id' => 31],
                ['name' => 'Grantham', 'state_id' => 31],
                ['name' => 'Guild', 'state_id' => 31],
                ['name' => 'Meriden', 'state_id' => 31],
                ['name' => 'Newport', 'state_id' => 31],
                ['name' => 'Plainfield', 'state_id' => 31],
                ['name' => 'Sunapee', 'state_id' => 31]
            ]);
        }
    }
}
