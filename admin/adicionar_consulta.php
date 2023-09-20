<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Consulta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>


<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

$erro = '';

// Obtenha a lista de médicos e pacientes para preencher os dropdowns
$medicos_sql = "SELECT * FROM medicos";
$medicos_resultado = $conn->query($medicos_sql);

$pacientes_sql = "SELECT * FROM pacientes";
$pacientes_resultado = $conn->query($pacientes_sql);

$horarios_disponiveis = array();
for ($hora = 8; $hora <= 18; $hora++) {
    for ($minuto = 0; $minuto < 60; $minuto += 30) {
        $horario = sprintf('%02d:%02d', $hora, $minuto);
        $horarios_disponiveis[] = $horario;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_medico = $_POST['id_medico'];
    $id_paciente = $_POST['id_paciente'];
    $horario = $_POST['horario'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];

    // Verifique se o horário selecionado está disponível
    if (!in_array($horario, $horarios_disponiveis)) {
        $erro = "O horário selecionado não está disponível para agendamento.";
    } else {
        // Insira a nova consulta no banco de dados
        $sql = "INSERT INTO consultas (id_medico, id_paciente, horario, dia, mes) VALUES ('$id_medico', '$id_paciente', '$horario', '$dia', '$mes')";
        if ($conn->query($sql) === TRUE) {
            header('Location: consultas.php'); // Redireciona para a página de consultas após adicionar
            exit();
        } else {
            $erro = "Erro ao adicionar consulta: " . $conn->error;
        }
    }
}
?>


<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Adicionar Consulta</h1>

    <?php if (!empty($erro)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php } ?>

    <form method="post">
        <div class="mb-3">
            <label for="id_medico" class="form-label">Médico</label>
            <select class="form-select" id="id_medico" name="id_medico" required>
                <option value="">Selecione um médico</option>
                <?php while ($row = $medicos_resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="id_paciente" class="form-label">Paciente</label>
            <select class="form-select" id="id_paciente" name="id_paciente" required>
                <option value="">Selecione um paciente</option>
                <?php while ($row = $pacientes_resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="horario" class="form-label">Horário</label>
            <select class="form-select" id="horario" name="horario" required>
                <option value="">Selecione um horário</option>
                <?php foreach ($horarios_disponiveis as $horario) { ?>
                    <option value="<?php echo $horario; ?>"><?php echo $horario; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="mes" class="form-label">Mês</label>
            <select class="form-select" id="mes" name="mes" required>
                <option value="">Selecione um mês</option>
                <?php
                $meses = array(
                    1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março',
                    4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
                    7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro',
                    10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
                );
                foreach ($meses as $numero_mes => $nome_mes) { ?>
                    <option value="<?php echo $numero_mes; ?>"><?php echo $nome_mes; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="dia" class="form-label">Dia</label>
            <select class="form-select" id="dia" name="dia" required>
                <option value="">Selecione um dia</option>
                <?php
                for ($dia = 1; $dia <= 31; $dia++) { ?>
                    <option value="<?php echo $dia; ?>"><?php echo $dia; ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Consulta</button>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
