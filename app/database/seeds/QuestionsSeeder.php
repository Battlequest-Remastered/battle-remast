<?php
class QuestionsSeeder extends Seeder {
	public function run() {

	// 1
		$question = new Question();
		$question->question = "You awaken to see naught but darkness. You feel cold stone below your back. The sound of running water cascades in the distance, and you can hear the pitter-patter of small paws surrounding you. You hear a voice say, 'I did it.' What do you do?";
		$question->is_ending = "No";
		$question->save();

	// 2
		$question = new Question();
		$question->question = "You attempt to get up, but find that you are held down by chains. You exert all your strength into breaking them, but it is of no avail. Suddenly, you hear the voice from before calls your name.";
		$question->is_ending = "No";
		$question->save();

	// 3
		$question = new Question();
		$question->question = "'Why the f*** is it so dark?!' You call out. The voice from before responds, 'All is dark to those who do not wish to see!'";
		$question->is_ending = "No";
		$question->save();

	// 4
		$question = new Question();
		$question->question = "You continue lying down forever, convinced of your fate despite never having really tried to overcome it. 'Hello?' a voice asks from the darkness. You do not answer. You instead just lie down, knowing that no matter what you do, it doesn't matter";
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
		$question->question = "'Whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa! Hold on a second!' The voice calls out. How do you respond?";
		$question->is_ending = "No";
		$question->save();

	// 9
		$question = new Question();
		$question->question = "The voice falls silent";
		$question->is_ending = "Yes";
		$question->save();

	// 10
		$question = new Question();
		$question->question = "'Yes, but that doesn't matter,' the wizard responds, 'but we don't have much time. Will you come with me?'";
		$question->is_ending = "No";
		$question->save();

	// 11
		$question = new Question();
		$question->question = "'NO!!!!!' The wizard screams, as if some personal nerve had been struck. '....no...not at all. Will you come with me or not?'";
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
		$question->question = "You feel the chains snap off of you and you find the strength to stand. 'Now, face me! For I am the one who locked you up down here!' The wizard cries out. You can tell the wizard is close enough to attack, but you feel the wizard might also listen to reason. What will you do?";
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
		$question->question = "'You...you...you do?' The wizard asks with tears evident in his voice, 'Oh, brave traveler, I had always hoped, but I didn't dare expect it!' You hear a door open in the distance and feel a veiny old hand take your hand. As you and the wizard walk off into the distance, you do not know where you are heading, but you know that, as long as the two of you are together, no adventure, no threat of danger is too daunting. <br> Congratulations! You got the True Love ending!";
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

	// // 29
	// 	$question = new Question();
	// 	$question->question = "";
	// 	$question->is_ending = "";
	// 	$question->save();
	}
}
?>