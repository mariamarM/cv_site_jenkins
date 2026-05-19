<?php
// Datos del CV (puedes cambiarlos fácilmente)
$name = "Marias Andreo";
$title = "Desarrollador Web / Estudiante DevOps";
$email = "tuemail@example.com";
$phone = "+34 600 000 000";
$location = "Barcelona, España";

$about = "Estudiante de desarrollo web con interés en DevOps, CI/CD, Docker y automatización de despliegues.";

$experience = [
    [
        "role" => "Desarrollador Junior",
        "company" => "Proyecto personal",
        "date" => "2025 - Actualidad",
        "desc" => "Desarrollo de aplicaciones web con PHP, React y despliegue automatizado con Jenkins."
    ],
    [
        "role" => "Prácticas DAW",
        "company" => "Centro educativo",
        "date" => "2024",
        "desc" => "Creación de aplicaciones web básicas y gestión de bases de datos MySQL."
    ]
];

$skills = [
    "PHP", "HTML", "CSS", "JavaScript",
    "Git", "GitHub", "Docker", "Jenkins",
    "MySQL", "Linux"
];

$projects = [
    [
        "name" => "CV Online CI/CD",
        "desc" => "CV desplegado automáticamente con Jenkins + Docker + Cloudflare.",
        "tech" => "PHP, Jenkins, Docker"
    ],
    [
        "name" => "API REST básica",
        "desc" => "API en PHP para gestionar datos de usuarios.",
        "tech" => "PHP, MySQL"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CV - <?php echo $name; ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
        }

        header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }

        h1 {
            margin: 0;
        }

        .section {
            margin-top: 25px;
        }

        .title {
            border-left: 5px solid #007BFF;
            padding-left: 10px;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .item {
            margin-bottom: 15px;
        }

        .skills span {
            display: inline-block;
            background: #007BFF;
            color: white;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 5px;
            font-size: 12px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>

<body>

<div class="container">

    <header>
        <h1><?php echo $name; ?></h1>
        <img src="https://ik.imagekit.io/id39lfcc7d/img_Dni_yo.png jpg    
            ?tr=w-300,h-300,c-maintain_ratio,f-webp,q-80"   alt="Foto de perfil" >
        <h3><?php echo $title; ?></h3>
        <p>
            📍 <?php echo $location; ?> |
            📧 <?php echo $email; ?> |
            📞 <?php echo $phone; ?>
        </p>
    </header>

    <div class="section">
        <div class="title">Sobre mí</div>
        <p><?php echo $about; ?></p>
    </div>

    <div class="section">
        <div class="title">Experiencia</div>

        <?php foreach ($experience as $exp): ?>
            <div class="item">
                <b><?php echo $exp["role"]; ?></b> - <?php echo $exp["company"]; ?><br>
                <small><?php echo $exp["date"]; ?></small>
                <p><?php echo $exp["desc"]; ?></p>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="section">
        <div class="title">Habilidades</div>
        <div class="skills">
            <?php foreach ($skills as $skill): ?>
                <span><?php echo $skill; ?></span>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section">
        <div class="title">Proyectos</div>

        <?php foreach ($projects as $project): ?>
            <div class="item">
                <b><?php echo $project["name"]; ?></b><br>
                <small><?php echo $project["tech"]; ?></small>
                <p><?php echo $project["desc"]; ?></p>
            </div>
        <?php endforeach; ?>

    </div>

    <footer>
        CV generado con PHP + CI/CD (Jenkins + Docker + Cloudflare)
    </footer>

</div>

</body>
</html>