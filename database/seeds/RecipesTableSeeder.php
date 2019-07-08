<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->delete();
        $recipes = array(
            ['id' => 1,'user_id'=>'1','short_d'=>'Make the cheese sauce: Melt 3 tablespoons butter in a saucepan on top of the stove. Quickly stir the flour into the saucepan until the mixture is smooth.',
                'name' => 'Ham and Mushroom Baked Eggs',
                'description'=> 'Make the cheese sauce: Melt 3 tablespoons butter in a saucepan on top of the stove. Quickly stir the flour into the saucepan until the mixture is smooth. Stir in the milk, salt and pepper; continue stirring until the mixture is smooth and thick. Finally, stir in the cheese until it is melted.
Grease a 9x13 inch baking pan.
In a skillet, saute butter and onions. Pour the beaten eggs and ham into the skillet; scramble until set. Fold the mushrooms and cheese sauce into the eggs. Pour the mixture into the prepared baking pan. Cover and chill for 30 minutes or overnight.
Preheat oven to 350 degrees F (175 degrees C).
Bake the egg and mushroom casserole for 30 minutes in the 350 degrees F (175 degrees C) oven.',
                'picture'=>'rdinner1.jpg','category'=>'breakfast', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 2,'user_id'=>'1','short_d'=>'In a small bowl, dissolve yeast in 1/4 cup warm milk. Let stand until creamy, about 10 minutes.
In a large bowl, whisk together the egg yolks',
                'name' => 'Best Homemade Waffles',
                'description'=> 'In a small bowl, dissolve yeast in 1/4 cup warm milk. Let stand until creamy, about 10 minutes.
In a large bowl, whisk together the egg yolks, 1/4 cup of the warm milk and the melted butter. Stir in the yeast mixture, sugar, salt and vanilla. Stir in the remaining 2 1/2 cups milk alternately with the flour, ending with the flour. Beat the egg whites until they form soft peaks; fold into the batter. Cover the bowl tightly with plastic wrap. Let rise in a warm place until doubled in volume, about 1 hour.
Preheat the waffle iron. Brush with oil and spoon about 1/2 cup (or as recommended by manufacturer) onto center of iron. Close the lid and bake until it stops steaming and the waffle is golden brown. Serve immediately or keep warm in 200 degree oven.',
                'picture'=>'rbreakfast2.jpg','category'=>'breakfast', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 3,'user_id'=>'1','short_d'=>'Crack eggs into a mixing bowl. Add 1/4 teaspoon water. Whisk together until just beaten (do not overmix).',
                'name' => 'Parmalet(Crisp Parmesan Omelet)',
                'description'=> 'Crack eggs into a mixing bowl. Add 1/4 teaspoon water. Whisk together until just beaten (do not overmix).
Drizzle olive oil into 8-inch nonstick skillet. Brush evenly over the bottom of the pan. Evenly grate cheese into the skillet approximately 1/2-inch deep (or just shy of 1 ounce).
Place pan over medium-high heat. Cheese will slowly start to melt. When cheese starts to bubble and turn golden brown, about 4 minutes, pour eggs evenly over cheese. Reduce heat to low. Sprinkle with salt, pepper, and cayenne. Cover and let eggs cook on low until they are set, checking after the first 30 seconds. For 2 eggs, this should take about 1 minute, total cooking time. Remove pan from heat. Carefully use a spatula to fold "parmalet" in half. Transfer to serving plate.',
                'picture'=>'rbreakfast3.jpg','category'=>'breakfast', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 5,'user_id'=>'1','short_d'=>'Preheat oven to 350 degrees F (175 degrees C). Grease a 9x13-inch pan.
Prepare the topping by mixing together the brown sugar, cinnamon, nutmeg, and chopped pecans.',
                'name' => 'Apple Butter Spice Cake',
                'description'=> 'Preheat oven to 350 degrees F (175 degrees C). Grease a 9x13-inch pan.
Prepare the topping by mixing together the brown sugar, cinnamon, nutmeg, and chopped pecans.
Sift together the flour, baking powder, baking soda, and salt.
Beat butter and sugar together in a large bowl with an electric mixer until light and fluffy; add eggs one at a time, thoroughly beating each egg into the butter mixture before adding the next. Add apple butter, vanilla, and wheat germ or bran cereal. Add sifted dry ingredients alternately with sour cream; mix well after each addition.
Pour half the batter into the prepared pan; sprinkle with half of the topping. Pour remaining batter into pan and top with the rest of the topping.
Bake in the preheated oven until a tester inserted in the center comes out clean, about 40 minutes.',
                'picture'=>'rdesert1.jpg','category'=>'desserts', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 6,'user_id'=>'1','short_d'=>'Generously butter the inside of 4 (5 1/2 ounce) ramekins. Place them in a casserole dish.
Whisk together egg yolks, eggs, and sugar in a bowl until light, foamy, and lemon colored.',
                'name' => 'Chef John\'s Chocolate Lava Cake',
                'description'=> 'Generously butter the inside of 4 (5 1/2 ounce) ramekins. Place them in a casserole dish.
Whisk together egg yolks, eggs, and sugar in a bowl until light, foamy, and lemon colored.
Melt chocolate and butter in a microwave-safe bowl in 30-second intervals, stirring after each melting, 1 to 3 minutes.
Stir melted chocolate mixture into egg and sugar mixture until combined.
Sift cocoa powder into the mixture; stir to combine.
Sift flour and salt into the mixture; stir to combine into a batter.
Stir vanilla extract into the batter.
Transfer batter to a resealable plastic bag. Snip one corner of the bag with scissors to create a tip.
Divide batter evenly between the prepared ramekins; tap gently on the counter to remove any air bubbles.
Refrigerate 30 minutes.
Preheat an oven to 425 degrees F (220 degrees C).
Arrange the ramekins in a casserole dish. Pour enough hot tap water into the casserole dish to reach halfway up the sides of the ramekins.
Bake in the preheated over for 15-18 minutes. Set aside to cool for 15 minutes.
Loosen the edges from the ramekin with a knife. Invert each cake onto a plate and dust with powdered sugar.',
                'picture'=>'rdesert2.jpg','category'=>'desserts', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7,'user_id'=>'1','short_d'=>'Preheat oven to 350 degrees F (175 degrees C). Grease and flour a 10-inch tube pan. Sift together flour, baking powder, cinnamon, baking soda, nutmeg and salt. Set aside.',
                'name' => 'Sweet Potato Pound Cake',
                'description'=> 'Preheat oven to 350 degrees F (175 degrees C). Grease and flour a 10-inch tube pan. Sift together flour, baking powder, cinnamon, baking soda, nutmeg and salt. Set aside.
In large mixing bowl, cream butter and sugar until light and fluffy. Add mashed sweet potatoes and vanilla. Beat until well blended. Add eggs, one at a time (the batter will look curdled). Add flour mixture to potato mixture. Beat on low until combined.
Pour batter into 10 inch tube pan. Bake at 350 degrees F (175 degrees C) for about 1 hour and 20 minutes, or until a wooden toothpick inserted into cake comes out clean. Cool cake for 20 minutes in the pan, then invert onto serving plate.
To make the glaze: in a small bowl, combine confectioners sugar with 3 to 5 teaspoons orange juice to achieve drizzling consistency. Spoon over warm cake and sprinkle with orange zest if desired.',
                'picture'=>'rdesert3.jpg','category'=>'desserts', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8,'user_id'=>'1','short_d'=>'Combine flour and baking powder in a large bowl. Mix in 1 cup sugar, vanilla sugar, and salt. Add 1 1/3 cups butter and eggs. Knead everything into a smooth dough. Shape dough into a ball, press flat, cover, and chill in the refrigerator 1 hour to overnight.',
                'name' => 'Zwetschgendatschi (German Plum Sheet Cake)',
                'description'=> 'Combine flour and baking powder in a large bowl. Mix in 1 cup sugar, vanilla sugar, and salt. Add 1 1/3 cups butter and eggs. Knead everything into a smooth dough.
Preheat the oven to 350 degrees F (175 degrees C). Grease a baking sheet with butter.
Cut halved plums in half again, without cutting all the way through, so they fan out.
Roll pastry dough out on a lightly floured work surface. Line the bottom and sides of the prepared baking sheet with dough. Mix 2 tablespoons sugar and cinnamon together in a bowl.
Arrange plums side by side on the pastry dough; very small plums should overlap. Dot plums with 2 tablespoons butter and sprinkle with cinnamon sugar and almonds.
Bake in the preheated oven until pastry crust is lightly browned, 30 to 40 minutes. Remove from oven. Allow plum cake to cool, then cut into squares. Serve lukewarm or at room temperature.',
                'picture'=>'rdesert4.jpg','category'=>'desserts', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9,'user_id'=>'1','short_d'=>'Pour water into the bowl of a stand mixer fitted with a paddle attachment. Sprinkle in yeast and let dissolve, about 10 minutes. Add olive oil, melted butter, sugar, salt, cornmeal, and most of the flour. Knead, stopping to scrape down the sides occasionally and adding more ',
                'name' => 'Chicago Deep-Dish Pizza',
                'description'=> '
Pour water into the bowl of a stand mixer fitted with a paddle attachment. Sprinkle in yeast and let dissolve, about 10 minutes. Add olive oil, melted butter, sugar, salt, cornmeal, and most of the flour. Knead, stopping to scrape down the sides occasionally and adding more flour as needed, until smooth and elastic.
Transfer dough to a lightly floured work surface. Knead in extra flour if needed. Roll into a ball and place in a bowl greased with 1/2 teaspoon olive oil. Cover with a plate and let rise in a warm spot until doubled in volume, 1 to 2 hours.
Meanwhile, let pizza sauce simmer in a pot over low heat until very thick, 60 to 90 minutes.
Preheat the oven to 425 degrees F (220 degrees C).
Poke dough to deflate and turn out onto your work surface. Press and stretch out dough into a round shape 3 to 4 inches larger than a 12-inch cast iron skillet. Brush skillet with 1 1/2 teaspoons olive oil. Place dough in the skillet; stretch and pull to evenly distribute it over the bottom and sides.
Lay provolone cheese over the bottom of the crust. Scatter fresh mozzarella on top. Add Italian sausage and firm mozzarella. Ladle pizza sauce generously on top. Grate Parmesan cheese on top. Fold the edges of the crust in towards the center to seal in the sides. Drizzle crust and center with 1 tablespoon olive oil.
Bake in the center of the preheated oven until crust sounds hollow and pizza is beautifully browned, about 35 minutes. Let rest for 10 minutes before slicing.',
                'picture'=>'rdinner2.jpg','category'=>'lunch', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10,'user_id'=>'1','short_d'=>'Place bacon in a large skillet and cook over medium-high heat, turning occasionally, until evenly browned and crisp, about 10 minutes. Drain bacon slices on paper towels. Crumble or finely chop. Drain fat from skillet, reserving 1 tablespoon.',
                'name' => 'Bacon Jalapeno Popper Puffs',
                'description'=> 'Place bacon in a large skillet and cook over medium-high heat, turning occasionally, until evenly browned and crisp, about 10 minutes. Drain bacon slices on paper towels. Crumble or finely chop. Drain fat from skillet, reserving 1 tablespoon.
Mix cream cheese, creme fraiche, green onions, and lime juice together in a bowl. If mixture seems too thick, add enough water to thin it to your preferred consistency.
Place skillet over medium-high heat. Add cold water, butter, reserved bacon fat, and salt. Bring mixture to a simmer; reduce heat to medium. Pour in flour all at once. Stir to mix and mash with a wooden spoon until dough starts to pull together, 2 to 3 minutes. Remove pan from heat; transfer dough to a mixing bowl and let cool for about 5 minutes.
When dough is cool, whisk in 1 egg. Mixture will separate slightly. Continue whisking in first egg until mixture pulls back together. Repeat with the second egg. Scrape down sides of bowl. Add diced jalapeno, bacon pieces, shredded cheese, cayenne pepper, and black pepper. Mix thoroughly with a spatula. Wrap dough in plastic wrap and refrigerate until cool, 30 minutes to 1 hour.
Heat oil in deep fryer to 375 degrees F.
Using a small scoop, scoop out rounds of dough. Drop rounds of dough into hot oil and cook until golden brown and cooked through, 3 to 4 minutes. Work in batches if necessary. Transfer to a cooling rack.
serve with dipping sauce garnished with a few green onion slices.',
                'picture'=>'appetizersbg.jpg','category'=>'appetizers', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11,'user_id'=>'1','short_d'=>'Bring chicken broth to a boil in a pot; add American cheese, bring to a simmer, reduce heat to low, and cook, stirring frequently, until the cheese melts into the broth, about 5 minutes.',
                'name' => 'Loaded Queso Fundido',
                'description'=> 'Bring chicken broth to a boil in a pot; add American cheese, bring to a simmer, reduce heat to low, and cook, stirring frequently, until the cheese melts into the broth, about 5 minutes.
Heat olive oil in a skillet over medium-high heat; saute chicken and chorizo in oil until the chicken is no longer pink in the center, 5 to 7 minutes. Add mushrooms, tomatoes, onion, jalapenos, green onions, and garlic; saute until all vegetables are tender, 7 to 10 minutes.
Stir chicken mixture into the melted cheese; bring to a simmer. Stir Cheddar cheese into the mixture and cook until completely melted, about 5 minutes.',
                'picture'=>'rappetizer1.jpg','category'=>'appetizers', 'created_at' => new DateTime, 'updated_at' => new DateTime],


        );

        // Uncomment the below to run the seeder
        DB::table('recipes')->insert($recipes);
    }
}
