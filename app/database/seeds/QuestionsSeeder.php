<?php
class QuestionsSeeder extends Seeder {
	public function run() {

	// 1
		$question = new Question();
		$question->question = "You awaken to see naught but darkness. You feel cold stone below your back. The sound of running water cascades in the distance, and you can hear the pitter-patter of small paws surrounding you. <br> You hear a voice say, 'I did it.'";
		$question->is_ending = "No";
		$question->save();

	// 2
		$question = new Question();
		$question->question = "You attempt to get up, but find that you are held down by chains. <br> You exert all your strength into breaking them, but it is to no avail. Suddenly, you hear the voice from before calls your name.";
		$question->is_ending = "No";
		$question->save();

	// 3
		$question = new Question();
		$question->question = "'Why the f*** is it so dark?!' You call out. <br> The voice from before responds, 'All is dark to those who do not wish to see!'";
		$question->is_ending = "No";
		$question->save();

	// 4
		$question = new Question();
		$question->question = "You continue lying down forever, convinced of your fate despite never having really tried to overcome it. <br> 'Hello?' a voice asks from the darkness. You do not answer. You instead just lie down, knowing that no matter what you do, it doesn't matter";
		$question->is_ending = "Yes";
		$question->save();

	// 5
		$question = new Question();
		$question->question = "The voice from before calls out, 'Dude! Why are you screaming?!'";
		$question->is_ending = "No";
		$question->save();

	// 6
		$question = new Question();
		$question->question = "'That isn't important,' the voice responds, 'what matters is getting you out of here. My name is...not important. I'm a wizard'.";
		$question->is_ending = "No";
		$question->save();

	// 7
		$question = new Question();
		$question->question = "'You're in a dungeon,' the voice responds, 'you've been down here for the past twenty years, but that isn't what matters. What matters is getting you out of here. My name is...not important. I'm a wizard.'";
		$question->is_ending = "No";
		$question->save();

	// 8
		$question = new Question();
		$question->question = "'Whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa! Hold on a second!' The voice calls out.";
		$question->is_ending = "No";
		$question->save();

	// 9
		$question = new Question();
		$question->question = "The voice falls silent";
		$question->is_ending = "Yes";
		$question->save();

	// 10
		$question = new Question();
		$question->question = "'Yes, but that doesn't matter,' the wizard responds, 'we don't have much time. Will you come with me?'";
		$question->is_ending = "No";
		$question->save();

	// 11
		$question = new Question();
		$question->question = "'NO!!!!!' The wizard screams, as if some personal nerve has been struck. <br> '....no...not at all. Will you come with me or not?'";
		$question->is_ending = "No" ;
		$question->save();

	// 12
		$question = new Question();
		$question->question = "'WILL YOU EVER STOP SCREAMING?!'";
		$question->is_ending = "No";
		$question->save();

	// 13
		$question = new Question();
		$question->question = "You hear footsteps as the voice leaves you behind";
		$question->is_ending = "Yes";
		$question->save();

	// 14
		$question = new Question();
		$question->question = "You feel the chains snap off of you and you find the strength to stand. <br> 'Now, face me! For I am the one who locked you up down here!' The wizard cries out. <br> You can tell the wizard is close enough to attack, but you feel the wizard might also listen to reason.";
		$question->is_ending = "No";
		$question->save();

	// 15
		$question = new Question();
		$question->question = "You attack the wizard and hear his body fall to the floor. You hear the sound of a door opening in the distance. What do you do?";
		$question->is_ending = "No";
		$question->save();

	// 16
		$question = new Question();
		$question->question = "You stand down, refusing to attack the wizard. <br> 'What?' The wizard asks, 'Why are you not attacking me? I just said that I am the one who locked you up in here!'";
		$question->is_ending = "No";
		$question->save();

	// 17
		$question = new Question();
		$question->question = "'We are the Knights who say...Ni!!!' You shout. You hear nothing in response. You call out again, and receive no answer";
		$question->is_ending = "Yes";
		$question->save();

	// 18
		$question = new Question();
		$question->question = "'NO!' the wizard screams, 'NOT THIS AGAIN!!!' You see a ball of fire form in the distance, and as it hurtles towards you, you scream one last time";
		$question->is_ending = "Yes";
		$question->save();

	// 19
		$question = new Question();
		$question->question = "You walk towards the sound of the open door, and gradually, light from a torch comes into view. You see another door in the distance, lit by several other torches. Now, the dungeon is entirely visible. You go up to the door and open it. You step into an enormous room without a ceiling. The room is covered in greenery and treasure, and on the far end of the room, you see a dragon. You start to turn tail and run, but you hear a booming masculine voice call out. 'Stand thy ground, brave traveller! Behold, for I am a mighty dragon! Thou mayst passeth me by unscathed on condition that thou answereth a veritable gauntlet of riddles!' The dragon calls out. 'Mine first riddle goeseth thusly: What is thy name?'";
		$question->is_ending = "No";
		$question->save();

	// 20
		$question = new Question();
		$question->question = "...Wait.....really?";
		$question->is_ending = "No";
		$question->save();

	// 21
		$question = new Question();
		$question->question = "'Well, I do!' The wizard yells. You see a fireball forming in the distance, and as it hurtles towards you, you wish that you hadn't been such a weeney.";
		$question->is_ending = "Yes";
		$question->save();

	// 22
		$question = new Question();
		$question->question = "'You...you...you do?' The wizard asks with tears evident in his voice, 'Oh, brave traveler, I had always hoped, but I didn't dare expect it!' You hear a door open in the distance and feel a veiny old hand take your hand. As you and the wizard walk off into the distance, you do not know where you are heading, but you know that, as long as the two of you are together, no adventure, no threat of danger is too daunting. <br> Congratulations! You got the True Love ending! (Ending 1 out of 10)";
		$question->is_ending = "Yes";
		$question->save();

	// 23
		$question = new Question();
		$question->question = "'Because as horrid as this prison is, it is not nearly as dark as the prison inside of all of us' You say. You hear no response. You do, however, hear the sound of cloth on stone, and you infer that the wizard is curled on the ground, writhing in existential despair. Now you will never escape.";
		$question->is_ending = "Yes";
		$question->save();

	// 24
		$question = new Question();
		$question->question = "'His name is my name, too!' The dragon says, 'but it is not thy name.' You feel your body melt as the dragon breathes fire upon you";
		$question->is_ending = "Yes";
		$question->save();

	// 25
		$question = new Question();
		$question->question = "'Yea, verily I say unto thee, that is thy name!' The dragon roars. 'Mine second riddles goesetheth thusly: What has four legs in the morning, two in the afternoon, and three at night?'";
		$question->is_ending = "No";
		$question->save();

	// 26
		$question = new Question();
		$question->question = "The dragon makes a sound similar to an obnoxious 'wrong answer' buzzer and breatehs fire upon you.";
		$question->is_ending = "Yes";
		$question->save();

	// 27
		$question = new Question();
		$question->question = "'I will not forget thy name, but evidently thou hast' The dragon calls out. You feel your skin melt as the dragon breathes fire on you.";
		$question->is_ending = "Yes";
		$question->save();

	// 28
		$question = new Question();
		$question->question = "You're serious?";
		$question->is_ending = "No";
		$question->save();

	// 29
		$question = new Question();
		$question->question = "'Yea, verily I say unto thee, that is the answer!' The dragon roars. 'I have but one final riddle, and it goesethethethetheth thusly: What is thy greatest desire?'";
		$question->is_ending = "No";
		$question->save();

	// 30
		$question = new Question();
		$question->question = "After all this time, you're just going to stay here?";
		$question->is_ending = "No";
		$question->save();

	// 31
		$question = new Question();
		$question->question = "'Indeed, that is what thou desirest most!' The dragon roars, 'Thou mayst passeth my byeth unscathed!' The dragon takes off flying through a hole in the ceiling, and you see another door on the opposite end of the dungeon. You go to the door and open it. As you do, you are met by a woman with a perm, an itchy looking red dress, and a string of pearls around her neck. <br> 'Hi there, neighbor!' The woman says to you, 'My name is Carrie Ledbetter. I'm with the devonstormholdshire homeowner's association, and I'm taking a survey. If you have time, I'd like to ask you a single question!' Before you have a chance to tell her to buzz off, the woman continues. 'When we enact our new 'if you make a leaf pile in autumn we'll have your family burned alive' edict, will you comply?'";
		$question->is_ending = "No";
		$question->save();

	// 32
		$question = new Question();
		$question->question = "'T..Truly?!' The dragon asks with tears in its eyes. 'Oh, brave traveller, I always hoped, but I never dared expect it! Hop on my back, and we'll leave this place together.' You hop onto the dragon's mighty back, and you feel the warmth of its body under you. You hold on tight to its spines as it takes off and flies outside of a hole in the ceiling. As you and the dragon fly out into the darkness of the night, you do not know what fate has in store, what adventures and dangers await you outside of the dungeon walls. But you know that, as long as the two of you are together, no adventure, no threat of danger is too daunting. <br> Congratulations! You got the true (if unconventional) love ending (Ending 2 out of 10)";
		$question->is_ending = "Yes";
		$question->save();

	// 33
		$question = new Question();
		$question->question = "'Wrong!' The dragon roars, 'Nobody's greatest desire is that!' You feel your skin melt as the dragon breathes fire upon you.";
		$question->is_ending = "Yes";
		$question->save();

	// 34
		$question = new Question();
		$question->question = "You decide that, even though the exit is right in front of you, you are more than content to stay in your dark little dungeon. After all, your dark little dungeon protects you, and without your dark little dungeon, who would build the roads? I mean, really, when you stop to think about it, your dark little dungeon is the price we pay for living in a civilized society, and without your dark little dungeon, the terrorists win! <br> Congratulations! You got the Metaphor for Statism Ending (Ending 3 out of 10)!";
		$question->is_ending = "Yes";
		$question->save();

	// 35
		$question = new Question();
		$question->question = "'Y..y..you do?' The woman asks with tears in her eyes. 'Oh, brave traveller, I always hoped, but I never dared expect it. Come with me, and we'll be homeowners together!' You take the woman's hand in yours, and you walk off together. As you and the woman walk further into the darkness of the dungeon, you don't know what challenges await you or what mountains you will have to climb. But as long as you are together, you know that no adventure, no threat of death is too daunting. <br> Congratulations! You got the True (Suburban) Love Ending (Ending 4 out of 10)";
		$question->is_ending = "Yes";
		$question->save();

	// 36
		$question = new Question();
		$question->question = "'Oh, well, I guess I'm going to have to kill you, then!' the woman responds. The woman starts twisting and turning and she turns into a hideous monster five times your size. The woman picks you up and rips you in half.";
		$question->is_ending = "Yes";
		$question->save();

	// 37
		$question = new Question();
		$question->question = "'Devonstormholdshire? What's that?' You ask. 'Its where we are!' The woman responds, 'You mean you don't own a home here? Well, you're in luck! If you agree to sign over your soul to satan, you can be the owner of all the real estate property in Devonstormholdshire! What do you say?'";
		$question->is_ending = "No";
		$question->save();

	// 38
		$question = new Question();
		$question->question = "'Very good, very good!' the woman responds. 'Since you have chosen the correct answer, I will take you where you need to go. Follow me!' The woman starts walking away, and you follow. You find yourself in a long, dark corridor, and it feels like you walk for hours. Finally, you and the woman come to a door. <br> 'The president of the homeowner's association is through this door. Speak with him, and you may leave this dungeon yet,' the woman says. The door opens slowly with a creak. You walk in and see a skinny old man with a long beard sitting on a cushion surrounded by burning sticks of incense. 'Hello, traveller. I have been expecting you. I am called 'the sage',' the man says. 'It may be that you can leave this dungeon, but in order to tell, you must know yourself. It can be a terror-inducing experience to undergo, but it is the only way that you can leave this place. Are you prepared?'";
		$question->is_ending = "No";
		$question->save();

	// 39
		$question = new Question();
		$question->question = "'Very well!' The woman says. 'You now own all of the real estate in Devonstormholdshire! I and every citizen here are now at your disposal...master.' <br> Congratulations! You got the Opportunist Ending (Ending 5 out of 10)";
		$question->is_ending = "Yes";
		$question->save();

	// 40
		$question = new Question();
		$question->question = "'Well, here is the thing...' the Sage begins, 'In the original command-line version of this game, the developer had programmed a bunch of different questions that focused on your player stats. I would ask about your speed stats and choices you had made previously, and it was really freaking sweet'. The sage looks down. 'However,' he begins, 'the developer didn't want to have to re-program all the variables to make it work and he also thought it would be quite the statement to make the version of this game that is accessable to everybody a less cool version. So I'm just going to skip ahead to the last question that I ask you in the original command-line version of Battlequest. How is the wizard you met at the beginning?'";
		$question->is_ending = "No";
		$question->save();

	// 41
		$question = new Question();
		$question->question = "'Then I am afraid you will never leave this place' the Sage says with sadness in his voice. Everything goes dark.";
		$question->is_ending = "Yes";
		$question->save();

	// 42
		$question = new Question();
		$question->question = "'In a way, yes he is,' the sage says. 'Venture forth, and all will be revealed.' <br> You are now in a pitch black void with no ceiling and no floor and no walls. You see two figures in the distance and walk towards them. When you reach them, you find that they are two old men. The one on the left has white hair and wears a white robe. The one on the right has black hair and wears a black robe. 'We greet you, traveller, we are good and evil,' the figures say in tandem. 'We have been expecting you for quite some time. We know you must have many questions, and now they shall be answered. You have come to us many times before, and every time, we offered to grant you a single wish. Every time, you chose to save the world. The truth is that, should you leave this dungeon, doom would befall all the earth. When you learned of this, you chose to wish for a way to stop yourself from ever leaving this dungeon. You made your wish, and you returned to this world as the wizard you faced when you awoke. That is right, the wizard you faced when you awoke was none other than yourself. Now we extend this same offer of a granted wish to you. Will you brave the death you know awaits you in order to save the world? Will you shirk the responsibility that has befallen you so many times before? Or will you do something else entirely? You must choose.' This is the final decision of the game, and the ramifications of your wish will be earth-shattering. Choose Wisely.";
		$question->is_ending = "No";
		$question->save();

	// 43
		$question = new Question();
		$question->question = "The sage shakes his head. 'There are many True Love endings for this game,' he starts, 'however, I am not one of them.' Knowing that the sage will never love you, you walk back to the cell in which you started. As you stare into the dark abyss of your cell, you realize that even the smallest adventures, even the smallest threats of danger are too daunting to bear. <br> Congratulations! You got the Forever Alone Ending (Ending 6 out of 10)!";
		$question->is_ending = "Yes";
		$question->save();

	// 44
		$question = new Question();
		$question->question = "'I choose to save the world,' you say, 'I will become the wizard, as I have many times before, if it means that the world will be spared the doom that will befall it.' Good and Evil nod their heads, smiles on their faces. 'As you wish,' they say. You feel yourself aging rapidly. You feel a beard begin to grow, and you feel the power of magic coursing through your veins. You close your eyes as great power washes over you. You open your eyes again and find yourself in the dungeon you started in. You see yourself chained to the ground on the inside of a cell, but you are on the outside looking in. You realize that you have indeed gotten your wish, and though you will certainly die, you know that because of your sacrifice, the world will live to see another day. <br> 'I did it,' You say. <br> Congratulations! You got the Hero ending! (Ending 7 out of 10)";
		$question->is_ending = "Yes";
		$question->save();

	// 45
		$question = new Question();
		$question->question = "'I have already sacrificed enough for this world,' you say, 'I wish to leave this dungeon.' Good and Evil nod their heads, looks of disappointment on their faces. 'If that is what you wish, then it will be so,' they say. You feel a bright light on your face, causing you to squint. As your eyes adjust, you realize that you are looking directly at the sun. You look down upon a green meadow and realize that you are outside of the dungeon, finally. A shadow falls over the meadow, and you look up and see giant stones and pillars of fire falling from the sky. You realize that good and evil were telling the truth, and now the world will face its doom. As you look upon the burning world, you feel a small pang of guilt, but you know that you have sacrifed enough, and that even if the world had to burn, it was time for your day in the sun. <br> Congratulations! You got the Villain Ending (Ending 8 out of 10)!";
		$question->is_ending = "Yes";
		$question->save();

	// 46
		$question = new Question();
		$question->question = "'I want nothing more than to spend the rest of my life with the people that I love...the two of you, Good and Evil!' You say. 'Oh, traveller, we always hoped, but we didn't dare expect it!' Good and Evil say with tears in their eyes. 'Come with us, and we will face the world together!' You take the hands of Good and Evil in yours and the three of you walk into the distance. As the three of you walk deeper into the abyss, you don't know what awaits you. But you know that as long as the three of you are together, no adventure, no threat of danger is too daunting. <br> Congratulations! You got the True (plural) Love Ending (Ending 9 out of 10)!";
		$question->is_ending = "Yes";
		$question->save();

	// 47
		$question = new Question();
		$question->question = "'I want to ban all books with any sexualized content in them!' You say with pride. Good and Evil look at each other, confused. 'Are...are you sure?' they ask. 'Yes, I'm sure! We need to protect our children!' You respond. You feel a rush of power, and somehow, you know that it has been done. You don't know what will become of the world or of you, but you know that no matter what, the children of the world will not grow up with any ideas that are different than yours. <br> Congratulations! You got the Soccer Mom Ending (Ending 10 out of 10)!";
		$question->is_ending = "Yes";
		$question->save();


	}
}
?>