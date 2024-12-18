<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des tâches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body { padding-top: 50px; } 
        body {background-color:rgb(114, 196, 182); }
        .task-list { max-width: 800px; margin: 0 auto; }
        .completed { text-decoration: line-through; color: #6c757d; }
        h1 {
    text-align: center;
    color: #555;
}
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #882424;
    padding: 10px;
    text-align: center;
}
th {
    background-color: #f4b41a;
    color: #5c1414;
}
a, button {
    display: inline-block;
    padding: 10px 15px;
    margin: 10px;
    text-decoration: none;
    color: #fff;
    background-color:rgb(196, 77, 8);
    border-radius: 5px;
}
a:hover, button:hover {
    background-color:rgb(0, 0, 0);
}
    </style>
</head>
</head>
<h1>Liste des tâches</h1>
<a href="/create">Ajouter une tâche</a>
<table>
 <thead>
 <tr>
 <th>ID</th>
 <th>Titre</th>
 <th>Statut</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($tasks as $task): ?>
 <tr>
 <td><?= $task['id'] ?></td>
 <td><?= $task['title'] ?></td>
 <td><?= $task['is_completed'] ? 'Terminée' :
'En cours' ?></td>
 <td>
 <?php if (!$task['is_completed']): ?>
<form method="POST" action="/complete">
<input type="hidden" name="id" value="<?= $task['id'] ?>">
 <button type="submit">Marquer comme terminée</button>
 </form>
 
 <?php endif; ?>
 <form method="POST" action="/delete">
 <input type="hidden" name="id" value="<?= $task['id'] ?>">
 <button type="submit">Supprimer</button>
 </form>
 </td>
 </tr>
 <?php endforeach; ?>
 </tbody>
</table>