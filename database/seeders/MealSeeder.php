<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MealPlan;
use App\Models\MealType;
class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//   Day 1
//  Breakfast
    // Banana
    // Low-fat potato egg omelet 
    // Whole wheat bread
    // Unpolished rice say coffee	
// lunch
    // Low-fat tokwa adobo
    // sautéed squash and string beans 
    // unpolished rice
    // boiled nuts	
//supper
    // Low fat veggie meat with white sauce
    // unpolished rice 
    // fresh pineapple


// Day 2
// Breakfast
    // Papaya
    // grilled Vegetarian tocino 
    // Boiled camote
    // Unpolished rice 
    // Warm skim or low-fat milk (No sugar)	
// lunch
    // Low fat sweet and sour  gluten
    // boiled camote tops
    // unpolished rice
    // boiled nuts	
//supper
    // low-fat sautéed mango beans
    //  unpolished rice 
    // fruit gulaman delight

// Day 3
// Breakfast
    // Apple 
    // Low-fat tempura chunks 
    // Unpolished rice
    // Salabat	
// lunch
    // Low fat vegetarian afritada
    // boiled malunggay
    // unpolished rice
    // soy milk	
//supper
    // chili beans
    // unpolished rice
    // fresh buko

// Day 4
//Breakfast
    // Apple 
    // Tempura chunks 
    // Pandesal with cheese
    // Champorado (no sugar)
    // Salabat	
// lunch
    // Hawaiian gluten steak
    // Baked or roasted nuts
    // unpolished rice
    // Boiled camote	
//supper
    // Sautéed mongo beans 
    // Unpolished rice 
    // Diabetic gulaman delight
// Day 5
//Breakfast
    // Banana
    // potato egg omelet 
    // Whole wheat bread with margarine
    // Unpolished rice
    // soy coffee low fat milk (no sugar)	
// lunch
    // Tokwa adobo
    // Sautéed squash and string beans
    // Unpolished rice
    // Boiled nuts	
