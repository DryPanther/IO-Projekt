<?php
$con = new PDO("mssql:host=localhost;dbname=IO_Projekt",'root','');
if  (isset($_POST["submit"])){
    $str = $_POST["Szukaj"];
    $sth = $con->prepare("SELECT * FROM Książki WHERE Tytuł LIKE '%$str%' OR Autor LIKE '%$str%'")
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
    if($row = $sth->fetch()){
        ?>
        <table>
            <tr>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>IlośćStron</th>
                <th>Cena</th>
            </tr>
            <tr>
                <td><?php echo $row->Tytuł; ?></td>
                <td><?php echo $row->Autor; ?></td>
                <td><?php echo $row->IlośćStron; ?></td>
                <td><?php echo $row->Cena; ?></td>
            </tr>
    </table>
    <?php
    }
    else{
        echo "Nie ma książki z takimi parametrami"
    }
}
?>