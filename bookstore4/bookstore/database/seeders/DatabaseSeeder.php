<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'John',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'Homer',
                'email' => 'shelockhome@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'shanelynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Dragon',
                'email' => 'dragonball@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Kelly',
                'email' => 'kellycris@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('authors')->insert([
            [
                'name' => 'Aoyama Gosho',
            ],
            [
                'name' => 'Fujiko',
            ],
            [
                'name' => 'Polo',
            ],
            [
                'name' => 'Tonny Devin',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Commic',
            ],
            [
                'name' => 'Economy',
            ],
            [
                'name' => 'Textbook',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'author_id' => 1,
                'product_category_id' => 1,
                'name' => 'Superhero Academy',
                'description' => 'Because of that giant, the surrounding area is in ruins! He kept saying "go to master" - was it Shigaraki…? Can not! If he enters the city, the people won\'t be able to resist! Even the students of Yuei High will be in danger! Is there a problem on the Jaku side of the hospital!? Alright, I\'ll stop him bro!!
                    “Plus Ultra”!!
                    KOHEI HORIKOSHI',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 2,
                'author_id' => 3,
                'product_category_id' => 3,
                'name' => 'Grade 12 calculus math book',
                'description' => 'Grade 12 Textbook - Lesson Book (Set of 14 Books) (2022)
                    one of the must-have books, when English is becoming the middle language of the whole world',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 3,
                'author_id' => 3,
                'product_category_id' => 1,
                'name' => 'Monster Detective',
                'description' => 'The story takes place in a small village, there is a boy who is estranged from the villagers and they call him Dorotabo. Until one day, a detective named Inugami came down from Tokyo to investigate the mysterious happenings in the village. The two met, from here the wheel of the boy\'s destiny began to roll, and at the same time he also knew his true identity. A thrilling, fascinating story that contains many mythological elements about monsters in Japanese culture.',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 4,
                'author_id' => 4,
                'product_category_id' => 1,
                'name' => 'Heterosexual Pub',
                'description' => 'In the medieval country of Aitheria, there was a tavern named Nobu. This tavern was originally a restaurant on a corner of a Japanese street, but for some reason its main door was connected to Atheria Castle. The lazy guard, the red-headed lady, the difficult tax collector, etc., the indigenous people in the opposite world are in turn attracted when enjoying the unique traditional Japanese dishes. The otherworldly pub with exotic delicacies is officially open!',
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 5,
                'author_id' => 2,
                'product_category_id' => 3,
                'name' => '9th grade English book',
                'description' => 'Grade 9 Textbook - Lesson Book (Set of 13 Books) (2021)
                    one of the must-have books, when English is becoming the middle language of the whole world',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 6,
                'author_id' => 1,
                'product_category_id' => 1,
                'name' => 'Dr.Stone',
                'description' => 'Science Kingdom vs. Science Kingdom!! The confrontation between the two scientists, Senku and Dr. Zeno, turns into a fast-paced battle aimed at the enemy science leader!! Meanwhile, the sniper Stanley\'s assassin\'s bullet secretly approaches the Perseus!!',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 7,
                'author_id' => 3,
                'product_category_id' => 1,
                'name' => 'Vung Saga',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 8,
                'author_id' => 2,
                'product_category_id' => 1,
                'name' => 'Tokyo Revenger',
                'description' => 'Takemichi time-traveled back to middle school 12 years ago to save Hinata, the ex-girlfriend he loved dearly, who was murdered by the cruel gang "Tokyo Manji". Knowing that the dispute with Moebius was the source of Toman\'s division, Takemichi tried to convince Mikey to stop, but they were ambushed by Moebius! Takemichi is twirled between sudden changes and an ever-changing past! Then a dangerous blade approached Draken!',
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 9,
                'author_id' => 3,
                'product_category_id' => 2,
                'name' => 'Life is short, don\'t sleep long',
                'description' => '“Every choice counts. Every step is important. Life goes on its way, not ours. Please be patient. Trust. Be like a stone cutter, rhythmically, day after day. Finally, a single cut will break the rock and reveal the diamond. People who are full of enthusiasm and dedication to what they do are never denied. That\'s the truth."

                    With concise, easy-to-understand words about life\'s experiences and reflections, Robin Sharma continues his writing style from the book The Great Thing in Daily Life to bring readers such articles as the heart. both sincere and profound.',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 10,
                'author_id' => 2,
                'product_category_id' => 1,
                'name' => 'King of Inventions',
                'description' => '"Peace Electronics" is just a shop hidden in a small commercial street, but possesses the most modern technology in the world. Because of that, their technique has become the target of many people. Will they be able to prevent others from using their techniques to do bad things!?
                    It\'s time for Kentaro to strike!!
                    Tatsuki Nohda
                    “When I was a kid, I used to spend all my monthly allowance to buy plastic models and then eagerly install them the same day. Now, it only costs a few dong a month, but the piles of unfinished model boxes are still piled up like a mountain. So how is it!? Oh my passion for modeling!!”',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 11,
                'author_id' => 4,
                'product_category_id' => 2,
                'name' => 'The power of subconscious mind',
                'description' => 'As one of the most critically acclaimed and best-selling art books of all time, The Power of Subconscious Mind has helped millions of readers around the world achieve their important life goals in one simple way. Simply change your mind.

                    The Power of Subconscious Mind introduces and explains methods of focusing the mind to remove the subconscious barriers that keep us from achieving what we want.

                    The Power of the Subconscious is not only inspiring to the reader, but it is also very practical because it is illustrated with vivid examples in everyday life. From there, The Power of Subconscious Mind helps readers use the extraordinary intellectual potential hidden within each person to build confidence, build harmonious relationships, achieve career success, overcome obstacles. fears and phobias, dispel negative habits, and even teach us how to heal physical and mental wounds for peace and complete happiness in life.',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 12,
                'author_id' => 1,
                'product_category_id' => 3,
                'name' => 'Technology - Installing the electrical network in the house',
                'description' => 'Grade 9 Textbook - Lesson Book (Set of 13 Books) (2021)
                    one of the must-have books, when English is becoming the middle language of the whole world',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 13,
                'author_id' => 3,
                'product_category_id' => 3,
                'name' => 'Study well in biology',
                'description' => 'Grade 12 Textbook - Lesson Book (Set of 14 Books) (2022)
                    one of the must-have books, when English is becoming the middle language of the whole world',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 14,
                'author_id' => 2,
                'product_category_id' => 2,
                'name' => 'Practice critical thinking',
                'description' => 'Product prices on Fahasa.com include tax in accordance with applicable law. Besides, depending on the type of product, form and delivery address, there may be additional costs such as packing surcharge, shipping fee, bulky goods surcharge, ...
As you can see, the key to being a good critical thinker is self-awareness. You need to honestly evaluate what you previously thought was true, as well as the thought process that led you to those conclusions. If you don\'t have logical arguments, or if your thinking is influenced by experiences and emotions, then consider using critical thinking! You need to realize that humans are, from birth, very good at giving reasons for their flawed thoughts. If you are making these false conclusions it is a fact that your beliefs are often at odds with each other and that is often the result of confirmation bias, but if you know this, then you are close. than to the truth!',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 15,
                'author_id' => 1,
                'product_category_id' => 1,
                'name' => "Goddess is afraid of communication",
                'description' => 'At Onemine\'s invitation, the beauty who is afraid of communication, Komi, tries to make friendship chocolates for her classmates. Male or female, on Valentine\'s Day, even Tadano has been nervous since morning. Shoe cabinets, desk drawers are carefully searched. One day with many scattered thoughts, Komi gathered all her courage, gathered all her strength and... ran away!

                    I invite you to read the next episode of the funny story about the female lead\'s heart pounding and see if she dares to give chocolates!!',
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => false,
                'tag' => '',
            ],
            [
                'id' => 16,
                'author_id' => 2,
                'product_category_id' => 2,
                'name' => 'Well-spoken will get the world',
                'description' => 'In the modern information society, silence is no longer gold, if you don\'t know how to communicate, even gold will be buried. In a person\'s life, from job application to promotion, from love to marriage, from marketing to negotiation, from etiquette to working... it is impossible not to need communication skills and abilities. If you eat well, speak well, wherever you go, whatever you do, you will have advantages. Not well-spoken, all four sides are difficult obstacles.
Have you ever lost a job, missed a great relationship, or simply found it difficult to talk to people? Have you ever thought that your speaking skills are not good?

So how to improve and avoid encountering such situations? How to speak skillfully? In different situations, with different people, how to talk, and how to present difficult things? Read it now',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 17,
                'author_id' => 1,
                'product_category_id' => 2,
                'name' => 'The complete book of numerology',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 18,
                'author_id' => 4,
                'product_category_id' => 3,
                'name' => 'Chemistry reference book',
                'description' => 'Grade 12 Textbook - Lesson Book (Set of 14 Books) (2022)
                    one of the must-have books, when Chemistry is becoming the middle language of the whole world',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 19,
                'author_id' => 1,
                'product_category_id' => 1,
                'name' => 'Conan',
                'description' => 'Kudo Shinichi, 17 years old, is a very popular high school detective who often helps the police solve difficult cases. While tracking a blackmail case, he was discovered by a member of the mysterious Black Organization. They knocked down Kudo Shinichi, knocked him unconscious, and forced him to drink the poison APTX - 4869 that the Foundation had just prepared to cover up the clues. However, the drug did not kill him, but caused a side effect that caused him to shrink into an elementary school kid. After that, he claimed to be Edogawa Conan and was adopted by Mori Ran - his childhood best friend as Kudo Shinichi - and brought back to her father Mori Kogoro\'s detective agency. Throughout the series, Conan has been quietly assisting Mr. Mori in solving cases. At the same time, he also had to enter the 1st grade of elementary school, thereby making friends with many people and forming the Detective Boys Team.

    Later, another reluctant elementary school student named Haibara Ai entered Conan\'s class and revealed that she was a member of the Organization with the alias Sherry and that she was the one who created the APTX drug - 4869 that Conan was forced to drink, because he wanted to escape the Black Organization, so he took the pill to commit suicide. As a result, instead of dying, Haibara\'s body shrank like Conan\'s due to the side effects of the drug. In several cases involving the Black Organization, Conan assisted FBI and CIA agents.',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 20,
                'author_id' => 4,
                'product_category_id' => 2,
                'name' => 'Get human heart',
                'description' => 'Why is Dac Nhan Tam always in the Top best-selling books in the world?
Because it\'s a book EVERYONE SHOULD READ.

    Now a misunderstanding has occurred. Although Dac Nhan Tam is a title most people know, because of its fame and popularity, some people are "afraid" to read it. The reason is because they think this is a book "teaching people" so they are afraid. Perhaps because when introducing the book, people are always associated with the description that this is "the art of dealing with people", "the art of winning people\'s hearts"… These phrases are no longer relevant today. , which feels strange and unrealistic.
    The issues pointed out in it are the basic of human-to-human behavior. If interpreted in words now, it can be called a "curriculum" to help understand yourself - understand people to succeed in communication. Does anyone live without communication? How many people are tired and miserable every day because of communication problems? Therefore, Dac Nhan Tam is a book for everyone. And that\'s really the reason why Dac Nhan Tam is always in the Top best-selling books in the world, even though it was born nearly 80 years ago. Since that day, Dac Nhan Tam has become a book that won\'t stay still. -on-shelf. In addition to the idea of ​​being reprinted continuously around the world, this phrase also has another meaning, that is, the book has been continuously added and edited by Mr. Dale with new stories and new expressions. It is considered as a book with a wide spread, translated into most languages ​​​​in the world and always in the Top bestsellers in every publishing market.',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 21,
                'author_id' => 3,
                'product_category_id' => 3,
                'name' => 'Conquer high scores in biology',
                'description' => 'Grade 12 Textbook - Lesson Book (Set of 14 Books) (2022)
                    one of the must-have books, when Biolody is becoming the middle language of the whole world',
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20.jpg',
            ],
            [
                'product_id' => 21,
                'path' => 'product-21.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'qty' => 10,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'qty' => 2,
            ],
            [
                'product_id' => 1,
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 1,
                'email' => 'johndoe@gmail.com',
                'name' => 'John',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'kellycris@gmail.com',
                'name' => 'Kelly',
                'messages' => 'Good !',
                'rating' => 4,
            ],
        ]);
    }
}
