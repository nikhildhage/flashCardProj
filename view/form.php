<main class="main-entry">
    <h2 id="enterNumber">Enter Number</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" class="main-entry__form">
        <input 
            type="text" 
            class="main-entry__input" 
            id="num" 
            name="num" 
            maxlength="2" 
            autofocus
            required 
        >
        <button type="submit" class="main-entry__button" formmethod="GET">GO!</button>
    </form>
</main>