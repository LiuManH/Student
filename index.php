<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{background: #20b2aa;}
        </style>
    </head>
    <body>
        <?php
        include('Student.php');
        $students = array();

        echo "<div>";
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        echo "</div>";
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $third = new Student();
        $third->surname = "Liu";
        $third->first_name = "ManHua";
        $third->add_email('study', '2639089532@qq.com');
        $third->add_grade(95);
        $third->add_grade(90);
        $third->add_grade(90);
        $students['b777'] = $third;

        $fourth = new Student();
        $fourth->surname = "Li";
        $fourth->first_name = "QianQian";
        $fourth->add_email('study', '2639089532@qq.com');
        $fourth->add_email('home', '452169013@qq.com');
        $fourth->add_email('work', '69994723419@qq.com');
        $fourth->add_grade(80);
        $fourth->add_grade(70);
        $fourth->add_grade(60);
        $students['c999'] = $fourth;

        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
