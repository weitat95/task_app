<html>
    <head>
        <title>Task App</title>
        <meta name="title" content="Task App" />
        <link rel="stylesheet" href="./css/main.css" type="text/css" />
    </head> 
    <body>
        <h2>Add tasks</h2>
        <form method="post" action="http://localhost:9999/actions.php">
            <span class="add-s">Task Name: </span> <input type="text" name="name"> <br>
            <span class="add-s">Task Details: </span> <input type="text" name="detail"> <br>
            <input value="Add Tasks" type="submit" name="create">
        </form>


        <h1>Tasks</h1>
        <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Task Name</th>
            <th>Task Details</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody id="taskBody">
        <tr id="taskTemp" style="display:none">
            <td id="id">10</td>
            <td id="name">taskName</td>
            <td id="detail">taskDetail</td>
            <td>
                <form method="post" action="http://localhost:9999/actions.php">
                    <input type="hidden" name="id" value="10" id="idd">
                    <input type="submit" value="DELETE" name="delete">
                </form> 
            </td>
            <td>
                <form method="post" action="http://localhost:9999/actions.php"> 
                    <input type="hidden" name="id" value="10" id="idm">
                        Name: <input type="text" name="name">
                        Detail: <input type="text" name="detail">
                    <input type="submit" value="MODIFY" name="modify">
                </form> 
            </td>
        </tr>
        </tbody>
        </table>

    </body>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</html>
