<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tree;
use App\Bear;
use App\Fish;
use App\Picnic;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
        $this->call(BearAppSeeder::class);
       	$this->command->info('Bear app seeds finished');


    }
}
//Cunstop Seeder Class
class BearAppSeeder extends Seeder{
	public function run(){
		DB::table('bears')->delete();
        DB::table('fish')->delete();
        DB::table('picnics')->delete();
        DB::table('trees')->delete();
        DB::table('bears_picnics')->delete();

        // Seed Bear Table

        $bearRabbi = Bear::create([
        	'name'         => 'Rabbi',
            'type'         => 'Grizzly',
            'danger_level' => 8
        	]);

        $bearShawon = Bear::create([
        	'name'         => 'Shawon',
            'type'         => 'Black',
            'danger_level' => 12
        	]);

        $bearHossain = Bear::create([
        	'name'         => 'Hossain',
            'type'         => 'Black',
            'danger_level' => 10
        	]);

        $bearShuvo = Bear::create([
        	'name'         => 'Shuvo',
            'type'         => 'Polar',
            'danger_level' => 4
        	]);
        $this->command->info('The bears are alive!');

        //Seed Fish Table

        Fish::create(array(
            'weight'  => 5,
            'bear_id' => $bearRabbi->id
        ));
        Fish::create(array(
            'weight'  => 12,
            'bear_id' => $bearShawon->id
        ));
        Fish::create(array(
            'weight'  => 4,
            'bear_id' => $bearHossain->id
        ));
        Fish::create(array(
            'weight'  => 4,
            'bear_id' => $bearShuvo->id
        ));
        
        $this->command->info('They are eating fish!');

        // seed our trees table ---------------------
        Tree::create(array(
            'type'    => 'Redwood',
            'age'     => 500,
            'bear_id' => $bearShawon->id
        ));
        Tree::create(array(
            'type'    => 'Oak',
            'age'     => 400,
            'bear_id' => $bearRabbi->id
        ));
        Tree::create(array(
            'type'    => 'Redwood',
            'age'     => 600,
            'bear_id' => $bearShuvo->id
        ));
        Tree::create(array(
            'type'    => 'Oak',
            'age'     => 300,
            'bear_id' => $bearShuvo->id
        ));
        Tree::create(array(
            'type'    => 'Oak',
            'age'     => 400,
            'bear_id' => $bearHossain->id
        ));

        $this->command->info('Climb bears! Be free!');

        // seed our picnics table ---------------------

        // we will create one picnic and apply all bears to this one picnic
        $picnicYellowstone = Picnic::create(array(
            'name'        => 'Yellowstone',
            'taste_level' => 6
        ));
        $picnicGrandCanyon = Picnic::create(array(
            'name'        => 'Grand Canyon',
            'taste_level' => 5
        ));
        // link our bears to picnics ---------------------
        // for our purposes we'll just add all bears to both picnics for our many to many relationship
        $bearRabbi->picnics()->attach($picnicYellowstone->id);
        $bearRabbi->picnics()->attach($picnicGrandCanyon->id);

        $bearShawon->picnics()->attach($picnicYellowstone->id);
        $bearShawon->picnics()->attach($picnicGrandCanyon->id);

        $bearHossain->picnics()->attach($picnicYellowstone->id);
        $bearHossain->picnics()->attach($picnicGrandCanyon->id);

        $bearShuvo->picnics()->attach($picnicYellowstone->id);
        $bearShuvo->picnics()->attach($picnicGrandCanyon->id);


        $this->command->info('They are terrorizing picnics!');

	}
}