<?php
class Tst
{
    static function test()
    {
        return <<<XYZ
<div class="demotest" >
<h2>Test</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nisi commodi culpa dolore, eligendi eius accusantium odit ea accusamus corrupti doloremque, aliquid eum dolorem nesciunt, saepe nemo quas. Facilis, debitis?</p>
<button>Test</button>
</div>
XYZ;
    }
}
?>

<style>
    .demotest {
        padding: 0 10px;

        h2 {
            color: green;
        }

        p {
            color: blue;
        }

        button {
            color: red
        }
    }
</style>