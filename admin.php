<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header('Location: login.php');
    exit();
}

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

<body>
    <h1>Administração do Portfólio</h1>

    <h2>Categorias</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php
        $categories_list = [];
        while ($row = $categories_result->fetch_assoc()):
            $categories_list[] = $row;
        ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
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
        <?php while ($row = $projects_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['description']) ?></td>
                <td><?= htmlspecialchars($row['category_name']) ?></td>
                <td><?= htmlspecialchars($row['creation_date']) ?></td>
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
        <?php while ($row = $summary_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['project_id']) ?></td>
                <td><?= htmlspecialchars($row['project_title']) ?></td>
                <td><?= htmlspecialchars($row['project_description']) ?></td>
                <td><?= htmlspecialchars($row['category_name']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <hr>
    <h1>Projetos Agrupados por Categoria</h1>

    <?php foreach ($categories_list as $cat):
        $category_name = $cat['name'];

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
            <?php if ($filtered_result->num_rows === 0): ?>
                <tr>
                    <td colspan="4" style="text-align: center; color: gray;">Nenhum projeto associado a esta categoria.</td>
                </tr>
            <?php else: ?>
                <?php while ($row = $filtered_result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['project_id']) ?></td>
                        <td><?= htmlspecialchars($row['project_title']) ?></td>
                        <td><?= htmlspecialchars($row['project_description']) ?></td>
                        <td><?= htmlspecialchars($row['category_name']) ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </table>
    <?php endforeach; ?>

    <?php
    $filtered_query->close();
    $conn->close();
    ?>

 <?php include 'includes/footer.php' ?>