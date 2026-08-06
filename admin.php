<?php  
include 'includes/header.php';

// Configurações de conexão com o banco de dados
$servername = "localhost"; 
$username = "root"; 
$password = "1234"; 
$dbname = "portifolio_db"; 

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname); 

// Verificação da conexão
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

// Consulta para obter categorias e projetos
$categories_query = "SELECT * FROM categories"; 
$projects_query = "SELECT projects.id, projects.title, projects.description, categories.name AS category_name, projects.creation_date 
                   FROM projects
                   JOIN categories ON projects.category_id = categories.id"; 

$categories_result = $conn->query($categories_query); 
$projects_result = $conn->query($projects_query); 

// Consulta para obter dados da view_projects_summary
$summary_query = "SELECT * FROM view_projects_summary"; 
$summary_result = $conn->query($summary_query); 

// Prepara a consulta filtrada que será executada várias vezes dentro do loop de categorias
$filtered_query = $conn->prepare("SELECT * FROM view_projects_by_category WHERE category_name = ?"); 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Página de Administração do Portfólio</title>
 <style>
 table { 
 width: 100%; 
 border-collapse: collapse; 
 margin-bottom: 30px;
 } 
 table, th, td { 
 border: 1px solid black; 
 } 
 th, td { 
 padding: 8px; 
 text-align: left; 
 } 
 th {
 background-color: #a5a1a1;
 }
 </style>
</head>
<body>
 <h1>Administração do Portfólio</h1>
 
 <h2>Categorias</h2>
 <table>
 <tr>
 <th>ID</th>
 <th>Nome</th>
 </tr>
 <?php 
 // Guardamos as categorias em um array para reutilizar no relatório final por categoria
 $categories_list = [];
 while($row = $categories_result->fetch_assoc()): 
     $categories_list[] = $row;
 ?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['name']; ?></td>
 </tr>
 <?php endwhile; ?>
 </table>

 <h2>Projetos</h2>
 <table>
 <tr>
 <th>ID</th>
 <th>Título</th>
 <th>Descrição</th>
 <th>Categoria</th>
 <th>Data de Criação</th>
 </tr>
 <?php while($row = $projects_result->fetch_assoc()): ?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['title']; ?></td>
 <td><?php echo $row['description']; ?></td>
 <td><?php echo $row['category_name']; ?></td>
 <td><?php echo $row['creation_date']; ?></td>
 </tr>
 <?php endwhile; ?>
 </table>


 <h1>Relatórios do Portfólio</h1>
    
    <h2>Resumo dos Projetos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Categoria</th>
        </tr>
        <?php while($row = $summary_result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['project_id']; ?></td>
            <td><?php echo $row['project_title']; ?></td>
            <td><?php echo $row['project_description']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <hr>
    <h1>Projetos Agrupados por Categoria</h1>

    <?php 
    // Percorre cada uma das categorias cadastradas no banco de dados
    foreach($categories_list as $cat): 
        $category_name = $cat['name'];
        
        // Executa a busca na View filtrando pelo nome da categoria atual do loop
        $filtered_query->bind_param('s', $category_name); 
        $filtered_query->execute(); 
        $filtered_result = $filtered_query->get_result(); 
    ?>
        <h3>Categoria: <?php echo htmlspecialchars($category_name); ?></h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Categoria</th>
            </tr>
            <?php if($filtered_result->num_rows == 0): ?>
                <tr>
                    <td colspan="4" style="text-align: center; color: gray;">Nenhum projeto associado a esta categoria.</td>
                </tr>
            <?php else: ?>
                <?php while($row = $filtered_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['project_id']; ?></td>
                    <td><?php echo $row['project_title']; ?></td>
                    <td><?php echo $row['project_description']; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </table>
    <?php endforeach; ?>

 <?php
 // Fechamento das conexões
 $filtered_query->close();
 $conn->close(); 
 ?>
</body>
</html>
