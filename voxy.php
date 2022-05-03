<html>
  <title>
    Word Count Voxy Challenge
  </title>
  <body>
    <form method="post" action="voxy.php">
	  <b>Input a text:</b><br>
      <textarea name="words" rows="4" cols="50"></textarea> <br><br>
      <input type="submit" value="Post text">
    </form>
  </body>
</html>



<?php
function count_words($word, $delimiter){
  // we could use str_word_count() but I believe it would make it too easy
  return count(explode($delimiter, $word));	
}

  if (!empty($_POST["words"])){
	print_r("Number of words: " . count_words($_POST["words"], " "));
  } elseif (!empty($_POST)) {
    print_r("Error: some text must be inserted!");
  }
?>