# Contributing to TheSource-theme

Thank you for your interest in contributing to TheSource-theme! This document outlines the process for contributing to this repository.

## Code of Conduct

By participating in this project, you agree to abide by our Code of Conduct. Please be respectful and considerate of others.

## How to Contribute

### Reporting Bugs

If you find a bug, please create an issue using the Bug Report template. Include as much detail as possible:

- A clear and descriptive title
- Steps to reproduce the issue
- Expected behavior
- Actual behavior
- Screenshots if applicable
- Environment information

### Suggesting Enhancements

If you have an idea for an enhancement, please create an issue using the Feature Request template. Include:

- A clear and descriptive title
- A detailed description of the proposed enhancement
- Any relevant examples or mockups
- Why this enhancement would be useful

### Pull Requests

1. Fork the repository
2. Create a branch with a descriptive name (`feature/add-new-feature`, `fix/issue-123`)
3. Make your changes
4. Write or update tests as needed
5. Ensure all tests pass
6. Update documentation as needed
7. Submit a pull request

### Commit Message Guidelines

We follow the Conventional Commits specification for commit messages:

```
<type>(<scope>): <subject>

<body>

<footer>
```

Types include:
- **feat**: A new feature
- **fix**: A bug fix
- **docs**: Documentation changes
- **style**: Formatting changes
- **refactor**: Code refactoring
- **test**: Adding or updating tests
- **chore**: Maintenance tasks

Example:
```
feat(auth): implement OAuth login

- Add OAuth provider integration
- Create login button component
- Add user session management

Fixes #123
```

## Development Setup

### Prerequisites

- Git
- PHP 7.4+
- Node.js and npm
- WordPress development environment

### Setup

```bash
# Clone the repository
git clone https://github.com/pausatf/TheSource-theme.git
cd TheSource-theme

# Initialize and update submodules (if applicable)
git submodule update --init --recursive

# # Install dependencies
npm install

# Build assets
npm run build
```

## Pull Request Process

1. Update the README.md with details of changes if applicable
2. Update the documentation as needed
3. The PR must pass all status checks
4. The PR requires at least one approval from a maintainer
5. Once approved, the PR will be merged by a maintainer

## Questions?

If you have any questions, please feel free to create an issue with the "question" label.