//supper
    // Ginataang veggie meat 
    // unpolished rice 
    // fresh pineapple

         $mealPlan = $reducingDiets = MealType::create([
            'description' => 'Reducing Diets',
        ]);
        // day 1 to 5
        // day 1
       $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 1',
            'meal_time' => 'Breakfast',
           
        ]);
        $foods = [
            'Banana',
            'Low-fat potato egg omelet',
            'Whole wheat bread',
            'Unpolished rice',
            'Salabat',
        ];
        
        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 1',
            'meal_time' => 'Lunch',
          
        ]);

        $foods = [
            'Low-fat tokwa adobo',
            'Sautéed squash and string beans',
            'unpolished rice',
            'Boiled nuts',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 1',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'Low fat veggie meat with white sauce',
            'unpolished rice',
            'fresh pineapple',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        // day 2
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 2',
            'meal_time' => 'Breakfast',
          
        ]);

        $foods = [
            'Papaya',
            'grilled Vegetarian tocino',
            'Boiled camote',
            'Unpolished rice',
            'Warm skim or low-fat milk (No sugar)',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 2',
            'meal_time' => 'Lunch',
          
        ]);

        $foods = [
            'Low fat sweet and sour  gluten',
            'boiled camote tops',
            'unpolished rice',
            'boiled nuts',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 2',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'low-fat sautéed mango beans',
            'unpolished rice',
            'fruit gulaman delight',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
        

        // day 3
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 3',
            'meal_time' => 'Breakfast',
           
        ]);

        $foods = [
            'Apple',
            'Low-fat tempura chunks',
            'Unpolished rice',
            'Salabat',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 3',
            'meal_time' => 'Lunch',
            
        ]);

        $foods = [
            'Low fat vegetarian afritada',
            'boiled malunggay',
            'unpolished rice',
            'soy milk',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 3',
            'meal_time' => 'Supper',
          
        ]);

        $foods = [
            'chili beans',
            'unpolished rice',
            'fresh buko',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        // day 4
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 4',
            'meal_time' => 'Breakfast',
           
        ]);

        $foods = [
            'Apple',
            'Tempura chunks',
            'Pandesal with cheese',
            'Champorado (no sugar)',
            'Salabat',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }



         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 4',
            'meal_time' => 'Lunch',
           
        ]);

        $foods = [
            'Hawaiian gluten steak',
            'Baked or roasted nuts',
            'unpolished rice',
            'Boiled camote',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 4',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'Sautéed mongo beans',
            'unpolished rice',
            'Diabetic gulaman delight',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }


        // day 5
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 5',
            'meal_time' => 'Breakfast',
           
        ]);

        $foods = [
            'Banana',
            'potato egg omelet',
            'Whole wheat bread with margarine',
            'Unpolished rice',
            'soy coffee low fat milk (no sugar)',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 5',
            'meal_time' => 'Lunch',
            
        ]);

        $foods = [
            'Tokwa adobo',
            'Sautéed squash and string beans',
            'unpolished rice',
            'Boiled nuts',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

         $mealPlan = $reducingDiets->mealPlans()->create([
            'day' => 'Day 5',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'Ginataang veggie meat',
            'unpolished rice',
            'fresh pineapple',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $undernourishedOrUnderweight = MealType::create([
            'description' => 'Undernourished or Underweight',
        ]);

        // day 1
        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 1',
            'meal_time' => 'Breakfast',
           
        ]);

        $foods = [
            'Banana',
            'potato egg omelet',
            'Whole wheat bread with margarine',
            'Unpolished rice',
            'soy coffee low fat milk (no sugar)',
        ];
        
        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
        
        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 1',
            'meal_time' => 'Lunch',
          
        ]);

        $foods = [
            'Kare-kare',
            'boiled camote',
            'unpolished rice',
            'any fruits or papaya',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 1',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'Ginataang veggie meat',
            'unpolished rice',
            'fresh pineapple',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }


        // day 2
        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 2',
            'meal_time' => 'Breakfast',
          
        ]);

        $foods = [
            'Papaya',
            'Fried beef tocino with Unpolished rice',
            'Boiled camote with peanut butter',
            'Warm or low-fat skim milk (No sugar)',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 2',
            'meal_time' => 'Lunch',
          
        ]);

        $foods = [
            'Sweet and sour  gluten',
            'boiled camote tops',
            'unpolished rice',
            'baked nuts with or without butter',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 2',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'chopsuey',
            'unpolished rice with fried fish',
            'ripe mango',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        // day 3
        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 3',
            'meal_time' => 'Breakfast',
           
        ]);

        $foods = [
            'Apple',
            'Low cholesterol tempura chunks',
            'pandesal with jelly',
            'low fat champorado (no sugar)',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 3',
            'meal_time' => 'Lunch',
           
        ]);

        $foods = [
            'Jam sandwich and juice',
            'Low fat vegetarian afritada',
            'boiled malunggay',
            'unpolished rice',
            'soy milk',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 3',
            'meal_time' => 'Supper',
            
        ]);

        $foods = [
            'chili beans',
            'unpolished rice',
            'fresh buko',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        // day 4
        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 4',
            'meal_time' => 'Breakfast',
          
        ]);

        $foods = [
            'Banana',
            'Scrambled eggs with tomatoes',
            'Fried fish',
            'Unpolished rice',
            'milk ( no sugar )',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 4',
            'meal_time' => 'Lunch',
           
        ]);

        $foods = [
            'Chicken curry',
            'Cucumber salad',
            'unpolished rice',
            'boiled nuts',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 4',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'chopsuey',
            'unpolished rice with fried fish',
            'ripe mango',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        // day 5
        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 5',
            'meal_time' => 'Breakfast',
           
        ]);

        $foods = [
            'Pineapple',
            'Chicken adobo with Unpolished rice',
            'Radish salad',
            'Warm or low-fat skim milk (No sugar)',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 5',
            'meal_time' => 'Lunch',
           
        ]);

        $foods = [
            'Kare-kare',
            'boiled camote',
            'unpolished rice',
            'any fruits or papaya',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }

        $mealPlan = $undernourishedOrUnderweight->mealPlans()->create([
            'day' => 'Day 5',
            'meal_time' => 'Supper',
           
        ]);

        $foods = [
            'Ginataang veggie meat',
            'unpolished rice',
            'fresh pineapple',
        ];

        foreach($foods as $food){
            $mealPlan->foods()->create([
                'name' => $food,
            ]);
        }
        
    }
}