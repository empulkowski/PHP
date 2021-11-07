<?php
include "images/header_for_web.jpg";
include "css/styles.css";
?>

         <style>

                header {
                    text-align: center;
                    padding-bottom: 50px;
                }

                footer {
                    text-align: center;
                    padding-top: 50px;
                }

                body {
                    font-family: Arial, sans-serif;
                }

                h5 {
                    text-transform: none;
                    padding: 0 0 0 0;
                    margin: 0 0 0 0;
                    color: saddlebrown;
                }


                form {
                    text-transform: uppercase;
                    margin-left: 100px;
                    color: #343434;
                }

        </style>




        <?php




        //CREATE A MULTIDIMENSIONAL ARRAY TO STORE QUESTIONS CHOICES AND ANSWERS


        $questions = array(

            0 => array('question' => 'Which term describes the gear a fisherman uses?',
                  'name' => 'q1',
                  'choices' => array(
                              'luggage',
                              'tackle',//correct
                              'supply',
                              'paraphernalia'),
                  'answer' => 'tackle'),

            1 => array('question' => 'In the fishing vocab, what is a leader?',
                  'name' => 'q2',
                  'choices' => array(
                              'a short length of fishing line',//correct
                              'the line between the hook and sinker',
                              'the line in between the guides',
                              'the whole line'),
                  'answer' => 'a short length of fishing line'),

            array('question' => 'Which of these is a type of fishing rod?',
                  'name' => 'q3',
                  'choices' => array(
                               'birch reel',
                               'webster',
                               'ugly stick',//correct
                               'flowage rod'),
                  'answer' =>  'ugly stick'),

            array('question' =>  'How many points does a treble hook have?',
                  'name' => 'q4',
                  'choices' => array(
                               '1',
                               '2',
                               '3',//correct
                               '4'),
                   'answer' => '3'),

             array('question' => 'What is the item on the hook more commonly called?',
                   'name' => 'q5',
                   'choices' => array(
                               'bait',//correct
                               'catch',
                               'type',
                               'feed'),
                   'answer' => 'bait'),

             array('question' => 'You’re fishing in 5ft grass flats. What are you most likely to catch?',
                   'name' => 'q6',
                   'choices' => array(
                               'bass',
                               'northern',
                               'walleye',
                               'trout'),//correct
                   'answer' => 'trout'),

             array('question' => 'Sometimes, fish come close to the surface, and your line needs to be held up by something.<br> What is the common term used by fishermen?',
                   'name' => 'q7',
                   'choices' => array(
                               'float',//correct
                               'sinker',
                               'bobber',
                               'hook'),
                    'answer' => 'float'),

              array('question' => 'There are lures to attract a stray swimmer’s attention. A few of them have a special tail<br> that can spin. what is the name of this lure',
                    'name' => 'q8',
                    'choices' => array(
                               'jigs',
                               'spinner baits',//correct
                               'jerk baits',
                               'frogs'),
                    'answer' => 'spinner baits'),

             array('question' => 'March browns, gray fox, light Cahill, quill Gordon, blue dun, and green drakes are all patterns of what?',
                   'name' => 'q9',
                   'choices' => array(
                                'fish eggs',
                                'horseflies',
                                'fishtails',
                                'mayflies'),//correct
                   'answer' => 'mayflies'),

             array('question' => 'What is usually used as bait on a tip-up?',
                   'name' => 'q10',
                   'choices' => [
                                 'minnow',//correct
                                 'worm',
                                 'leech',
                                 'frog'
                   ],
                    'answer' => 'minnow')
                );

            ?>




    <header><img src="images/header_for_web.jpg" alt="Fishing Picture. "></header>


    <form method="post">
            <?php foreach ($questions as $questionIndex => $question) : ?>
                  <?php echo $question['question'] ?><br>


            <?php foreach ($question['choices'] as $choiceIndex => $choice) : ?>
                     <h5><input type="radio" name="choice" checked="checked" id="choice_<?php echo $choiceIndex ?>" value="<?php echo $choice?>" />
                     <label for="choice_<?php echo $choiceIndex ?>"><?php echo $choice ?></label></h5><br>

            <?php endforeach ?>
            <?php endforeach ?>
    </form>


    //submit button
    <p>
        <button type="submit" name="submit">Submit</button>
    </p>

<?php



?>

    //output form
    <?php






    //foreach ($array as $key => $value)
    // pull one element out as $question
    foreach ($questions as $questionIndex => $question) {
        // $question refers to
//    array('question' => 'What is usually used as bait on a tip-up?',
//        'name' => 'q10',
//        'choices' => array(
//            'minnow',//correct
//            'worm',
//            'leech',
//            'frog'),
//        'answer' => 'minnow')
        echo $question['question'];
        foreach ($question['choices'] as $choiceIndex => $choice) {
        // $choice refers to
//            'minnow',//correct

        echo "<br> - $choice <br>";
        }
        }
    ?>






    //validate that they filled out the form
    <?php
        if($question['choices'] =='' ){
		    echo '<h2>Please answer all questions.</h2>';
	    }

        if($question['choices'] == ($question['answer'])){
            echo '<h2>CORRECT!</h2>';
     }
    ?>





    //footer
    <footer><img src="images/footer.jpg" alt="Fishing Picture. "></footer>



    //output choice
    //output text if correct
    //output text for correct answer if wrong
    //check for correct answers
    //do the math to figure out the percentage










//radio buttons need the same name
//what ever you using as the name in the radio button use post to get that back
//$_POST[$the valuse used] ?? 'unknown')
//to check each question use a loop
//call name from the array and compare anwers in array... $_POST[$item['name']] ===$item['anser]; answer is going to be a string only doing this if the they put it in a quiz so wrap it in an if statement and then check if answer is correct












?>