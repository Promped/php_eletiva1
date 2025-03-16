<!DOCTYPE html>
<html>
<head>
    <title> Lista 5</title>
</head>
<body>
    <h2>Exercicio 1</h2>
    <form method="post" action="L5resp1.php">>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <h3>Aluno <?php echo $i; ?></h3>
            Nome: <input type="text" name="alunos[<?php echo $i; ?>][nome]" required><br>
            Nota 1: <input type="number" step="0.01" name="alunos[<?php echo $i; ?>][nota1]" required><br>
            Nota 2: <input type="number" step="0.01" name="alunos[<?php echo $i; ?>][nota2]" required><br>
            Nota 3: <input type="number" step="0.01" name="alunos[<?php echo $i; ?>][nota3]" required><br>
        <?php endfor; ?>
        <br>
        <input type="submit" value="Calcular">
    </form>