# GitHub Flow Guide for PAUSATF

This guide outlines the GitHub Flow process that all PAUSATF repositories follow.

## GitHub Flow Process

1. **Create a Branch**
   - Branch from `main`
   - Use descriptive branch names: `feature/feature-name`, `fix/bug-name`, `docs/doc-change`
   - Example: `feature/add-user-authentication`

2. **Add Commits**
   - Make focused, incremental changes
   - Follow the commit message template
   - Keep commits small and focused on a single task
   - Example: `feat(auth): add login form component`

3. **Open a Pull Request**
   - Open a PR early for discussion
   - Use the PR template
   - Reference any related issues: "Fixes #123"
   - Provide clear description of changes

4. **Review and Discussion**
   - At least one approval required
   - Address all feedback
   - All status checks must pass
   - All conversations must be resolved

5. **Merge**
   - Squash and merge to keep history clean
   - Delete branch after merging

6. **Deploy**
   - Deployments are automated from the `main` branch
   - Monitor deployment for any issues

## Commit Message Format

```
<type>(<scope>): <subject>

<body>
```

### Types
- **feat**: A new feature
- **fix**: A bug fix
- **docs**: Documentation changes
- **style**: Formatting, missing semicolons, etc; no code change
- **refactor**: Refactoring production code
- **test**: Adding tests, refactoring tests; no production code change
- **chore**: Updating build tasks, package manager configs, etc; no production code change

### Example

```
feat(auth): implement OAuth login

- Add OAuth provider integration
- Create login button component
- Add user session management
- Update tests for new authentication flow

Fixes #123
```
