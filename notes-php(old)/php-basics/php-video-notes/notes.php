<!-- associative array -->

// associative array
$person = [
	'age ' => 31,
	'hair ' => 'brown',
	'career ' => 'web developer'
];

// push extra array
$person['name'] = ' Deo';

// unset destroys the specified variables
unset($person['age']);

// echo returns a string
echo $person[];

// dumps a value
var_dump($person);

//prints a message and exits the current script
die();

<!-- boolean -->

<h1>Task For The Day</h1>
<ul>
  <?php foreach ($task as $heading => $value) : ?>
  <li>
    <!-- take come to the key use loop -->
    <!-- ucwords - uppercase the first character of each word in a string -->
    <strong><?= ucwords($heading); ?>:</strong> <?= $value; ?>
  </li>
<?php endforeach; ?>
</ul>

<!-- you may do like this also -->
<ul>
  <li>
    <strong>Name: </strong><?= $task['title']; ?>
  </li>
  <li>
    <strong>Due Date: </strong><?= $task['due']; ?>
  </li>
  <li>
    <strong>Personal Responsible: </strong><?= $task['assigned_to']; ?>
  </li>
  <li>
    <strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?> <!-- this is ternary operator -->
  </li>
</ul>

<!-- boolean -->