<?php include 'header.php'; ?>

    <main class="container">
        <h1>Свяжитесь с нами</h1>
        
        <form class="contact-form" action="sendmail.php" method="POST">
            <div class="form-group">
                <label>Имя:</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Сообщение:</label>
                <textarea name="message" rows="5" required></textarea>
            </div>
            
            <button type="submit">Отправить</button>
        </form>
    </main>

<?php include 'footer.php'; ?>