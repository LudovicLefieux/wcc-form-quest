<form action="thanks.php" method="post" style="display:flex; flex-direction: column;">
    <label for="firstname">Firstname:</label>
    <input type="text" name="user_firstname" id="firstname">
    <label for="lastname">Lastname:</label>
    <input type="text" name="user_lastname" id="lastname">
    <label for="email">E-mail:</label>
    <input type="email" name="user_email" id="email">
    <label for="phone">Phone:</label>
    <input type="tel" name="user_phone" id="phone">
    <label for="subject">Subject:</label>
    <select name="subject" id="subject">
        <option value="pokemon">Pokémon</option>
        <option value="guitare">Guitare</option>
        <option value="code">Code</option>
    </select>
    <label for="message">Message:</label>
    <textarea name="user_message" id="message"></textarea>
    <button class="button" type="submit">Send your message</button>
</form>