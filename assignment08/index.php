<?php
    include "includes/header.php";

    //write PHP here...

    //define variables
    $_weight = 200;
    $_age = 35;
    $_fname = 'James';
    $_lname = 'Welu';

    //declare pounds to kg function
    function poundsToKg ($_arg1) {
        $_kg = $_arg1 * (1 / 2.2);
        return number_format($_kg, 2);
    }

?>
<body>

<!--
    James Welu
    assignment02.html
    INFO2340.WW
    Thoendel
    02/03/2020
-->


<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $_fname; ?> <?php echo $_lname; ?>!</p>
<p>I am <?php echo $_age; ?> years old. I weigh <?php echo $_weight; ?> pounds, which is <?php echo poundsToKg($_weight); ?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


