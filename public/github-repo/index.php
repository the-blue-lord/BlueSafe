<!DOCTYPE html>

<html>

    <head>
        <title>BlueSafe</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/text.css">
        <link rel="stylesheet" href="../assets/css/tooltip.css">
        <link rel="stylesheet" href="../assets/css/github.css">
    </head>

    <body>

        <?php include "../../components/menu-bar.php"; ?>
        <main>
            <h1>Repository del progetto</h1>

            <div id="github-repo-card" class="repo-stats-card">
                <h3>BlueSafe Repository</h3>
                <p id="repo-desc">Loading repository details...</p>
                
                <div class="stats-row">
                    <span>⭐ <strong id="repo-stars">-</strong> Stars</span>
                    <span>🍴 <strong id="repo-forks">-</strong> Forks</span>
                    <span>🐛 <strong id="repo-issues">-</strong> Issues</span>
                </div>
                
                <a href="https://github.com/the-blue-lord/BlueSafe" target="_blank" rel="noopener">View on GitHub</a>
            </div>
        </main>
        
    </body>

    <?php include "../../components/footer.php"; ?>


    <script src="assets/scripts/github.js"></script>

</html>