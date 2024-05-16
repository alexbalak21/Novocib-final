<?php

$text = "";

foreach ($_POST as $key => $value) {
    if (str_starts_with($key, "txt_")) $text .= ' | ' . $value;
}
echo $text;

?>

<form action="test.php" method="POST">
    <button id="addInput">+</button>
    <div><input type="text" value="name" name="name"></div>
    <textarea name="txt_o"></textarea>
    <div id="additionsInputs"></div>
    <button>Submit</button>
</form>



<script>
    let i = 1
    const form = document.querySelector('#additionsInputs')
    const plus = document.querySelector('#addInput')
    plus.addEventListener('click', (e) => {
        e.preventDefault()
        form.innerHTML += `<div><textarea name="txt_${i++}"></textarea></div>`
    })
</script>