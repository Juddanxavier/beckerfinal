<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacuumPumpsCategory = Category::where('name', 'VACUUM PUMPS')->first();
        $compressorsCategory = Category::where('name', 'COMPRESSORS')->first();
        $pressureVacuumPumpsCategory = Category::where('name', 'PRESSURE/VACUUM PUMPS')->first();
        $systemsCategory = Category::where('name', 'SYSTEMS')->first();

        if ($vacuumPumpsCategory) {
            Subcategory::firstOrCreate(['name' => 'Rotary vane vacuum pumps', 'category_id' => $vacuumPumpsCategory->id, 'description' => 'The robustly constructed rotary vane pumps are suitable for higher pressure differences in vacuum and/or pressure applications. An eccentrically mounted rotor with slots rotates in a cylindrical housing and the precisely fitting sliding vanes move in the slots and separate the individual working chambers.\n\nCompared to dry-running rotary vane pumps, oil-lubricated pumps additionally seal the working chambers with the oil that is also transported. The pumps are thus able to generate a fine vacuum and are therefore suitable for applications that require a high vacuum.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Screw vacuum pumps', 'category_id' => $vacuumPumpsCategory->id, 'description' => 'Thanks to the direct drive via an integrated frequency inverter, a drive gear is no longer required. The rotors with screw profile rotate in opposite directions and contactless. The working chamber of the machines is 100% oil-free. The integrated speed control enables energy-optimized operation of the devices.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Claw vacuum pumps', 'category_id' => $vacuumPumpsCategory->id, 'description' => 'Claw pumps are 100% free of oil and contact during operation. To achieve this, the claw-like rotors rotate within the compression chamber in opposite directions and are contactless. This makes the pump particularly low-maintenance. The claw technology ensures a high degree of efficiency and low energy consumption.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Roots booster vacuum pumps', 'category_id' => $vacuumPumpsCategory->id, 'description' => 'In the case of contactless and oil-free compressing Roots, booster pumps, two symmetrical lobes rotate in the working chamber. In combination with a displacement pump (oil-lubricated rotary vane vacuum pump), Roots blowers are often used in pumping stations in order to achieve a very high volume flow with a high final vacuum.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Side channel vacuum pumps', 'category_id' => $vacuumPumpsCategory->id, 'description' => 'Side channel blowers generate suction or blowing air for a wide variety of industrial applications. They contain a contact less, fast rotating impeller and are therefore wear and maintenance free. On both sides of the impeller there are two ring-shaped separate side channels along with the housing. This means that a single-stage device with a high volume flow or a two-stage device with higher pressure differences is possible.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Radial vacuum pumps', 'category_id' => $vacuumPumpsCategory->id, 'description' => 'Radial blowers are designed for high delivery volumes. The volume flow can be precisely adapted to customer requirements using the frequency inverter integrated on the motor. Radial blowers contain a very fast and contactless rotating impeller and are therefore wear and maintenance free.', 'image' => null]);
        }

        if ($compressorsCategory) {
            Subcategory::firstOrCreate(['name' => 'Rotary vane compressors, oil-free', 'category_id' => $compressorsCategory->id, 'description' => 'The robustly constructed and dry-running rotary vane pumps are suitable for higher pressure differences in vacuum and/or pressure applications. An eccentrically mounted rotor with slots rotates in a cylindrical housing and the precisely fitting sliding vanes move in the slots and separate the individual working chambers.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Screw compressors', 'category_id' => $compressorsCategory->id, 'description' => 'Thanks to the direct drive via an integrated frequency inverter, a drive gear is no longer required. The rotors with screw profile rotate in opposite directions and contactless. The working chamber of the machines is 100% oil-free. The integrated speed control enables energy-optimized operation of the devices.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Claw compressors', 'category_id' => $compressorsCategory->id, 'description' => 'Claw pumps are 100% free of oil and contact during operation. To achieve this, the claw-like rotors rotate within the compression chamber in opposite directions and are contactless. This makes the pump particularly low-maintenance. The claw technology ensures a high degree of efficiency and low energy consumption.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Side channel blowers', 'category_id' => $compressorsCategory->id, 'description' => 'Side channel blowers generate suction or blowing air for a wide variety of industrial applications. They contain a contact less, fast rotating impeller and are therefore wear and maintenance free. On both sides of the impeller there are two ring-shaped separate side channels along with the housing. This means that a single-stage device with a high volume flow or a two-stage device with higher pressure differences is possible.', 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Radial blowers', 'category_id' => $compressorsCategory->id, 'description' => 'Radial blowers are designed for high delivery volumes. The volume flow can be precisely adapted to customer requirements using the frequency inverter integrated on the motor. Radial blowers contain a very fast and contactless rotating impeller and are therefore wear and maintenance free.', 'image' => null]);
        }

        if ($pressureVacuumPumpsCategory) {
            Subcategory::firstOrCreate(['name' => 'Combined rotary vane pumps, oil-free', 'category_id' => $pressureVacuumPumpsCategory->id, 'description' => 'The robustly constructed and dry-running rotary vane pumps are suitable for higher pressure differences in vacuum and/or pressure applications. An eccentrically mounted rotor with slots rotates in a cylindrical housing and the precisely fitting sliding vanes move in the slots and separate the individual working chambers.', 'image' => null]);
        }

        if ($systemsCategory) {
            Subcategory::firstOrCreate(['name' => 'VARIAIR Central System', 'category_id' => $systemsCategory->id, 'description' => null, 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Centralised Systems', 'category_id' => $systemsCategory->id, 'description' => null, 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Roots Booster Packages', 'category_id' => $systemsCategory->id, 'description' => null, 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'Vacuum Systems with Vessel', 'category_id' => $systemsCategory->id, 'description' => null, 'image' => null]);
            Subcategory::firstOrCreate(['name' => 'VARIAIR Controller+', 'category_id' => $systemsCategory->id, 'description' => null, 'image' => null]);
        }
    }
}
