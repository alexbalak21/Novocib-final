<?php
class Nav
{
    static function bar()
    {
        return <<< NAV
<ul class="navbar">
    <li><a href="/">Home</a></li>
    <li><a href="/page">Page</a></li>
    <li><a href="/user">User</a></li>
    <li><a href="/products">Products</a></li>
</ul>
NAV;
    }
}
?>

<style>
    .navbar {
        border: 1px solid black;
        display: flex;

        li {
            list-style: none;
        }

        li a {
            display: block;
            padding: 10px 40px;
            color: dodgerblue;
            text-decoration: none;
        }

        li a:hover {
            color: red;
        }
    }
</style>