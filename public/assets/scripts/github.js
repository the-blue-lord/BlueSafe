document.addEventListener('DOMContentLoaded', () => {
    const repoOwner = 'the-blue-lord';
    const repoName = 'BlueSafe';
    const apiUrl = `https://api.github.com/repos/${repoOwner}/${repoName}`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Update the DOM with live data from GitHub
            document.getElementById('repo-desc').textContent = data.description || 'No description provided.';
            document.getElementById('repo-stars').textContent = data.stargazers_count;
            document.getElementById('repo-forks').textContent = data.forks_count;
            document.getElementById('repo-issues').textContent = data.open_issues_count;
        })
        .catch(error => {
            console.error('Error fetching GitHub stats:', error);
            document.getElementById('repo-desc').textContent = 'Could not load repository stats.';
        });
});