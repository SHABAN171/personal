<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Budget Tracker</title>
</head>
<body>
    <div class="NAV">
        <nav>
            <ul class="buttons">
                
                <li><a href="landpage.php">Home</a></li>
                        <li><a href="#About us">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><button><a href="login.php">Log in</a></li></button>
                        <li><button><a href="register.php">Sign up</a></button>

            </ul>
        </nav>
    </div>
    <header>
        <div class="hero">
            <h1>Take Control of Your Finances</h1>
            <p>Track your income and expenses effortlessly with Personal Budget Tracker.</p><br><br>
            <a href="index.php"><button type="GET STARTED" value="GET STARTED">GET STARTED</button></a>
        </div>
    </header>

    <section id="About us">
        <h2>About Personal Budget Tracker</h2>
        <p>Our Personal Budget Tracker helps you manage your finances, set budgets, and achieve your financial goals.</p>
    </section>

    <section id="features">
        <h2>Features</h2>
        <ul>
            <li>Real-time tracking of expenses</li>
            <li>Customizable budget categories</li>
            <li>Visual reports and charts</li>
            <li>Goal setting for savings</li>
        </ul>
    </section>

    <section id="how-it-works">
        <h2>How It Works</h2>
        <ol>
            <li>Sign up for a free account.</li>
            <li>Connect your bank accounts or input transactions manually.</li>
            <li>Start tracking and analyzing your spending.</li>
        </ol>
    </section>

    <section id="testimonials">
        <h2>What Users Say</h2>
        <blockquote>"The Personal Budget Tracker has transformed how I manage my money!"</blockquote>
        <cite>- Happy User</cite> <br><br>
        <div class="T">
        <a href="landpage.php" ><button type="GO UP" class="B" >GO UP</button></a>
        </div>
    </section>
    
    <footer>
        <p>Contact us: info@personalbudgettracker.com</p>
        <p>&copy; 2024 Personal Budget Tracker</p>
    </footer>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
}
.T{
    padding-left: 450px;
   
    

}
.B{
    background-color: bisque;
    width: 90px;
    height: 30px;
}

header {
    background-color: #e6ece7;
    color: white;
    padding: 20px 0;
    text-align: center;
}
.top{
    background-color: rgb(210, 131, 34);
    border-style: center;
   
}

.hero {
    padding: 50px;
  background-image: url(../personal/download.jpg);
}

h1 {
    margin: 0;
    font-size: 2.5em;
}

p {
    font-size: 1.2em;
}

.cta-button {
    background-color: #f9c74f;
    color: #333;
    padding: 15px 25px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

section {
    padding: 20px;
    margin: 20px 0;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

ul, ol {
    margin-left: 20px;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: white;
}
.nav{
    background-color:white;
    height: 30px;
    border-radius: 8px;
    padding-bottom: 2px;
}
ul li {
    display: inline;
    list-style-type: none;
    float: left;
    margin-left:130px;
    a{
        text-decoration-line: none;
    }
}

</style>