<?php
class AnswersSeeder extends Seeder {
	public function run() {

	// First round (Question 1)
		$answer = new Answer();
		$answer->question_id = 1;
		$answer->answer = "Try to get up";
		$answer->leads_to_id = 2;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 1;
		$answer->answer = "Call Out";
		$answer->leads_to_id = 3;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 1;
		$answer->answer = "Accept your fate and remain lying down forever";
		$answer->leads_to_id = 4;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 1;
		$answer->answer = "SCREAAAAM!!!!";
		$answer->leads_to_id = 5;
		$answer->save();

	// Second Round (Questions 2-5)
		$answer = new Answer();
		$answer->question_id = 2;
		$answer->answer = "How do you know my name?";
		$answer->leads_to_id = 6;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 2;
		$answer->answer = "Where am I?";
		$answer->leads_to_id = 7;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 2;
		$answer->answer = "Your voice is GAY!";
		$answer->leads_to_id = 9;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 2;
		$answer->answer = "SCREAAAM!!!";
		$answer->leads_to_id = 5;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 3;
		$answer->answer = "How do you know my name?";
		$answer->leads_to_id = 6;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 3;
		$answer->answer = "Where am I?";
		$answer->leads_to_id = 7;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 3;
		$answer->answer = "What the f*** is that supposed to mean?";
		$answer->leads_to_id = 9;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 3;
		$answer->answer = "SCREEEAM!!!";
		$answer->leads_to_id = 5;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 5;
		$answer->answer = "Because I'm chained to the ground, why do you think?";
		$answer->leads_to_id = 7;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 5;
		$answer->answer = "Who are you?";
		$answer->leads_to_id = 6;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 5;
		$answer->answer = "Because I become aroused when I'm chained up!";
		$answer->leads_to_id = 9;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 5;
		$answer->answer = "SCREEEEAM!!!";
		$answer->leads_to_id = 8;
		$answer->save();

	// Third Round (questions 6-9)
		$answer = new Answer();
		$answer->question_id = 6;
		$answer->answer = "Wizards exist?";
		$answer->leads_to_id = 10;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 6;
		$answer->answer = "A wizard? You mean, like Gandalf?";
		$answer->leads_to_id = 11;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 6;
		$answer->answer = "A wizard? More like a fairy, given how gay you are!";
		$answer->leads_to_id = 13;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 6;
		$answer->answer = "SCREEEEAM!!!";
		$answer->leads_to_id = 5;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 7;
		$answer->answer = "Twenty Years?";
		$answer->leads_to_id = 10;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 7;
		$answer->answer = "A Wizard? You mean, like Gandalf?";
		$answer->leads_to_id = 11;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 7;
		$answer->answer = "GAY!";
		$answer->leads_to_id = 13;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 7;
		$answer->answer = "SCREEEEAM!!!";
		$answer->leads_to_id = 5;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 8;
		$answer->answer = "Sorry. This is just really scary for me. Can you get me out of here?";
		$answer->leads_to_id = 10;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 8;
		$answer->answer = "You sound like a wizard. *gasp* Are you Gandalf?!";
		$answer->leads_to_id = 11;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 8;
		$answer->answer = "Sorry, my gaydar was going off!";
		$answer->leads_to_id = 13;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 8;
		$answer->answer = "SCREEEEAM!!!";
		$answer->leads_to_id = 12;
		$answer->save();

// Round 4 (questions 10-13)
		$answer = new Answer();
		$answer->question_id = 10;
		$answer->answer = "Yes";
		$answer->leads_to_id = 14;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 10;
		$answer->answer = "No";
		$answer->leads_to_id = 13;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 11;
		$answer->answer = "Yes";
		$answer->leads_to_id = 14;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 11;
		$answer->answer = "No";
		$answer->leads_to_id = 13;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 12;
		$answer->answer = "Yes";
		$answer->leads_to_id = 14;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 12;
		$answer->answer = "SCREEEEEEEEAAAAAAAAM!!!";
		$answer->leads_to_id = 13;
		$answer->save();

// Round 5 (question 14)
		$answer = new Answer();
		$answer->question_id = 14;
		$answer->answer = "Attack the Wizard";
		$answer->leads_to_id = 15;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 14;
		$answer->answer = "Stand Down";
		$answer->leads_to_id = 16;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 14;
		$answer->answer = "Quote Monty Python";
		$answer->leads_to_id = 17;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 14;
		$answer->answer = "SCREEEEAAAAM!!!";
		$answer->leads_to_id = 18;
		$answer->save();

// Round 6 (questions 15-18)
		$answer = new Answer();
		$answer->question_id = 15;
		$answer->answer = "Walk to the sound";
		$answer->leads_to_id = 19;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 15;
		$answer->answer = "Stay where you are";
		$answer->leads_to_id = 20;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 16;
		$answer->answer = "I don't want to fight you";
		$answer->leads_to_id = 21;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 16;
		$answer->answer = "Because...I love you";
		$answer->leads_to_id = 22;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 16;
		$answer->answer = "Sucker!";
		$answer->leads_to_id = 15;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 16;
		$answer->answer = "Wax Poetic";
		$answer->leads_to_id = 23;
		$answer->save();

// Round 7 (questions 19-23)
		$answer = new Answer();
		$answer->question_id = 19;
		$answer->answer = "'John Jacob Jingleheimer Smith'";
		$answer->leads_to_id = 24;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 19;
		$answer->answer = "Say your Name";
		$answer->leads_to_id = 25;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 19;
		$answer->answer = "Umm...";
		$answer->leads_to_id = 26;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 19;
		$answer->answer = "Javert";
		$answer->leads_to_id = 27;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 20;
		$answer->answer = "Yes";
		$answer->leads_to_id = 28;
		$answer->save();

// Round 8 (questions 24-28)
		$answer = new Answer();
		$answer->question_id = 25;
		$answer->answer = "Socialism";
		$answer->leads_to_id = 26;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 25;
		$answer->answer = "Umm...";
		$answer->leads_to_id = 26;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 25;
		$answer->answer = "Humans";
		$answer->leads_to_id = 29;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 25;
		$answer->answer = "I know the answer...but how about you tell me just so I can see if I'm right?";
		$answer->leads_to_id = 26;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 28;
		$answer->answer = "Yes";
		$answer->leads_to_id = 30;
		$answer->save();

// Round 9 (questions 29-30)
		$answer = new Answer();
		$answer->question_id = 29;
		$answer->answer = "Babes, babes, and more babes!";
		$answer->leads_to_id = 31;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 29;
		$answer->answer = "You, dragon, I love you!";
		$answer->leads_to_id = 32;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 29;
		$answer->answer = "A Dire Straights reunion tour!";
		$answer->leads_to_id = 33;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 29;
		$answer->answer = "To escape this dungeon!";
		$answer->leads_to_id = 31;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 30;
		$answer->answer = "Yeah, I'm good";
		$answer->leads_to_id = 34;
		$answer->save();

// Round 10 (question 31)
		$answer = new Answer();
		$answer->question_id = 31;
		$answer->answer = "Of course I'll comply! I love you!";
		$answer->leads_to_id = 35;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 31;
		$answer->answer = "What? Hell no!";
		$answer->leads_to_id = 36;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 31;
		$answer->answer = "Ask about the homeowner's association";
		$answer->leads_to_id = 37;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 31;
		$answer->answer = "Fine. I'll comply";
		$answer->leads_to_id = 38;
		$answer->save();

// Round 11 (questions 37-38)
		$answer = new Answer();
		$answer->question_id = 37;
		$answer->answer = "Hell Yes!";
		$answer->leads_to_id = 39;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 37;
		$answer->answer = "Hell No!";
		$answer->leads_to_id = 36;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 38;
		$answer->answer = "Yes";
		$answer->leads_to_id = 40;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 38;
		$answer->answer = "No";
		$answer->leads_to_id = 41;
		$answer->save();

// Round 12 (question 40)
		$answer = new Answer();
		$answer->question_id = 40;
		$answer->answer = "Alive";
		$answer->leads_to_id = 42;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 40;
		$answer->answer = "Dead";
		$answer->leads_to_id = 42;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 40;
		$answer->answer = "I don't care about the wizard! I care about you! I love you, Sage!";
		$answer->leads_to_id = 43;
		$answer->save();

// Final Round
		$answer = new Answer();
		$answer->question_id = 42;
		$answer->answer = "Become the Wizard";
		$answer->leads_to_id = 44;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 42;
		$answer->answer = "Escape the dungeon";
		$answer->leads_to_id = 45;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 42;
		$answer->answer = "Love";
		$answer->leads_to_id = 46;
		$answer->save();

		$answer = new Answer();
		$answer->question_id = 42;
		$answer->answer = "Ban books with mature content";
		$answer->leads_to_id = 47;
		$answer->save();
	}
}
?>