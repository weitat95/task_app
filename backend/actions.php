<?php
    
    function addTask ($conn, $name, $detail){
        $sql = "INSERT INTO tasks (taskName, taskDetail) VALUES(?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $detail);
        $result = $stmt->execute();

        if($result === TRUE){
            echo "Success";
        }else{
            echo "Failed: " . $conn->error;
        }
    }

    function deleteTask($conn, $id){
        $sql = "DELETE FROM tasks WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);
        $result = $stmt->execute();

        if($result === TRUE){
            echo "Success";
        }else{
            echo "Failed: " . $conn->error;
        }
    }

    function updateTask($conn, $id, $name, $detail){
        $sql = "UPDATE tasks set taskName= ?, taskDetail = ? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $detail, $id);
        $result = $stmt->execute();


        if($result === TRUE){
            echo "Success";
        }else{
            echo "Failed: " . $conn->error;
        }
    }

    require_once('connect_database.php');

    if (isset($_POST['create'])){

        addTask($conn, $_POST['name'], $_POST['detail']);

    } elseif (isset($_POST['delete'])){

        deleteTask($conn, $_POST['id']);

    } elseif (isset($_POST['modify'])){
        
        updateTask($conn, $_POST['id'], $_POST['name'], $_POST['detail']);

    } elseif (isset($_GET['read'])){
        echo "readread";
    }

    $conn->close();
    header("Location: http://localhost:8889/index.php"); 

?>