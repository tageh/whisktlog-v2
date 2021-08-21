<!DOCTYPE html>
<html>
    <head>
        <title>Whisky log</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="script.js"></script>
	
    </head>


    <body>
        <h1>Whisky log v2</h1>
        
        <form action="insert.php" method="post" id="whiskyForm" class="from"  onsubmit="return submitFrom();">
            <label for="name">Name: </label><br>
            <input class="inp" type ="text" id="name" name="name"><br>

            <label for="country">Country: </label><br>
            <select class="form-select selc"  type ="text" id="contry" name="country">
                <option selected>Choose a country</option>
                <option value="Scotland">Scotland</option>
                <option value="USA">USA</option>
                <option value="Ireland">Ireland</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Japan">Japan</option>
                <option value="Canada">Canada</option>
            </select>

            <label for="abv">ABV: </label><br>
            <input class="inp" type ="number" id="abv" name="abv" min="40" max="90"><br>

            <label for="name">Score: </label><br>
            <input class="inp" type ="number" id="score" name="score"><br>
            <br> 
            <input class="btn btn-outline-primary" type="submit" value="Add Whisky">
            <button class="btn btn-outline-primary" type="button" onclick="fetchData()">Retrive whiskys</button>

			<h3 id="succsess"></h3>
        </form>
        <div id="info"></div>
        
    </body>

</html>
