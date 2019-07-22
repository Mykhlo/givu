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
                'description' => '<p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Only a few of the today\'s major Environmental Problems we are facing are:\n\n- Pollution\n- Global Warming and Climate change\n- Natural Resource Depletion\n- Waste Disposal\n- Loss of Biodiversity\n- Deforestation\n- Ocean Acidification and Acid Rain\n- Ozone Layer Depletion\n\nNotable global environmental organizations are:\n\n- United Nations Environment Programme (UNEP), \n- World Wide Fund for Nature,\n- Intergovernmental Panel on Climate Change (IPCC), \n- Greenpeace, \n- Atlantic Whale and Dolphin Foundation,\n- Friends of the Earth\n\nSome of the Korean Environmental organization are:\n\n- Open Hands\n- Green Future Campaign\n- Korean Federation for Environmental Movement (KFEM)\n- Korea Mountain Preservation League\n- Korea NGO\'s Energy Network&quot;}" data-sheets-userformat="{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}">Only a few of the today\'s major Environmental Problems we are facing are:<br /><br />- Pollution<br />- Global Warming and Climate change<br />- Natural Resource Depletion<br />- Waste Disposal<br />- Loss of Biodiversity<br />- Deforestation<br />- Ocean Acidification and Acid Rain<br />- Ozone Layer Depletion<br /><br />Notable global environmental organizations are:<br /><br />- United Nations Environment Programme (UNEP), <br />- World Wide Fund for Nature,<br />- Intergovernmental Panel on Climate Change (IPCC), <br />- Greenpeace, <br />- Atlantic Whale and Dolphin Foundation,<br />- Friends of the Earth<br /><br />Some of the Korean Environmental organization are:<br /><br />- Open Hands<br />- Green Future Campaign<br />- Korean Federation for Environmental Movement (KFEM)<br />- Korea Mountain Preservation League<br />- Korea NGO\'s Energy Network</span></p>',
            ],
            [
                'name' => 'Animal rights',
                'short_description' => 'Humanity abuses animal rights in the following ways: Experimentation; Meat industry\'s conditions for animals; Clothing industry\'s deaths; Entertainment industry\'s suffering; etc
                ',
                'description' => '<p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Humanity abuses animal rights in the following ways:\n\n- Experimentation \n- Meat industry\'s conditions for animals\n- Clothing industry\'s deaths\n- Entertainment industry\'s suffering\n- etc\n\nSome of the biggest international Animal rights organizations are:\n\n- CTAsia for Animals\n- Animal Welfare Institute (AWI)\n- People for the Ethical Treatment of Animals (PETA)\n- World Wildlife Foundation\n\nSome of the Korean Animal rights organizations are:\n\n- Coexistence of Animal Rights on Earth (CARE)\n- International Aid for Korean Animals (IAKA)\n- Korea Animal Protection and Education Society (KAPES)&quot;}" data-sheets-userformat="{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}">Humanity abuses animal rights in the following ways:<br /><br />- Experimentation <br />- Meat industry\'s conditions for animals<br />- Clothing industry\'s deaths<br />- Entertainment industry\'s suffering<br />- etc<br /><br />Some of the biggest international Animal rights organizations are:<br /><br />- CTAsia for Animals<br />- Animal Welfare Institute (AWI)<br />- People for the Ethical Treatment of Animals (PETA)<br />- World Wildlife Foundation<br /><br />Some of the Korean Animal rights organizations are:<br /><br />- Coexistence of Animal Rights on Earth (CARE)<br />- International Aid for Korean Animals (IAKA)<br />- Korea Animal Protection and Education Society (KAPES)</span></p>',               
            ],
            [
                'name' => 'Human rights',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
            ],
            [
                'name' => 'Education',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
            ],
            [
                'name' => 'Development',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
            ],
            [
                'name' => 'Health',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
            ],
            [
                'name' => 'Art and culture',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....',
            ],                         
        ];
        DB::table('org_categories')->insert($orgs);
    }
}
