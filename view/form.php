<main class="main-entry">
    <h2 id="enterNumber">Enter Number</h2>
    <form action='<?php $_SERVER["php_self"];?>' method="GET" class="main-entry__form">
        <input 
            type="text" 
            class="main-entry__input" 
            id="num" 
            name="num" 
            maxlength="2" 
            autofocus 
            required
        >
        <button class="main-entry__button">GO!</button>
    </form>
</main>