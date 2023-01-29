<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

/*
The basic functions for file handling include:
  fopen() - opens a file
  fread() - reads a file
  fwrite() - writes to a file
  fclose() - closes a file
  file_get_contents() - reads a file into a string
  file_put_contents() - writes a string to a file

Here is an example of how to read a file:
  $file = fopen("example.txt", "r") or die("Unable to open file!");
    echo fgets($file) . "<br>";
    while(!feof($file)) {
  }
  fclose($file);
In this example, we are using the fopen() function to open the file "example.txt" in read mode (the "r" in the second parameter). The or die() function is used to display an error message if the file is unable to be opened. The while loop reads the file line by line using the fgets() function, and then echoes each line. Finally, the fclose() function is used to close the file.

Here is an example of how to write to a file:
  $file = fopen("example.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($file, $txt);
  $txt = "Jane Smith\n";
  fwrite($file, $txt);
  fclose($file);
In this example, we are using the fopen() function to open the file "example.txt" in write mode (the "w" in the second parameter). The or die() function is used to display an error message if the file is unable to be opened. We are then using the fwrite() function to write the string "John Doe" to the file, and then writing the string "Jane Smith" to the file. Finally, the fclose() function is used to close the file.

You can also use file_get_contents() and file_put_contents() to read and write files respectively.
  $file = "example.txt";
  $current = file_get_contents($file);
  $current .= "John Doe\n";
  file_put_contents($file, $current);
In this example, we are using file_get_contents() to read the contents of the file "example.txt" into a string, and then appending the string "John Doe" to the contents of the file. We are then using file_put_contents() to write the modified contents of the file back to the file.

It is important to note that when working with files, it is necessary to handle errors and check for the proper permissions to read and write files.


*/


$file = 'extras/users.txt';

if(file_exists($file)) {
  // echo readfile($file); //in the end displays number of bytes of the file

  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
  fwrite($handle, $contents);
  fclose($handle);
}


?>