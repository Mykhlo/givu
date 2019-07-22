<?php

use Illuminate\Database\Seeder;

class OrgCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $orgs = [
            [
                'name' => 'Environment',   
                'short_description' => 'Only a few of the today\'s major Environmental Problems we are facing are: Pollution; Global Warming and Climate change; Natural Resource Depletion; Waste Disposal; Loss of Biodiversity ...',
                'description' => '<span>Only a few of the today\'s major Environmental Problems we are facing are:<br /><br />- Pollution<br />- Global Warming and Climate change<br />- Natural Resource Depletion<br />- Waste Disposal<br />- Loss of Biodiversity<br />- Deforestation<br />- Ocean Acidification and Acid Rain<br />- Ozone Layer Depletion<br /><br />Notable global environmental organizations are:<br /><br />- United Nations Environment Programme (UNEP), <br />- World Wide Fund for Nature,<br />- Intergovernmental Panel on Climate Change (IPCC), <br />- Greenpeace, <br />- Atlantic Whale and Dolphin Foundation,<br />- Friends of the Earth<br /><br />Some of the Korean Environmental organization are:<br /><br />- Open Hands<br />- Green Future Campaign<br />- Korean Federation for Environmental Movement (KFEM)<br />- Korea Mountain Preservation League<br />- Korea NGO\'s Energy Network</span></p>',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],
            [
                'name' => 'Animal rights',
                'short_description' => 'Humanity abuses animal rights in the following ways: Experimentation; Meat industry\'s conditions for animals; Clothing industry\'s deaths; Entertainment industry\'s suffering; etc',
                'description' => '<span>Humanity abuses animal rights in the following ways:<br /><br />- Experimentation <br />- Meat industry\'s conditions for animals<br />- Clothing industry\'s deaths<br />- Entertainment industry\'s suffering<br />- etc<br /><br />Some of the biggest international Animal rights organizations are:<br /><br />- CTAsia for Animals<br />- Animal Welfare Institute (AWI)<br />- People for the Ethical Treatment of Animals (PETA)<br />- World Wildlife Foundation<br /><br />Some of the Korean Animal rights organizations are:<br /><br />- Coexistence of Animal Rights on Earth (CARE)<br />- International Aid for Korean Animals (IAKA)<br />- Korea Animal Protection and Education Society (KAPES)</span>',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],
            [
                'name' => 'Human rights',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],
            [
                'name' => 'Education',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],
            [
                'name' => 'Development',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],
            [
                'name' => 'Health',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],
            [
                'name' => 'Art and culture',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'preview' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
                'image' => 'https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG',
            ],                         
        ];
        DB::table('org_categories')->insert($orgs);
    }
}
