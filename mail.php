<?php





function get_mail()
{
    return $mail;
    `<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Customer added Payment information</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head><body><?php $first_name = "alex"; $last_name = "balak"; $key = "12347546sqkjnhjdosqnhuo"; ?><main class="container"><h1 class="text-center">Hello</h1><p class="lead"><span class="fw-bold"><?= strtoupper($last_name) . " " . ucfirst($first_name) ?></span> has added payment information on Novocib.com.</p><input id="key" class="d-none" type="text" value="<?= $key ?>"><button id="btn" class="btn btn-primary">Copy</button></main><script>const btn = document.getElementById('btn'); btn.addEventListener("click", () => { navigator.clipboard.writeText(document.getElementById('key').value); btn.classList.remove("btn-primary"); btn.classList.add("btn-success"); btn.innerText = "Copied"; });</script></body></html>`;
}