<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\WebsiteConfiguration;

class WebConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteConfiguration::create([
			'name' => 'MaintenancePassword',
			'value' => json_encode(
				[
					'combination' => [0,7,8,9,10,11],
					'password' => '@bs0lut3lyM@55!v3P@55w0rd'
				])
		]); // please please please please please please please change the default password
		
		WebsiteConfiguration::create([
			'name' => 'ComputeServiceAccessKey',
			'value' => '92a6ac6b-7167-49b1-9ccd-079820ac892b'
		]); // change this as well
		
		WebsiteConfiguration::create([
			'name' => 'WhitelistedIPs',
			'value' => '127.0.0.1'
		]);
		
		WebsiteConfiguration::create([
			'name' => 'VersionCompatibilityVersions',
			'value' => '0.1.0pcplayer' // version1;version2;version3
		]);
		
		WebsiteConfiguration::create([
			'name' => 'VersionCompatibilityHashes',
			'value' => 'debughash' // hash1;hash2;hash3
		]);
    }
}
