<?php

// 1️⃣ Continue Question

for ($i=1;$i<=10;$i++)
   {
    if ($i==5 || $i==8){
        continue;
    }
    echo "Number : $i <br>";
   }
    echo "<br>";

// ১ থেকে ১০ পর্যন্ত number print করো, কিন্তু ৫ number skip করবে (print হবে না)।
// continue ব্যবহার করতে হবে।

// 2️⃣ Break Question

// ১ থেকে ১০ পর্যন্ত number print করো, কিন্তু যখন ৬ আসবে তখন loop বন্ধ হয়ে যাবে।
// break ব্যবহার করতে হবে।

for ($i=1;$i<=10;$i++){
echo "Number : $i <br>";
if($i==5){
    break;
}
    }