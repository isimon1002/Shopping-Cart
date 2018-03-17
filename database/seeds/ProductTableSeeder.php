<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        'imagePath' => 'https://img1.od-cdn.com/ImageType-400/1493-1/922/0CD/7B/%7B9220CD7B-7CA8-4202-AF3A-620105706D98%7DImg400.jpg',
        'title' => 'Ender\'s Game',
        'description' => 'In order to develop a secure defense against a hostile alien race\'s next attack, government agencies breed child geniuses and train them as soldiers. A brilliant young boy, Andrew "Ender" Wiggin lives with his kind but distant parents, his sadistic brother Peter, and the person he loves more than anyone else, his sister Valentine. Peter and Valentine were candidates for the soldier-training program but didn\'t make the cut--young Ender is drafted to the orbiting Battle School for rigorous military training.  Ender\'s skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers, Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. Is Ender the general Earth needs? But Ender is not the only result of the genetic experiments. The war with the Buggers has been raging for a hundred years, and the quest for the perfect general has been underway for almost as long. Ender\'s two older siblings are every bit as unusual as he is, but in very different ways. Between the three of them lie the abilities to remake a world. If the world survives, that is.',
        'price' => 9.99
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'https://vignette.wikia.nocookie.net/ansible/images/f/f2/EnderInExileCoverMain.jpg/revision/latest/scale-to-width-down/335?cb=20160610140007',
        'title' => 'Ender in Exile',
        'description' => 'In Ender\'s Game, the world\'s most gifted children were taken from their families and sent to an elite training school. At Battle School, they learned combat, strategy, and secret intelligence to fight a dangerous war on behalf of those left on Earth. But they also learned some important and less definable lessons about life. After the life-changing events of those years, these children―now teenagers―must leave the school and re-adapt to life in the outside world. Having not seen their families or interacted with other people for years―where do they go now? What can they do? Ender fought for humanity, but he is now reviled as a ruthless assassin. No longer allowed to live on Earth, he enters into exile. With his sister Valentine, he chooses to leave the only home he\'s ever known to begin a relativistic―and revelatory―journey beyond the stars.',
        'price' => 8.99
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'https://vignette.wikia.nocookie.net/ansible/images/1/1b/SpeakerForTheDeadCoverMain.jpg/revision/latest?cb=20160610140846',
        'title' => 'Speaker for the Dead',
        'description' => 'In the aftermath of his terrible war, Ender Wiggin disappeared, and a powerful voice arose: The Speaker for the Dead, who told the true story of the Bugger War. Now, long years later, a second alien race has been discovered, but again the aliens\' ways are strange and frightening...again, humans die. And it is only the Speaker for the Dead, who is also Ender Wiggin the Xenocide, who has the courage to confront the mystery...and the truth.',
        'price' => 10.99
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'https://vignette.wikia.nocookie.net/ansible/images/3/3e/XenocideCoverMain.jpg/revision/latest?cb=20160608202220',
        'title' => 'Xenocide',
        'description' => 'The war for survival of the planet Lusitania will be fought in the heart of a child named Gloriously Bright. On Lusitania, Ender found a world where humans and Pequeninos and the Hive Queen could all live together; where three very different intelligent species could find common ground at last. Or so he thought. Lusitania also harbors the Descolada, a virus that kills all humans it infects, but which the Pequeninos require in order to become adults. The Starways Congress so fears the effects of the Descolada, should it escape from Lusitania, that they have ordered the destruction of the entire planet, and all who live there. The Fleet is on its way, a Second Xenocide seems inevitable.',
        'price' => 9.99
        ]);
        $product->save();
        
        $product = new \App\Product([
        'imagePath' => 'https://vignette.wikia.nocookie.net/ansible/images/f/f1/ChildrenOfTheMindCoverMain.jpg/revision/latest/scale-to-width-down/300?cb=20160610153015',
        'title' => 'Children of the Mind',
        'description' => 'The planet Lusitania is home to three sentient species: the Pequeninos; a large colony of humans; and the Hive Queen, brought there by Ender. But once again the human race has grown fearful; Starways Congress has gathered a fleet to destroy Lusitania. Jane, the evolved computer intelligence, can save the three sentient races of Lusitania. She has learned how to move ships outside the universe, and then instantly back to a different world, abolishing the light-speed limit. But it takes all the processing power available to her, and Starways Congress is shutting down the Net, world by world. Soon Jane will not be able to move the ships. Ender\'s children must save her if they are to save themselves.',
        'price' => 8.99
        ]);
        $product->save();
    }
}
