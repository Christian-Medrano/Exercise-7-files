<?php 
  $title = 'Christian$rsquo;s Basic Info';
  $name = 'Christian';
  $age = 20;
  $number1 = 2;
  $number2 = 3;
  $sum = $number1 + $number2;
  $wrongDif = $sum + $number1;
  $treat = 'cookie';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title><?php echo $title; ?></title>
   <link rel="stylesheet" href="css/bootstrap.css">
 </head>
 <body>
  <main class="container py-4">
   <h1>Meet <?php echo $name; ?>.</h1>
   <p><?php echo $name ?> is <?php echo $age ?> years old.</p>
   <p><?php echo $name; ?> likes coding, but his real passion is math.</p>
   <p>For example, he knows that <?php echo $number1; ?> + <?php echo $number2; ?> = <?php echo $sum; ?>.</p>
   <p>Good job, Christian. You get a <?php echo $treat; ?>.</p>
   <p><?php echo $name; ?> also knows that <?php echo ''.$sum.' - '.$number2.' = '.$wrongDif.'.'; ?></p>
   <p>What? No, <?php echo $name; ?>. That's wrong.</p>
   <p>Wait, what are you doing with that crowbar?</p>
   <p><?php echo $name; ?></p>
   <p><?php echo strtoupper($name); ?>!?!</p>
   <p>-</p>


  </main>
 </body>
 </html>