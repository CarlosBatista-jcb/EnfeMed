<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Consultas - EnfeMed</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Pesquisa de Consultas - EnfeMed</h1>
        <nav>
            <ul>
                <!-- Links para outras páginas do seu portal -->
            </ul>
        </nav>
    </header>

    <section class="content">
        <h2>Pesquisa de Consultas</h2>
        <form action="" method="post">
            <label for="pesquisa_medico">Pesquisar por Médico:</label>
            <select id="pesquisa_medico" name="pesquisa_medico">
                <option value="">Todos os médicos</option>
                <?php
                include 'includes/db_connection.php'; // Conexão com o banco de dados

                $sql = "SELECT id, nome FROM medicos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                    }
                }

                $conn->close();
                ?>
            </select>
            
            <label for="pesquisa_paciente">Pesquisar por Paciente:</label>
            <select id="pesquisa_paciente" name="pesquisa_paciente">
                <option value="">Todos os pacientes</option>
                <?php
                include 'includes/db_connection.php'; // Conexão com o banco de dados

                $sql = "SELECT id, nome FROM pacientes";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                    }
                }

                $conn->close();
                ?>
            </select>
            
            <label for="pesquisa_data">Pesquisar por Data (dia/mês/ano):</label>
            <input type="date" id="pesquisa_data" name="pesquisa_data">
            
            <button type="submit" name="pesquisar_consultas">Pesquisar</button>
        </form>

        <?php
        if (isset($_POST['pesquisar_consultas'])) {
            $pesquisa_medico = $_POST['pesquisa_medico'];
            $pesquisa_paciente = $_POST['pesquisa_paciente'];
            $pesquisa_data = $_POST['pesquisa_data'];

            include 'includes/db_connection.php'; // Conexão com o banco de dados

            $sql = "SELECT consultas.*, medicos.nome AS nome_medico, pacientes.nome AS nome_paciente 
                    FROM consultas 
                    INNER JOIN medicos ON consultas.id_medico = medicos.id 
                    INNER JOIN pacientes ON consultas.id_paciente = pacientes.id 
                    WHERE (consultas.id_medico = '$pesquisa_medico' OR '$pesquisa_medico' = '')
                    AND (consultas.id_paciente = '$pesquisa_paciente' OR '$pesquisa_paciente' = '')
                    AND (consultas.dia = '$pesquisa_data' OR '$pesquisa_data' = '')";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h3>Resultados da Pesquisa:</h3>";
                while ($row = $result->fetch_assoc()) {
                    echo "Médico: " . $row["nome_medico"] . "<br>";
                    echo "Paciente: " . $row["nome_paciente"] . "<br>";
                    echo "Horário: " . $row["horario"] . "<br>";
                    echo "Data: " . $row["dia"] . "<br>";
                    echo "<br>";
                }
            } else {
                echo "Nenhuma consulta encontrada.";
            }

            $conn->close();
        }
        ?>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
