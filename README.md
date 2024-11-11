
# GitHub User Activity CLI

This project is a simple command-line interface (CLI) application that uses the GitHub API to fetch and display a GitHub user's recent activity.

## Project Page

For more details, visit the project page at [https://roadmap.sh/projects/github-user-activity](https://roadmap.sh/projects/github-user-activity).

## Requirements

- PHP (Ensure PHP is installed on your system)

## Usage

1. **Clone the repository** or download the files to your local system.

2. **Run the application from the terminal** using the following command:
   ```bash
   php github_activity.php <username>
   ```
   Replace `<username>` with the GitHub username of the user whose activity you want to fetch.

### Example

```bash
php github_activity.php rui95fer
```

### Expected Output

The CLI will display recent activities such as push events, issues created, or repositories starred by the user.

### Error Handling

If an invalid username is entered or if the GitHub API fails, an error message will be shown in the terminal.

## Note

GitHub’s API requires a `User-Agent` header in requests. This application includes a simple `User-Agent` to satisfy this requirement.

