<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// class Job extends Model {
//     use HasFactory;
//     protected $table = 'tales';

//     protected $fillable = ['title', 'salary'];
// }



class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Barbeque Party at Berglunds', 
                'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
            ],
            [
                'id' => 2,
                'title' => 'The Dev Pirate Princess Redesigns Our POW! Website!',
                'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
            ],
            [
                'id' => 3,
                'title' => 'Whisper of the Heart, Studio Ghibli',
                'salary' => 'Finding a Chonky Cat riding a train, Shizuku follows it to discover an antique shop run by Shirō. Shizuku is ecstatic about finding "a place where stories begin".'
            ],
            [
                'id' => 4,
                'title' => 'My favourite Robin Hood movie',
                'salary' => 'I remember watching that Robin Hood movie in the cinema with my dad. MAN I loved that movie. I drew Robin Hood EVERY day for months in day care. And I drew that hypnist snake Hiss also. I drew Hiss with his spiralling eyes. I wish I had some of those drawings today to show The Pirate Princess.'
            ],
            [
                'id' => 5,
                'title' => 'Hacking around the christmas tree it is a hacky holidaaay',
                'salary' => 'The Pirate Princess and Captain Ola Vea drags the christmas tree home on the skateboard. 🛹 Singing christmas songs slightly too loud and slightly off key. 🔑🎵'
            ],
            [
                'id' => 6,
                'title' => 'We all 3 went to the Structured Content Conference and got ideas 💡',
                'salary' => 'Lillian (7 🏴‍☠️👸) is drawing a tall tale about two girls who find a hidden key to a dangerous door that leads to a forest with a monster filled labyrith.'
            ]   
        ];
    }
}